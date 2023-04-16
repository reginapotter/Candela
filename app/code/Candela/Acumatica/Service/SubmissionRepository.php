<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Service;

use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\CouldNotDeleteException;
use Candela\Acumatica\Api\Data\SubmissionInterface;

class SubmissionRepository implements \Candela\Acumatica\Api\SubmissionRepositoryInterface
{
    /**
     * @var \Candela\Acumatica\Api\Data\SubmissionInterfaceFactory
     */
    private $submissionFactory;

    /**
     * @var \Candela\Acumatica\Model\ResourceModel\Submission
     */
    private $submissionResource;

    /**
     * @param \Candela\Acumatica\Api\Data\SubmissionInterfaceFactory $submissionFactory
     * @param \Candela\Acumatica\Model\ResourceModel\Submission $submissionResource
     */
    public function __construct(
        \Candela\Acumatica\Api\Data\SubmissionInterfaceFactory $submissionFactory,
        \Candela\Acumatica\Model\ResourceModel\Submission $submissionResource
    ) {
        $this->submissionFactory = $submissionFactory;
        $this->submissionResource = $submissionResource;
    }

    /**
     * @param mixed[] $data
     * @return \Candela\Acumatica\Api\Data\SubmissionInterface
     */
    public function getNew(array $data = []): \Candela\Acumatica\Api\Data\SubmissionInterface
    {
        return $this->submissionFactory->create($data);
    }

    /**
     * @param int $submissionId
     * @return \Candela\Acumatica\Api\Data\SubmissionInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getById($submissionId): \Candela\Acumatica\Api\Data\SubmissionInterface
    {
        $submission = $this->getNew();
        $this->submissionResource->load($submission, $submissionId);
        if (!$submission->getSubmissionId()) {
            throw new NoSuchEntityException(__('Submission with id "%1" does not exist.', $submissionId));
        }
        return $submission;
    }

    /**
     * @param string $inputData
     * @return \Candela\Acumatica\Api\Data\SubmissionInterface
     */
    public function getByInputData(string $inputData): \Candela\Acumatica\Api\Data\SubmissionInterface
    {
        $submission = $this->getNew();
        $this->submissionResource->load($submission, $inputData, SubmissionInterface::INPUT_DATA);
        return $submission;
    }

    /**
     * @param \Candela\Acumatica\Api\Data\SubmissionInterface $submission
     * @return \Candela\Acumatica\Api\Data\SubmissionInterface
     * @throws \Magento\Framework\Exception\CouldNotSaveException
     */
    public function save(SubmissionInterface $submission): \Candela\Acumatica\Api\Data\SubmissionInterface
    {
        try {
            $this->submissionResource->save($submission);
        } catch (\Exception $e) {
            throw new CouldNotSaveException(__('Could not save submission: %1', $e->getMessage()));
        }
        return $submission;
    }

    /**
     * @param \Candela\Acumatica\Api\Data\SubmissionInterface $submission
     * @return bool
     * @throws \Magento\Framework\Exception\CouldNotDeleteException
     */
    public function delete(SubmissionInterface $submission): bool
    {
        try {
            $this->submissionResource->delete($submission);
        } catch (\Exception $e) {
            throw new CouldNotDeleteException(__('Could not delete submission: %1', $e->getMessage()));
        }
        return true;
    }

    /**
     * @param int $submissionId
     * @return bool
     * @throws \Magento\Framework\Exception\CouldNotDeleteException
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function deleteById($submissionId): bool
    {
        return $this->delete($this->getById($submissionId));
    }

    /**
     * @param int|null $websiteId
     * @param string $status
     * @param string $date
     * @return void
     */
    public function clear(?int $websiteId, string $status, string $date): void
    {
        $this->submissionResource->clearByStatus($websiteId, $status, $date);
    }
}
