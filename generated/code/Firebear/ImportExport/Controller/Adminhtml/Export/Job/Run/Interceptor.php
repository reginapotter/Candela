<?php
namespace Firebear\ImportExport\Controller\Adminhtml\Export\Job\Run;

/**
 * Interceptor class for @see \Firebear\ImportExport\Controller\Adminhtml\Export\Job\Run
 */
class Interceptor extends \Firebear\ImportExport\Controller\Adminhtml\Export\Job\Run implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Firebear\ImportExport\Controller\Adminhtml\Export\Context $context, \Magento\Framework\App\CacheInterface $cache)
    {
        $this->___init();
        parent::__construct($context, $cache);
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
