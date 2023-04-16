<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Model\Submission;

interface HandlerInterface
{
    /**
     * @param \Candela\Acumatica\Api\Data\SubmissionInterface $submission
     * @return void
     */
    public function process(\Candela\Acumatica\Api\Data\SubmissionInterface $submission): void;
}
