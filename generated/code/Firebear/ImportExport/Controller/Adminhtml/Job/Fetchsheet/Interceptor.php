<?php
namespace Firebear\ImportExport\Controller\Adminhtml\Job\Fetchsheet;

/**
 * Interceptor class for @see \Firebear\ImportExport\Controller\Adminhtml\Job\Fetchsheet
 */
class Interceptor extends \Firebear\ImportExport\Controller\Adminhtml\Job\Fetchsheet implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Firebear\ImportExport\Controller\Adminhtml\Context $context, \Firebear\ImportExport\Model\Import\Platforms $platforms, \Firebear\ImportExport\Model\Job\Processor $processor, \Firebear\ImportExport\Ui\Component\Listing\Column\Entity\Import\Options $options, \Firebear\ImportExport\Helper\XlsxHelper $xlsxHelper)
    {
        $this->___init();
        parent::__construct($context, $platforms, $processor, $options, $xlsxHelper);
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
