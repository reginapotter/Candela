<?php
namespace Magento\Widget\Block\Adminhtml\Widget\Instance\Edit\Chooser\Layout;

/**
 * Interceptor class for @see \Magento\Widget\Block\Adminhtml\Widget\Instance\Edit\Chooser\Layout
 */
class Interceptor extends \Magento\Widget\Block\Adminhtml\Widget\Instance\Edit\Chooser\Layout implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Context $context, \Magento\Framework\View\Layout\PageType\Config $config, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $config, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function setOptions($options)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setOptions');
        return $pluginInfo ? $this->___callPlugins('setOptions', func_get_args(), $pluginInfo) : parent::setOptions($options);
    }
}
