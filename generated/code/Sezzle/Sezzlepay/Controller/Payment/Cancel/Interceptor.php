<?php
namespace Sezzle\Sezzlepay\Controller\Payment\Cancel;

/**
 * Interceptor class for @see \Sezzle\Sezzlepay\Controller\Payment\Cancel
 */
class Interceptor extends \Sezzle\Sezzlepay\Controller\Payment\Cancel implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\RequestInterface $request, \Magento\Customer\Model\Session $customerSession, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Sales\Model\OrderFactory $orderFactory, \Sezzle\Sezzlepay\Helper\Data $helper, \Sezzle\Sezzlepay\Model\Tokenize $tokenize, \Magento\Framework\Message\ManagerInterface $messageManager, \Magento\Framework\Controller\Result\RedirectFactory $resultRedirectFactory, \Magento\Quote\Model\QuoteIdToMaskedQuoteIdInterface $quoteIdToMaskedQuoteIdInterface, \Sezzle\Sezzlepay\Api\CartManagementInterface $cartManagement, \Sezzle\Sezzlepay\Api\GuestCartManagementInterface $guestCartManagement)
    {
        $this->___init();
        parent::__construct($request, $customerSession, $checkoutSession, $orderFactory, $helper, $tokenize, $messageManager, $resultRedirectFactory, $quoteIdToMaskedQuoteIdInterface, $cartManagement, $guestCartManagement);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }
}
