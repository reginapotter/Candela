<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Api;

interface QueueInterface
{
    /**
     * @param string $eventType
     * @param array $inputData
     * @param int $websiteId
     * @return \Candela\Acumatica\Api\Data\SubmissionInterface
     */
    public function add(
        string $eventType,
        array $inputData,
        int $websiteId
    ): \Candela\Acumatica\Api\Data\SubmissionInterface;

    /**
     * @param string $eventType
     * @param array $inputData
     * @param int $websiteId
     * @return void
     */
    public function send(string $eventType, array $inputData, int $websiteId): void;

    /**
     * @param int|null $websiteId
     * @return void
     */
    public function resendFailed($websiteId = null): void;

    /**
     * @param int|null $websiteId
     * @return void
     */
    public function sendPending($websiteId = null): void;

    /**
     * @param string $status
     * @param int|null $websiteId
     * @return void
     */
    public function cleanQueue(string $status, ?int $websiteId = null): void;
}
