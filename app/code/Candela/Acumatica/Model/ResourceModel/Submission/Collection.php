<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Model\ResourceModel\Submission;

use Candela\Acumatica\Model\ResourceModel\Submission as SubmissionResourceModel;
use Candela\Acumatica\Api\Data\SubmissionInterface;
use Candela\Acumatica\Model\Submission;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @return void
     */
    protected function _construct(): void
    {
        $this->_init(Submission::class, SubmissionResourceModel::class);
    }

    /**
     * @param int[] $submissionIds
     * @return $this
     */
    public function filterSubmissionIds(array $submissionIds
    ): \Candela\Acumatica\Model\ResourceModel\Submission\Collection {
        $this->addFilter(SubmissionInterface::SUBMISSION_ID, ['in' => $submissionIds], 'public');
        return $this;
    }

    /**
     * @param int $websiteId
     * @return $this
     */
    public function filterWebsite(int $websiteId): \Candela\Acumatica\Model\ResourceModel\Submission\Collection
    {
        $this->addFilter(SubmissionInterface::WEBSITE_ID, $websiteId);
        return $this;
    }

    /**
     * @param string $eventType
     * @return $this
     */
    public function filterEventType(string $eventType): \Candela\Acumatica\Model\ResourceModel\Submission\Collection
    {
        $this->addFilter(SubmissionInterface::EVENT_TYPE, $eventType);
        return $this;
    }

    /**
     * @return $this
     */
    public function filterDone(): \Candela\Acumatica\Model\ResourceModel\Submission\Collection
    {
        $this->addFieldToFilter(SubmissionInterface::STATUS, ['eq' => SubmissionInterface::STATUS_DONE]);
        return $this;
    }

    /**
     * @return $this
     */
    public function filterNotDone(): \Candela\Acumatica\Model\ResourceModel\Submission\Collection
    {
        $this->addFieldToFilter(SubmissionInterface::STATUS, ['neq' => SubmissionInterface::STATUS_DONE]);
        return $this;
    }

    /**
     * @return $this
     */
    public function filterPending(): \Candela\Acumatica\Model\ResourceModel\Submission\Collection
    {
        $this->addFilter(SubmissionInterface::STATUS, SubmissionInterface::STATUS_PENDING);
        return $this;
    }

    /**
     * @param int $maxTimes
     * @return $this
     */
    public function filterFailed(int $maxTimes = 0): \Candela\Acumatica\Model\ResourceModel\Submission\Collection
    {
        $this->addFilter(SubmissionInterface::STATUS, SubmissionInterface::STATUS_FAIL);
        if ($maxTimes > 0) {
            $this->addFilter(SubmissionInterface::COUNTER, ['lt' => $maxTimes], 'public');
        }
        return $this;
    }

    /**
     * @param int $pageSize
     * @return void
     */
    public function limitCollection(int $pageSize): void
    {
        $this->setCurPage(1);
        $this->setPageSize($pageSize);
    }
}
