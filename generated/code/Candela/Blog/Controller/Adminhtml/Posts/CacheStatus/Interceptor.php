<?php
namespace Candela\Blog\Controller\Adminhtml\Posts\CacheStatus;

/**
 * Interceptor class for @see \Candela\Blog\Controller\Adminhtml\Posts\CacheStatus
 */
class Interceptor extends \Candela\Blog\Controller\Adminhtml\Posts\CacheStatus implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Magento\Framework\Url $urlHelper, \Magento\Framework\App\Cache\StateInterface $cacheState)
    {
        $this->___init();
        parent::__construct($context, $resultJsonFactory, $urlHelper, $cacheState);
    }

    /**
     * {@inheritdoc}
     */
    public function execute() : \Magento\Framework\Controller\ResultInterface
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
