<?php
namespace Klevu\Search\Block\Adminhtml\Wizard\Config\Button;

/**
 * Interceptor class for @see \Klevu\Search\Block\Adminhtml\Wizard\Config\Button
 */
class Interceptor extends \Klevu\Search\Block\Adminhtml\Wizard\Config\Button implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Klevu\Search\Helper\Config $searchHelperConfig)
    {
        $this->___init();
        parent::__construct($context, $searchHelperConfig);
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
