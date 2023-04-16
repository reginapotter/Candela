<?php
namespace Magento\Widget\Block\Adminhtml\Widget\Instance\Edit\Tab\Main\Layout;

/**
 * Interceptor class for @see \Magento\Widget\Block\Adminhtml\Widget\Instance\Edit\Tab\Main\Layout
 */
class Interceptor extends \Magento\Widget\Block\Adminhtml\Widget\Instance\Edit\Tab\Main\Layout implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Catalog\Model\Product\Type $productType, array $data = [], ?\Magento\Framework\Serialize\Serializer\Json $serializer = null)
    {
        $this->___init();
        parent::__construct($context, $productType, $data, $serializer);
    }

    /**
     * {@inheritdoc}
     */
    public function getDisplayOnContainers()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDisplayOnContainers');
        return $pluginInfo ? $this->___callPlugins('getDisplayOnContainers', func_get_args(), $pluginInfo) : parent::getDisplayOnContainers();
    }
}
