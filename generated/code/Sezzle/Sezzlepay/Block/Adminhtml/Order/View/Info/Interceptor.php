<?php
namespace Sezzle\Sezzlepay\Block\Adminhtml\Order\View\Info;

/**
 * Interceptor class for @see \Sezzle\Sezzlepay\Block\Adminhtml\Order\View\Info
 */
class Interceptor extends \Sezzle\Sezzlepay\Block\Adminhtml\Order\View\Info implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Sales\Helper\Admin $adminHelper, \Magento\Customer\Api\GroupRepositoryInterface $groupRepository, \Magento\Customer\Api\CustomerMetadataInterface $metadata, \Magento\Customer\Model\Metadata\ElementFactory $elementFactory, \Magento\Sales\Model\Order\Address\Renderer $addressRenderer, \Magento\Payment\Gateway\Validator\ValidatorInterface $authValidator, \Magento\Payment\Gateway\Data\PaymentDataObjectFactory $paymentDataObjectFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $adminHelper, $groupRepository, $metadata, $elementFactory, $addressRenderer, $authValidator, $paymentDataObjectFactory, $data);
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
