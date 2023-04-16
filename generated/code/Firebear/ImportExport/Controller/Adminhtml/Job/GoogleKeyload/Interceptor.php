<?php
namespace Firebear\ImportExport\Controller\Adminhtml\Job\GoogleKeyload;

/**
 * Interceptor class for @see \Firebear\ImportExport\Controller\Adminhtml\Job\GoogleKeyload
 */
class Interceptor extends \Firebear\ImportExport\Controller\Adminhtml\Job\GoogleKeyload implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Firebear\ImportExport\Controller\Adminhtml\Context $context, \Magento\Framework\Filesystem $filesystem, \Magento\Framework\Json\EncoderInterface $jsonEncoder, \Magento\MediaStorage\Model\File\UploaderFactory $uploaderFactory, \Magento\Store\Model\StoreManagerInterface $storeManager)
    {
        $this->___init();
        parent::__construct($context, $filesystem, $jsonEncoder, $uploaderFactory, $storeManager);
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
