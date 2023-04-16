<?php
namespace Klevu\Search\Block\Adminhtml\Form\Field\Logclear;

/**
 * Interceptor class for @see \Klevu\Search\Block\Adminhtml\Form\Field\Logclear
 */
class Interceptor extends \Klevu\Search\Block\Adminhtml\Form\Field\Logclear implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Klevu\Search\Helper\Data $klevuHelperData, \Magento\Framework\App\Filesystem\DirectoryList $directoryList, array $data = [], ?\Klevu\Logger\Api\KlevuLoggerInterface $logger = null, ?\Magento\Framework\Filesystem\Io\File $fileIo = null, ?\Klevu\Logger\Api\LogFileNameProviderInterface $logFileNameProvider = null, $destinationUrl = 'klevu_search/download/logclear', $buttonLabel = 'Rename Klevu Search Log')
    {
        $this->___init();
        parent::__construct($context, $klevuHelperData, $directoryList, $data, $logger, $fileIo, $logFileNameProvider, $destinationUrl, $buttonLabel);
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
