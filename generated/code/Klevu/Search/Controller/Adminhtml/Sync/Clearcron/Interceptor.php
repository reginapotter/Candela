<?php
namespace Klevu\Search\Controller\Adminhtml\Sync\Clearcron;

/**
 * Interceptor class for @see \Klevu\Search\Controller\Adminhtml\Sync\Clearcron
 */
class Interceptor extends \Klevu\Search\Controller\Adminhtml\Sync\Clearcron implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Klevu\Search\Model\Sync $modelSync)
    {
        $this->___init();
        parent::__construct($context, $modelSync);
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
