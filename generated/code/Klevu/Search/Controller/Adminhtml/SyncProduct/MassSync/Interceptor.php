<?php
namespace Klevu\Search\Controller\Adminhtml\SyncProduct\MassSync;

/**
 * Interceptor class for @see \Klevu\Search\Controller\Adminhtml\SyncProduct\MassSync
 */
class Interceptor extends \Klevu\Search\Controller\Adminhtml\SyncProduct\MassSync implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Klevu\Search\Api\Service\Sync\SyncNowInterface $productSync, \Magento\Store\Api\StoreRepositoryInterface $storeRepository)
    {
        $this->___init();
        parent::__construct($context, $productSync, $storeRepository);
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
