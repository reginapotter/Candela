<?php


namespace Candela\Blog\Block\Adminhtml;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

/**
 * Class ImportButton
 */
class ImportButton implements ButtonProviderInterface
{
    /**
     * @return array
     */
    public function getButtonData()
    {
        return [
            'label' => __('Import'),
            'class' => 'save primary',
            'on_click' => '',
        ];
    }
}
