<?php
namespace Klevu\Search\Block\Adminhtml\Form\Field\Html\Select;

/**
 * Interceptor class for @see \Klevu\Search\Block\Adminhtml\Form\Field\Html\Select
 */
class Interceptor extends \Klevu\Search\Block\Adminhtml\Form\Field\Html\Select implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function setOptions($options)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setOptions');
        return $pluginInfo ? $this->___callPlugins('setOptions', func_get_args(), $pluginInfo) : parent::setOptions($options);
    }
}
