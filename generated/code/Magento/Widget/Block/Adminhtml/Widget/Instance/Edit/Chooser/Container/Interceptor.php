<?php
namespace Magento\Widget\Block\Adminhtml\Widget\Instance\Edit\Chooser\Container;

/**
 * Interceptor class for @see \Magento\Widget\Block\Adminhtml\Widget\Instance\Edit\Chooser\Container
 */
class Interceptor extends \Magento\Widget\Block\Adminhtml\Widget\Instance\Edit\Chooser\Container implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Context $context, \Magento\Framework\View\Layout\ProcessorFactory $layoutProcessorFactory, \Magento\Theme\Model\ResourceModel\Theme\CollectionFactory $themesFactory, array $data = [], ?\Magento\Framework\View\Model\PageLayout\Config\BuilderInterface $pageLayoutConfigBuilder = null)
    {
        $this->___init();
        parent::__construct($context, $layoutProcessorFactory, $themesFactory, $data, $pageLayoutConfigBuilder);
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
