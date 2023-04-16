<?php
namespace Klevu\Search\Controller\Adminhtml\Manual\Sync;

/**
 * Interceptor class for @see \Klevu\Search\Controller\Adminhtml\Manual\Sync
 */
class Interceptor extends \Klevu\Search\Controller\Adminhtml\Manual\Sync implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Klevu\Search\Model\Product\Sync $klevuProductSync, \Klevu\Search\Model\Session $klevuSession)
    {
        $this->___init();
        parent::__construct($context, $klevuProductSync, $klevuSession);
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
