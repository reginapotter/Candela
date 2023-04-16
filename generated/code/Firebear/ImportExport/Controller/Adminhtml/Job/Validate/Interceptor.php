<?php
namespace Firebear\ImportExport\Controller\Adminhtml\Job\Validate;

/**
 * Interceptor class for @see \Firebear\ImportExport\Controller\Adminhtml\Job\Validate
 */
class Interceptor extends \Firebear\ImportExport\Controller\Adminhtml\Job\Validate implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\ImportExport\Model\Report\ReportProcessorInterface $reportProcessor, \Magento\ImportExport\Model\History $historyModel, \Magento\ImportExport\Helper\Report $reportHelper, \Firebear\ImportExport\Model\JobFactory $factory, \Firebear\ImportExport\Api\JobRepositoryInterface $repository, \Magento\Framework\File\Csv $csv, \Magento\Framework\FilesystemFactory $fileSystem, \Firebear\ImportExport\Model\Source\Platform\Magento $magentoPlatforms, \Magento\ImportExport\Controller\Adminhtml\ImportResult $importResult, \Firebear\ImportExport\Model\Import $import)
    {
        $this->___init();
        parent::__construct($context, $reportProcessor, $historyModel, $reportHelper, $factory, $repository, $csv, $fileSystem, $magentoPlatforms, $importResult, $import);
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
