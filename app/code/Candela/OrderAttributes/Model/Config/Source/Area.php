<?php
/**
 *
 */
namespace Candela\OrderAttributes\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

class Area implements ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => 'global', 'label' => __('Frontend & Admin')],
            ['value' => 'frontend', 'label' => __('Frontend')],
            ['value' => 'admin', 'label' => __('Admin')]
        ];
    }
}
