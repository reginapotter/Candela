<?php
namespace Firebear\ImportExport\Controller\Adminhtml\Job\Terminate;

/**
 * Interceptor class for @see \Firebear\ImportExport\Controller\Adminhtml\Job\Terminate
 */
class Interceptor extends \Firebear\ImportExport\Controller\Adminhtml\Job\Terminate implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Firebear\ImportExport\Controller\Adminhtml\Context $context, \Firebear\ImportExport\Model\Job\Processor $processor, \Firebear\ImportExport\Model\Job\Handler\HandlerPoolInterface $handlerPool)
    {
        $this->___init();
        parent::__construct($context, $processor, $handlerPool);
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
