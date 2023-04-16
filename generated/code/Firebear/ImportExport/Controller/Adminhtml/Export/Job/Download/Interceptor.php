<?php
namespace Firebear\ImportExport\Controller\Adminhtml\Export\Job\Download;

/**
 * Interceptor class for @see \Firebear\ImportExport\Controller\Adminhtml\Export\Job\Download
 */
class Interceptor extends \Firebear\ImportExport\Controller\Adminhtml\Export\Job\Download implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Firebear\ImportExport\Controller\Adminhtml\Export\Context $context, \Magento\Framework\Filesystem $filesystem, \Magento\Framework\App\Response\Http\FileFactory $fileFactory, \Magento\Framework\App\Filesystem\DirectoryList $directoryList, \Firebear\ImportExport\Api\Export\History\GetByIdInterface $getByIdCommand, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($context, $filesystem, $fileFactory, $directoryList, $getByIdCommand, $logger);
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
