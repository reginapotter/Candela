<?php
namespace Firebear\ImportExport\Controller\Adminhtml\Job\Downcategories;

/**
 * Interceptor class for @see \Firebear\ImportExport\Controller\Adminhtml\Job\Downcategories
 */
class Interceptor extends \Firebear\ImportExport\Controller\Adminhtml\Job\Downcategories implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Firebear\ImportExport\Controller\Adminhtml\Context $context, \Firebear\ImportExport\Ui\Component\Form\Categories\Options $categories)
    {
        $this->___init();
        parent::__construct($context, $categories);
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
