<?php
namespace Firebear\ImportExport\Controller\Adminhtml\Job\Downfiltr;

/**
 * Interceptor class for @see \Firebear\ImportExport\Controller\Adminhtml\Job\Downfiltr
 */
class Interceptor extends \Firebear\ImportExport\Controller\Adminhtml\Job\Downfiltr implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Firebear\ImportExport\Controller\Adminhtml\Context $context, \Firebear\ImportExport\Model\Export\Dependencies\Config $config, \Firebear\ImportExport\Model\Source\Factory $createFactory)
    {
        $this->___init();
        parent::__construct($context, $config, $createFactory);
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
