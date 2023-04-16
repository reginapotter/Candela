<?php
namespace Firebear\ImportExport\Controller\Adminhtml\Job\Xslt;

/**
 * Interceptor class for @see \Firebear\ImportExport\Controller\Adminhtml\Job\Xslt
 */
class Interceptor extends \Firebear\ImportExport\Controller\Adminhtml\Job\Xslt implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Firebear\ImportExport\Controller\Adminhtml\Context $context, \Magento\Framework\FilesystemFactory $filesystemFactory, \Magento\Framework\Filesystem\Io\File $file, \Firebear\ImportExport\Model\ImportFactory $importFactory, \Firebear\ImportExport\Model\Output\Xslt $modelOutput)
    {
        $this->___init();
        parent::__construct($context, $filesystemFactory, $file, $importFactory, $modelOutput);
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
