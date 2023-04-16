<?php
namespace Firebear\ImportExport\Controller\Adminhtml\Job\Loadmap;

/**
 * Interceptor class for @see \Firebear\ImportExport\Controller\Adminhtml\Job\Loadmap
 */
class Interceptor extends \Firebear\ImportExport\Controller\Adminhtml\Job\Loadmap implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Firebear\ImportExport\Controller\Adminhtml\Context $context, \Firebear\ImportExport\Model\Import\Platforms $platforms, \Firebear\ImportExport\Model\Job\Processor $processor, \Firebear\ImportExport\Ui\Component\Listing\Column\Entity\Import\Options $options)
    {
        $this->___init();
        parent::__construct($context, $platforms, $processor, $options);
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
