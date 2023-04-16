<?php
/**
 *
 */
namespace Candela\OrderAttributes\Plugin\Checkout;

use Magento\Checkout\Block\Checkout\LayoutProcessor;

/**
 * Class LayoutProcessorPlugin
 * @package Candela\OrderAttributes\Plugin\Checkout
 */
class LayoutProcessorPlugin
{
    /**
     * add custom component
     * @param LayoutProcessor $subject
     * @param array $jsLayout
     * @return array
     */
    public function afterProcess(LayoutProcessor $subject, array $jsLayout)
    {
        $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']['children']
        ['shippingAddress']['children']['before-form'] = [
                'component' => 'uiComponent',
                'displayArea' => 'before-form',
                'children' => [
                    'candela_question' => [
                        'component' => 'Candela_OrderAttributes/js/view/attributes-block',
                        'validation' => [
                            'required-entry' => 1
                        ]
                    ]
                ]
            ];
        return $jsLayout;
    }
}
