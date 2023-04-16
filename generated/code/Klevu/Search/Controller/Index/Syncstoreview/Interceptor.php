<?php
namespace Klevu\Search\Controller\Index\Syncstoreview;

/**
 * Interceptor class for @see \Klevu\Search\Controller\Index\Syncstoreview
 */
class Interceptor extends \Klevu\Search\Controller\Index\Syncstoreview implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList, \Magento\Framework\App\Cache\StateInterface $cacheState, \Magento\Framework\App\Cache\Frontend\Pool $cacheFrontendPool, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Klevu\Search\Model\Product\Sync $modelProductSync, \Magento\Framework\Filesystem $magentoFrameworkFilesystem, \Klevu\Search\Model\Api\Action\Debuginfo $apiActionDebuginfo, \Klevu\Search\Model\Session $frameworkModelSession, \Klevu\Search\Helper\Data $searchHelperData, \Klevu\Search\Model\Sync $modelSync, \Magento\Store\Model\StoreManagerInterface $storeInterface, \Klevu\Content\Model\ContentInterface $modelSyncContent)
    {
        $this->___init();
        parent::__construct($context, $cacheTypeList, $cacheState, $cacheFrontendPool, $resultPageFactory, $modelProductSync, $magentoFrameworkFilesystem, $apiActionDebuginfo, $frameworkModelSession, $searchHelperData, $modelSync, $storeInterface, $modelSyncContent);
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
