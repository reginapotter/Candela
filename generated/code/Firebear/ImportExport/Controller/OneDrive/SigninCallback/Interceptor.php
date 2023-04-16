<?php
namespace Firebear\ImportExport\Controller\OneDrive\SigninCallback;

/**
 * Interceptor class for @see \Firebear\ImportExport\Controller\OneDrive\SigninCallback
 */
class Interceptor extends \Firebear\ImportExport\Controller\OneDrive\SigninCallback implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Firebear\ImportExport\Model\OneDrive\OneDrive $oneDrive)
    {
        $this->___init();
        parent::__construct($context, $oneDrive);
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
