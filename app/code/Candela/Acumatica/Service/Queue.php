<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Service;

use Magento\Framework\Exception\CouldNotSaveException;
use Candela\Acumatica\Api\Data\SubmissionInterface;
use Candela\Acumatica\Model\ResourceModel\Submission\Collection;

class Queue implements \Candela\Acumatica\Api\QueueInterface
{
    /**
     * @var \Candela\Acumatica\Model\Config\General
     */
    private $configGeneral;

    /**
     * @var \Candela\Acumatica\Model\Submission\HandlerInterface
     */
    private $handlerPool;

    /**
     * @var \Candela\Acumatica\Model\Submission\Packer
     */
    private $packer;

    /**
     * @var \Candela\Acumatica\Api\SubmissionRepositoryInterface
     */
    private $submissionRepository;

    /**
     * @var \Candela\Acumatica\Model\ResourceModel\Submission\CollectionFactory
     */
    private $submissionCollectionFactory;

    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;

    /**
     * @var \Candela\Acumatica\Helper\Notification
     */
    private $notificationHelper;

    /**
     * @var int
     */
    private $submissionSendLimit = 100;

    /**
     * @var \Magento\Framework\Stdlib\DateTime\TimezoneInterface
     */
    private $timezone;

    /**
     * @var \Candela\Acumatica\Platform\Adapter
     */
    private $adapter;

    /**
     * @param \Candela\Acumatica\Model\Config\General $configGeneral
     * @param \Candela\Acumatica\Model\Submission\HandlerInterface $handlerPool
     * @param \Candela\Acumatica\Model\Submission\Packer $packer
     * @param \Candela\Acumatica\Api\SubmissionRepositoryInterface $submissionRepository
     * @param \Candela\Acumatica\Model\ResourceModel\Submission\CollectionFactory $submissionCollectionFactory
     * @param \Candela\Acumatica\Helper\Notification $notificationHelper
     * @param \Psr\Log\LoggerInterface $logger
     * @param \Magento\Framework\Stdlib\DateTime\TimezoneInterface $timezone
     * @param \Candela\Acumatica\Platform\Adapter $adapter
     */
    public function __construct(
        \Candela\Acumatica\Model\Config\General $configGeneral,
        \Candela\Acumatica\Model\Submission\HandlerInterface $handlerPool,
        \Candela\Acumatica\Model\Submission\Packer $packer,
        \Candela\Acumatica\Api\SubmissionRepositoryInterface $submissionRepository,
        \Candela\Acumatica\Model\ResourceModel\Submission\CollectionFactory $submissionCollectionFactory,
        \Candela\Acumatica\Helper\Notification $notificationHelper,
        \Psr\Log\LoggerInterface $logger,
        \Magento\Framework\Stdlib\DateTime\TimezoneInterface $timezone,
        \Candela\Acumatica\Platform\Adapter $adapter
    ) {
        $this->configGeneral = $configGeneral;
        $this->handlerPool = $handlerPool;
        $this->packer = $packer;
        $this->submissionRepository = $submissionRepository;
        $this->submissionCollectionFactory = $submissionCollectionFactory;
        $this->logger = $logger;
        $this->notificationHelper = $notificationHelper;
        $this->timezone = $timezone;
        $this->adapter = $adapter;
    }

    /**
     * @param string $eventType
     * @param array $inputData
     * @param int $websiteId
     * @return \Candela\Acumatica\Api\Data\SubmissionInterface
     * @throws \Magento\Framework\Exception\CouldNotSaveException
     */
    public function add(string $eventType, array $inputData, int $websiteId): SubmissionInterface
    {
        $submission = $this->submissionRepository->getNew();
        $submission->setWebsiteId($websiteId);
        $submission->setEventType($eventType);
        $submission->setStatus(SubmissionInterface::STATUS_PENDING);
        $this->packer->packInputData($submission, $inputData);
        $this->submissionRepository->save($submission);

        return $submission;
    }

    /**
     * @param string $eventType
     * @param array $inputData
     * @param int $websiteId
     * @return void
     * @throws \Magento\Framework\Exception\CouldNotSaveException
     * @throws \Magento\Framework\Exception\MailException
     */
    public function send(string $eventType, array $inputData, int $websiteId): void
    {
        $submission = $this->add($eventType, $inputData, $websiteId);
        $this->submit($submission);
    }

    /**
     * @param array $inputData
     * @param string $eventType
     * @param int $websiteId
     * @return bool
     */
    public function isSubmissionExist(array $inputData, string $eventType, int $websiteId): bool
    {
        $submission = $this->submissionRepository->getByInputData($this->packer->serializeInputData($inputData));
        return (bool)$submission->getSubmissionId()
            && $submission->getEventType() === $eventType
            && $submission->getWebsiteId() === $websiteId;
    }

    /**
     * @param \Candela\Acumatica\Api\Data\SubmissionInterface $submission
     * @return void
     * @throws \Magento\Framework\Exception\CouldNotSaveException
     * @throws \Magento\Framework\Exception\MailException
     */
    private function submit(\Candela\Acumatica\Api\Data\SubmissionInterface $submission): void
    {
        if (SubmissionInterface::STATUS_DONE === $submission->getStatus()) {
            throw new \InvalidArgumentException(
                sprintf('Submission with %s ID is already sent.', $submission->getSubmissionId())
            );
        }

        $errorMessage = null;
        try {
            $this->handlerPool->process($submission);
        } catch (\Candela\Acumatica\Exception\NotAuthenticated $notAuthenticated) {
            $errorMessage = $notAuthenticated->getMessage();
            $this->notificationHelper->sendFailAuthenticateNotification($submission);
        } catch (\Candela\Acumatica\Exception\AcumaticaNoAddressEntityException $exception) {
            if ($submission->getEventType() === SubmissionInterface::EVENT_TYPE_CUSTOMER_LOCATION) {
                $this->finishSubmission($submission);
                return;
            }

            $errorMessage = $exception->getMessage();
        } catch (\Exception $e) {
            $errorMessage = $e->getMessage();
        }

        if ($errorMessage === null &&
            ($submission->getStatus() === SubmissionInterface::STATUS_PENDING
                || $submission->getStatus() === SubmissionInterface::STATUS_FAIL)) {
            $this->finishSubmission($submission);
            $this->logger->debug("Submission finished with no errors - " . $submission->getInputData() . " The status is " . $submission->getStatus());
        } else {
            $this->updateSubmission($submission, $errorMessage);
            $this->logger->debug("Submission updated, set status FAIL - " . $submission->getInputData() . " The status is " . $submission->getStatus());
        }
    }

    /**
     * @param \Candela\Acumatica\Api\Data\SubmissionInterface $submission
     * @param string|null $errorMessage
     * @return void
     * @throws \Magento\Framework\Exception\CouldNotSaveException
     * @throws \Magento\Framework\Exception\MailException
     */
    private function updateSubmission(SubmissionInterface $submission, string $errorMessage = null): void
    {
        $submission->setStatus(SubmissionInterface::STATUS_FAIL);
        $submission->setErrorMessage($errorMessage);
        $this->logger->debug("submission updated - " . $submission->getInputData() . "- status is = " . $submission->getStatus() . " - " . $errorMessage);

        $count = $submission->getCounter();
        $submission->setCounter(++$count);

        if ($submission->getCounter() >= $this->configGeneral->getResendMaxTime((int)$submission->getWebsiteId())
            && $submission->getStatus() === SubmissionInterface::STATUS_FAIL) {
            $this->notificationHelper->sendFailedNotification($submission);
        }

        $this->submissionRepository->save($submission);
    }

    /**
     * @param Collection $submissions
     * @param int|null $websiteId
     * @return void
     */
    private function submitSubmissions(Collection $submissions, ?int $websiteId): void
    {
        /** @var \Candela\Acumatica\Api\Data\SubmissionInterface $submission */
        foreach ($submissions as $submission) {
            try {
                $this->submit($submission);
            } catch (\Exception $e) {
                $this->logger->critical($e);
            }
        }

        $this->adapter->logout($websiteId);
    }

    /**
     * @param int|null $websiteId
     * @return void
     */
    public function resendFailed($websiteId = null): void
    {
        $submissions = $this->submissionCollectionFactory->create();
        $submissions->filterFailed($this->configGeneral->getResendMaxTime($websiteId));
        $submissions->limitCollection($this->submissionSendLimit);
        if ($websiteId) {
            $submissions->filterWebsite($websiteId);
        }

        $this->submitSubmissions($submissions, $websiteId);
        $this->logger->debug("Starting Resend of the Failed submissions");
    }

    /**
     * @param int|null $websiteId
     * @return void
     */
    public function sendPending($websiteId = null): void
    {
        $submissions = $this->submissionCollectionFactory->create();
        $submissions->filterPending();
        $submissions->limitCollection($this->submissionSendLimit);
        if ($websiteId) {
            $submissions->filterWebsite($websiteId);
        }

        $this->submitSubmissions($submissions, $websiteId);
    }

    /**
     * @param \Candela\Acumatica\Api\Data\SubmissionInterface $submission
     * @return void
     */
    private function deleteSubmission(\Candela\Acumatica\Api\Data\SubmissionInterface $submission): void
    {
        try {
            $this->submissionRepository->delete($submission);
        } catch (\Magento\Framework\Exception\CouldNotDeleteException $e) {
            $this->logger->error($e);
        }
    }

    /**
     * @param \Candela\Acumatica\Api\Data\SubmissionInterface $submission
     * @return void
     */
    private function finishSubmission(\Candela\Acumatica\Api\Data\SubmissionInterface $submission): void
    {
        $submission->setStatus(SubmissionInterface::STATUS_DONE);

        try {
            $this->submissionRepository->save($submission);
        } catch (CouldNotSaveException $e) {
            $this->logger->error($e);
            $this->deleteSubmission($submission);
        }
    }

    /**
     * @param string $status
     * @param int|null $websiteId
     * @return void
     */
    public function cleanQueue(string $status, ?int $websiteId = null): void
    {
        $days = $this->configGeneral->getRetainMaxTime($websiteId);
        $date = $this->timezone->date()->modify("-{$days} days")->format('Y-m-d H:i:s');
        $this->submissionRepository->clear($websiteId, $status, $date);
    }
}
