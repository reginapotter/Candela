<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Api\Data;

interface SubmissionInterface
{
    const STATUS_PENDING = 'pending';
    const STATUS_FAIL = 'fail';
    const STATUS_DONE = 'done';

    const EVENT_TYPE_ORDER = 'salesOrder';
    const EVENT_TYPE_CUSTOMER_LOCATION = 'customerLocation';
    const EVENT_TYPE_CUSTOMER = 'customer';
    const EVENT_TYPE_DELETE_LOCATION = 'deleteCustomerLocation';

    const SUBMISSION_ID = 'submission_id';
    const STORE_ID = 'store_id';
    const WEBSITE_ID = 'website_id';
    const EVENT_TYPE = 'event_type';
    const INPUT_DATA = 'input_data';
    const COUNTER = 'counter';
    const EVENT_ID = 'event_id';
    const CREATING_TIME = 'creating_time';
    const SUBMISSION_TIME = 'submission_time';
    const STATUS = 'status';
    const ERROR_MESSAGE = 'error_message';

    /**
     * @param int $submissionId
     * @return \Candela\Acumatica\Api\Data\SubmissionInterface
     */
    public function setSubmissionId(int $submissionId): \Candela\Acumatica\Api\Data\SubmissionInterface;

    /**
     * @return int|null
     */
    public function getSubmissionId(): ?int;

    /**
     * @param int $websiteId
     * @return \Candela\Acumatica\Api\Data\SubmissionInterface
     */
    public function setWebsiteId(int $websiteId): \Candela\Acumatica\Api\Data\SubmissionInterface;

    /**
     * @return int|null
     */
    public function getWebsiteId(): ?int;

    /**
     * @param string $eventType
     * @return \Candela\Acumatica\Api\Data\SubmissionInterface
     */
    public function setEventType(string $eventType): \Candela\Acumatica\Api\Data\SubmissionInterface;

    /**
     * @return null|string
     */
    public function getEventType(): ?string;

    /**
     * @param string $inputData
     * @return \Candela\Acumatica\Api\Data\SubmissionInterface
     */
    public function setInputData(string $inputData): \Candela\Acumatica\Api\Data\SubmissionInterface;

    /**
     * @return null|string
     */
    public function getInputData(): ?string;

    /**
     * @param int $counter
     * @return \Candela\Acumatica\Api\Data\SubmissionInterface
     */
    public function setCounter(int $counter): \Candela\Acumatica\Api\Data\SubmissionInterface;

    /**
     * @return int|null
     */
    public function getCounter(): ?int;

    /**
     * @param string $creatingTime
     * @return \Candela\Acumatica\Api\Data\SubmissionInterface
     */
    public function setCreatingTime(string $creatingTime): \Candela\Acumatica\Api\Data\SubmissionInterface;

    /**
     * @return null|string
     */
    public function getCreatingTime(): ?string;

    /**
     * @param string $submissionTime
     * @return \Candela\Acumatica\Api\Data\SubmissionInterface
     */
    public function setSubmissionTime(string $submissionTime): \Candela\Acumatica\Api\Data\SubmissionInterface;

    /**
     * @return null|string
     */
    public function getSubmissionTime(): ?string;

    /**
     * @param string $status
     * @return \Candela\Acumatica\Api\Data\SubmissionInterface
     */
    public function setStatus(string $status): \Candela\Acumatica\Api\Data\SubmissionInterface;

    /**
     * @return string|null
     */
    public function getStatus(): ?string;

    /**
     * @param string $errorMessage
     * @return \Candela\Acumatica\Api\Data\SubmissionInterface
     */
    public function setErrorMessage(string $errorMessage): \Candela\Acumatica\Api\Data\SubmissionInterface;

    /**
     * @return null|string
     */
    public function getErrorMessage(): ?string;
}
