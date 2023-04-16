<?php
namespace Candela\Blog\Block\Adminhtml\System\Config\Field\Layout\Mobile;

/**
 * Interceptor class for @see \Candela\Blog\Block\Adminhtml\System\Config\Field\Layout\Mobile
 */
class Interceptor extends \Candela\Blog\Block\Adminhtml\System\Config\Field\Layout\Mobile implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Candela\Blog\Helper\Data $helperData, \Candela\Blog\Helper\Data\Layout $helperLayout, \Candela\Blog\Model\Source\Layout $layoutOptions, string $layout = '', array $data = [])
    {
        $this->___init();
        parent::__construct($context, $helperData, $helperLayout, $layoutOptions, $layout, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'render');
        return $pluginInfo ? $this->___callPlugins('render', func_get_args(), $pluginInfo) : parent::render($element);
    }
}
