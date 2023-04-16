<?php
namespace Klevu\Search\Block\Adminhtml\Form\Field\Store\Level\Label;

/**
 * Interceptor class for @see \Klevu\Search\Block\Adminhtml\Form\Field\Store\Level\Label
 */
class Interceptor extends \Klevu\Search\Block\Adminhtml\Form\Field\Store\Level\Label implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Klevu\Search\Helper\Config $klevuHelperConfig, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $klevuHelperConfig, $data);
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
