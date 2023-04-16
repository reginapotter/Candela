<?php
namespace Firebear\ImportExport\Controller\Adminhtml\Job\Fileload;

/**
 * Interceptor class for @see \Firebear\ImportExport\Controller\Adminhtml\Job\Fileload
 */
class Interceptor extends \Firebear\ImportExport\Controller\Adminhtml\Job\Fileload implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Firebear\ImportExport\Controller\Adminhtml\Context $context, \ZipArchive $archive, \Magento\Framework\Filesystem $filesystem, \Magento\MediaStorage\Model\File\UploaderFactory $uploaderFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Firebear\ImportExport\Model\Import\File\Validator\NotProtectedExtension $validator)
    {
        $this->___init();
        parent::__construct($context, $archive, $filesystem, $uploaderFactory, $storeManager, $validator);
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
