<?php
namespace Klevu\Search\Controller\Adminhtml\Wizard\Store\Post;

/**
 * Interceptor class for @see \Klevu\Search\Controller\Adminhtml\Wizard\Store\Post
 */
class Interceptor extends \Klevu\Search\Controller\Adminhtml\Wizard\Store\Post implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Klevu\Search\Helper\Config $searchHelperConfig, \Klevu\Search\Helper\Api $searchHelperApi, \Magento\Store\Model\StoreManagerInterface $storeModelStoreManagerInterface, \Klevu\Search\Model\Product\Sync $modelProductSync, \Klevu\Search\Model\Order\Sync $modelOrderSync, \Klevu\Search\Model\Product\MagentoProductActionsInterface $magentoProductActions)
    {
        $this->___init();
        parent::__construct($context, $searchHelperConfig, $searchHelperApi, $storeModelStoreManagerInterface, $modelProductSync, $modelOrderSync, $magentoProductActions);
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
