<?php
namespace Klevu\Content\Block\Adminhtml\Form\System\Config\Field\Select;

/**
 * Interceptor class for @see \Klevu\Content\Block\Adminhtml\Form\System\Config\Field\Select
 */
class Interceptor extends \Klevu\Content\Block\Adminhtml\Form\System\Config\Field\Select implements \Magento\Framework\Interception\InterceptorInterface
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
