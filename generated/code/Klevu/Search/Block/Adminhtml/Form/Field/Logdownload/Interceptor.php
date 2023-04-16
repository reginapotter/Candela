<?php
namespace Klevu\Search\Block\Adminhtml\Form\Field\Logdownload;

/**
 * Interceptor class for @see \Klevu\Search\Block\Adminhtml\Form\Field\Logdownload
 */
class Interceptor extends \Klevu\Search\Block\Adminhtml\Form\Field\Logdownload implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\App\Filesystem\DirectoryList $directoryList, \Klevu\Search\Helper\Data $klevuHelperData, array $data = [], ?\Magento\Framework\Filesystem\Io\File $fileIo = null, ?\Klevu\Logger\Api\KlevuLoggerInterface $logger = null, ?\Klevu\Logger\Api\LogFileNameProviderInterface $logFileNameProvider = null, $destinationUrl = 'klevu_search/download/logdownload', $buttonLabel = 'Download Klevu Search Log')
    {
        $this->___init();
        parent::__construct($context, $directoryList, $klevuHelperData, $data, $fileIo, $logger, $logFileNameProvider, $destinationUrl, $buttonLabel);
    }

    /**
     * {@inheritdoc}
     */
    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'render');
        return $pluginInfo ? $this->___callPlugins('render', func_get_args(), $pluginInfo) : parent::render($element);
    }
}
