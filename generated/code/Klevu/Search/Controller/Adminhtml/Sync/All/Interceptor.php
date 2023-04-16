<?php
namespace Klevu\Search\Controller\Adminhtml\Sync\All;

/**
 * Interceptor class for @see \Klevu\Search\Controller\Adminhtml\Sync\All
 */
class Interceptor extends \Klevu\Search\Controller\Adminhtml\Sync\All implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Store\Model\StoreManagerInterface $storeModelStoreManagerInterface, \Klevu\Search\Helper\Config $searchHelperConfig, \Klevu\Search\Model\Product\Sync $modelProductSync, \Klevu\Search\Helper\Data $searchHelperData, \Klevu\Search\Model\Product\MagentoProductActionsInterface $magentoProductActions, \Klevu\Search\Model\Session $klevuSync)
    {
        $this->___init();
        parent::__construct($context, $storeModelStoreManagerInterface, $searchHelperConfig, $modelProductSync, $searchHelperData, $magentoProductActions, $klevuSync);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
