<?php
namespace Magento\ImportExport\Block\Adminhtml\Import\Edit\Before;

/**
 * Interceptor class for @see \Magento\ImportExport\Block\Adminhtml\Import\Edit\Before
 */
class Interceptor extends \Magento\ImportExport\Block\Adminhtml\Import\Edit\Before implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Json\EncoderInterface $jsonEncoder, \Magento\ImportExport\Model\Import $importModel, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $jsonEncoder, $importModel, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function toHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toHtml');
        return $pluginInfo ? $this->___callPlugins('toHtml', func_get_args(), $pluginInfo) : parent::toHtml();
    }
}
