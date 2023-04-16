<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;
use Candela\Acumatica\Api\Data\SubmissionInterface;

class EventType implements OptionSourceInterface
{
    /**
     * @return array
     */
    public function toOptionArray(): array
    {
        return [
            [
                'label' => __('Order'),
                'value' => SubmissionInterface::EVENT_TYPE_ORDER,
            ],
            [
                'label' => __('Customer Address'),
                'value' => SubmissionInterface::EVENT_TYPE_CUSTOMER_LOCATION,
            ],
            [
                'label' => __('Customer'),
                'value' => SubmissionInterface::EVENT_TYPE_CUSTOMER,
            ],
            [
                'label' => __('Delete Customer Address'),
                'value' => SubmissionInterface::EVENT_TYPE_DELETE_LOCATION,
            ],
        ];
    }
}
