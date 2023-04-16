<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Model;

use Candela\Acumatica\Model\ResourceModel\Submission as SubmissionResourceModel;

class Submission extends \Magento\Framework\Model\AbstractExtensibleModel
    implements \Candela\Acumatica\Api\Data\SubmissionInterface
{
    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init(SubmissionResourceModel::class);
    }

    /**
     * @param int $submissionId
     * @return $this
     */
    public function setSubmissionId(int $submissionId): \Candela\Acumatica\Api\Data\SubmissionInterface
    {
        return $this->setData(self::SUBMISSION_ID, $submissionId);
    }

    /**
     * @return int|null
     */
    public function getSubmissionId(): ?int
    {
        $submissionId = $this->_getData(self::SUBMISSION_ID);

        return $submissionId === null ? null : (int) $submissionId;
    }

    /**
     * @param int $websiteId
     * @return $this
     */
    public function setWebsiteId(int $websiteId): \Candela\Acumatica\Api\Data\SubmissionInterface
    {
        return $this->setData(self::WEBSITE_ID, $websiteId);
    }

    /**
     * @return int|null
     */
    public function getWebsiteId(): ?int
    {
        $websiteId = $this->_getData(self::WEBSITE_ID);

        return $websiteId === null ? null : (int) $websiteId;
    }

    /**
     * @param string $eventType
     * @return $this
     */
    public function setEventType(string $eventType): \Candela\Acumatica\Api\Data\SubmissionInterface
    {
        return $this->setData(self::EVENT_TYPE, $eventType);
    }

    /**
     * @return null|string
     */
    public function getEventType(): ?string
    {
        return $this->_getData(self::EVENT_TYPE);
    }

    /**
     * @param string $inputData
     * @return $this
     */
    public function setInputData(string $inputData): \Candela\Acumatica\Api\Data\SubmissionInterface
    {
        return $this->setData(self::INPUT_DATA, $inputData);
    }

    /**
     * @return null|string
     */
    public function getInputData(): ?string
    {
        return $this->_getData(self::INPUT_DATA);
    }

    /**
     * @param int $counter
     * @return $this
     */
    public function setCounter(int $counter): \Candela\Acumatica\Api\Data\SubmissionInterface
    {
        return $this->setData(self::COUNTER, $counter);
    }

    /**
     * @return null|int
     */
    public function getCounter(): ?int
    {
        $counter = $this->_getData(self::COUNTER);

        return $counter === null ? null : (int) $counter;
    }

    /**
     * @param string $creatingTime
     * @return $this
     */
    public function setCreatingTime(string $creatingTime): \Candela\Acumatica\Api\Data\SubmissionInterface
    {
        return $this->setData(self::CREATING_TIME, $creatingTime);
    }

    /**
     * @return null|string
     */
    public function getCreatingTime(): ?string
    {
        return $this->_getData(self::CREATING_TIME);
    }

    /**
     * @param string $submissionTime
     * @return $this
     */
    public function setSubmissionTime(string $submissionTime): \Candela\Acumatica\Api\Data\SubmissionInterface
    {
        return $this->setData(self::SUBMISSION_TIME, $submissionTime);
    }

    /**
     * @return null|string
     */
    public function getSubmissionTime(): ?string
    {
        return $this->_getData(self::SUBMISSION_TIME);
    }

    /**
     * @param string $status
     * @return $this
     */
    public function setStatus(string $status): \Candela\Acumatica\Api\Data\SubmissionInterface
    {
        return $this->setData(self::STATUS, $status);
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->_getData(self::STATUS);
    }

    /**
     * @param string $errorMessage
     * @return $this
     */
    public function setErrorMessage(string $errorMessage): \Candela\Acumatica\Api\Data\SubmissionInterface
    {
        return $this->setData(self::ERROR_MESSAGE, $errorMessage);
    }

    /**
     * @return null|string
     */
    public function getErrorMessage(): ?string
    {
        return $this->_getData(self::ERROR_MESSAGE);
    }
}
