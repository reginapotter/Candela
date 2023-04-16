<?php
namespace Klevu\Search\Controller\Adminhtml\Download\PreserveLayout\Logdownload;

/**
 * Interceptor class for @see \Klevu\Search\Controller\Adminhtml\Download\PreserveLayout\Logdownload
 */
class Interceptor extends \Klevu\Search\Controller\Adminhtml\Download\PreserveLayout\Logdownload implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Filesystem\Io\File $fileIo, \Magento\Framework\App\Filesystem\DirectoryList $directoryList, \Klevu\Logger\Api\StoreScopeResolverInterface $storeScopeResolver, \Klevu\Logger\Api\LogFileNameProviderInterface $logFileNameProvider, \Magento\Framework\Archive\ArchiveInterface $archiveService, \Magento\Framework\App\Response\Http\FileFactory $fileFactory, $maxFileSize = null)
    {
        $this->___init();
        parent::__construct($context, $logger, $fileIo, $directoryList, $storeScopeResolver, $logFileNameProvider, $archiveService, $fileFactory, $maxFileSize);
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
