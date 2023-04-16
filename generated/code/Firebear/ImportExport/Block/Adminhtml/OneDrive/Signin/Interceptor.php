<?php
namespace Firebear\ImportExport\Block\Adminhtml\OneDrive\Signin;

/**
 * Interceptor class for @see \Firebear\ImportExport\Block\Adminhtml\OneDrive\Signin
 */
class Interceptor extends \Firebear\ImportExport\Block\Adminhtml\OneDrive\Signin implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Firebear\ImportExport\Model\OneDrive\OneDrive $oneDrive, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $oneDrive, $data);
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
