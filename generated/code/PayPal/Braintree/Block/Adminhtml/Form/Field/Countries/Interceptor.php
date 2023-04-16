<?php
namespace PayPal\Braintree\Block\Adminhtml\Form\Field\Countries;

/**
 * Interceptor class for @see \PayPal\Braintree\Block\Adminhtml\Form\Field\Countries
 */
class Interceptor extends \PayPal\Braintree\Block\Adminhtml\Form\Field\Countries implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Context $context, \PayPal\Braintree\Helper\Country $countryHelper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $countryHelper, $data);
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
