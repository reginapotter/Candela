<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;
use Candela\Acumatica\Api\Data\SubmissionInterface;

class StatusOption implements OptionSourceInterface
{
    /**
     * @return array
     */
    public function toOptionArray(): array
    {
        return [
            [
                'label' => ucfirst(SubmissionInterface::STATUS_DONE),
                'value' => SubmissionInterface::STATUS_DONE,
            ],
            [
                'label' => ucfirst(SubmissionInterface::STATUS_FAIL),
                'value' => SubmissionInterface::STATUS_FAIL,
            ],
            [
                'label' => ucfirst(SubmissionInterface::STATUS_PENDING),
                'value' => SubmissionInterface::STATUS_PENDING,
            ]
        ];
    }
}
