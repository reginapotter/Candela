<?php
namespace Klevu\Search\Controller\Adminhtml\Download\Logdownload;

/**
 * Interceptor class for @see \Klevu\Search\Controller\Adminhtml\Download\Logdownload
 */
class Interceptor extends \Klevu\Search\Controller\Adminhtml\Download\Logdownload implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Stdlib\DateTime\TimezoneInterface $timezone, \Magento\Framework\App\Filesystem\DirectoryList $directoryList, \Magento\Framework\Archive\Zip $zip, \Magento\Framework\App\Response\Http\FileFactory $fileFactory, \Klevu\Search\Helper\Data $klevuHelperData, ?\Psr\Log\LoggerInterface $logger = null, ?\Magento\Framework\Filesystem\Io\File $fileIo = null, ?\Klevu\Logger\Api\StoreScopeResolverInterface $storeScopeResolver = null, ?\Klevu\Logger\Api\LogFileNameProviderInterface $logFileNameProvider = null, $maxFileSize = null)
    {
        $this->___init();
        parent::__construct($context, $timezone, $directoryList, $zip, $fileFactory, $klevuHelperData, $logger, $fileIo, $storeScopeResolver, $logFileNameProvider, $maxFileSize);
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
