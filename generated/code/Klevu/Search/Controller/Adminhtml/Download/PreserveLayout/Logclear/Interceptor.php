<?php
namespace Klevu\Search\Controller\Adminhtml\Download\PreserveLayout\Logclear;

/**
 * Interceptor class for @see \Klevu\Search\Controller\Adminhtml\Download\PreserveLayout\Logclear
 */
class Interceptor extends \Klevu\Search\Controller\Adminhtml\Download\PreserveLayout\Logclear implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Psr\Log\LoggerInterface $logger, \Magento\Framework\App\Filesystem\DirectoryList $directoryList, \Magento\Framework\Filesystem\Io\File $fileIo, \Klevu\Logger\Api\StoreScopeResolverInterface $storeScopeResolver, \Klevu\Logger\Api\LogFileNameProviderInterface $logFileNameProvider, \Klevu\Logger\Api\ArchiveLogFileServiceInterface $archiveLogFileService)
    {
        $this->___init();
        parent::__construct($context, $logger, $directoryList, $fileIo, $storeScopeResolver, $logFileNameProvider, $archiveLogFileService);
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
