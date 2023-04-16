<?php
namespace LiveChat\LiveChat\Controller\Adminhtml\SetProps\Index;

/**
 * Interceptor class for @see \LiveChat\LiveChat\Controller\Adminhtml\SetProps\Index
 */
class Interceptor extends \LiveChat\LiveChat\Controller\Adminhtml\SetProps\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Magento\Framework\App\Config\Storage\WriterInterface $configWriter, \Magento\Framework\App\Cache\ManagerFactory $cacheManagerFactory)
    {
        $this->___init();
        parent::__construct($context, $resultJsonFactory, $configWriter, $cacheManagerFactory);
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
