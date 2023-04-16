<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Api;

use Candela\Acumatica\Api\Data\SubmissionInterface;

interface SubmissionRepositoryInterface
{
    /**
     * @param mixed[] $data
     * @return \Candela\Acumatica\Api\Data\SubmissionInterface
     */
    public function getNew(array $data = []): \Candela\Acumatica\Api\Data\SubmissionInterface;

    /**
     * @param int $submissionId
     * @return \Candela\Acumatica\Api\Data\SubmissionInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getById($submissionId): \Candela\Acumatica\Api\Data\SubmissionInterface;

    /**
     * @param string $inputData
     * @return \Candela\Acumatica\Api\Data\SubmissionInterface
     */
    public function getByInputData(string $inputData): \Candela\Acumatica\Api\Data\SubmissionInterface;

    /**
     * @param \Candela\Acumatica\Api\Data\SubmissionInterface $submission
     * @return \Candela\Acumatica\Api\Data\SubmissionInterface
     * @throws \Magento\Framework\Exception\CouldNotSaveException
     */
    public function save(SubmissionInterface $submission): \Candela\Acumatica\Api\Data\SubmissionInterface;

    /**
     * @param \Candela\Acumatica\Api\Data\SubmissionInterface $submission
     * @return bool
     * @throws \Magento\Framework\Exception\CouldNotDeleteException
     */
    public function delete(SubmissionInterface $submission): bool;

    /**
     * @param int $submissionId
     * @return bool
     * @throws \Magento\Framework\Exception\CouldNotDeleteException
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function deleteById($submissionId): bool;

    /**
     * @param int|null $websiteId
     * @param string $status
     * @param string $date
     * @return void
     */
    public function clear(?int $websiteId, string $status, string $date): void;
}
