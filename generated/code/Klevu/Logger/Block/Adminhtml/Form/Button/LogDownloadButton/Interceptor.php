<?php
namespace Klevu\Logger\Block\Adminhtml\Form\Button\LogDownloadButton;

/**
 * Interceptor class for @see \Klevu\Logger\Block\Adminhtml\Form\Button\LogDownloadButton
 */
class Interceptor extends \Klevu\Logger\Block\Adminhtml\Form\Button\LogDownloadButton implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Klevu\Logger\Api\KlevuLoggerInterface $logger, \Magento\Framework\App\Filesystem\DirectoryList $directoryList, \Magento\Framework\Filesystem\Io\File $fileIo, \Klevu\Logger\Api\LogFileNameProviderInterface $logFileNameProvider, $destinationUrl, $buttonLabel, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $logger, $directoryList, $fileIo, $logFileNameProvider, $destinationUrl, $buttonLabel, $data);
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
