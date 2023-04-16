<?php
namespace Magento\Widget\Block\Adminhtml\Widget\Instance\Edit\Chooser\DesignAbstraction;

/**
 * Interceptor class for @see \Magento\Widget\Block\Adminhtml\Widget\Instance\Edit\Chooser\DesignAbstraction
 */
class Interceptor extends \Magento\Widget\Block\Adminhtml\Widget\Instance\Edit\Chooser\DesignAbstraction implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Context $context, \Magento\Framework\View\Layout\ProcessorFactory $layoutProcessorFactory, \Magento\Theme\Model\ResourceModel\Theme\CollectionFactory $themesFactory, \Magento\Framework\App\State $appState, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $layoutProcessorFactory, $themesFactory, $appState, $data);
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
