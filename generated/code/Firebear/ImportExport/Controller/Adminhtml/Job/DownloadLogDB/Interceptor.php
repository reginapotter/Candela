<?php
namespace Firebear\ImportExport\Controller\Adminhtml\Job\DownloadLogDB;

/**
 * Interceptor class for @see \Firebear\ImportExport\Controller\Adminhtml\Job\DownloadLogDB
 */
class Interceptor extends \Firebear\ImportExport\Controller\Adminhtml\Job\DownloadLogDB implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Firebear\ImportExport\Controller\Adminhtml\Context $context, \Magento\Framework\App\Response\Http\FileFactory $responseFileFactory, \Firebear\ImportExport\Model\Export\HistoryRepository $exportRepository, \Firebear\ImportExport\Model\Import\HistoryRepository $importRepository)
    {
        $this->___init();
        parent::__construct($context, $responseFileFactory, $exportRepository, $importRepository);
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
