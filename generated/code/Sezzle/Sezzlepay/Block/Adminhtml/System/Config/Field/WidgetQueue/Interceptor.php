<?php
namespace Sezzle\Sezzlepay\Block\Adminhtml\System\Config\Field\WidgetQueue;

/**
 * Interceptor class for @see \Sezzle\Sezzlepay\Block\Adminhtml\System\Config\Field\WidgetQueue
 */
class Interceptor extends \Sezzle\Sezzlepay\Block\Adminhtml\System\Config\Field\WidgetQueue implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Sezzle\Sezzlepay\Gateway\Config\Config $config, \Magento\Framework\Stdlib\DateTime\DateTime $dateTime, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $config, $dateTime, $data);
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
