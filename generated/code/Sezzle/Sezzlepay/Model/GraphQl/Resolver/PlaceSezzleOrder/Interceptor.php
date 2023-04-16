<?php
namespace Sezzle\Sezzlepay\Model\GraphQl\Resolver\PlaceSezzleOrder;

/**
 * Interceptor class for @see \Sezzle\Sezzlepay\Model\GraphQl\Resolver\PlaceSezzleOrder
 */
class Interceptor extends \Sezzle\Sezzlepay\Model\GraphQl\Resolver\PlaceSezzleOrder implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Sezzle\Sezzlepay\Model\GraphQl\Resolver\Validator $validator, \Sezzle\Sezzlepay\Model\GraphQl\Resolver\GetCartForUser $getCartForUser, \Magento\QuoteGraphQl\Model\Cart\CheckCartCheckoutAllowance $checkCartCheckoutAllowance, \Sezzle\Sezzlepay\Api\CartManagementInterface $cartManagement, \Magento\Sales\Api\OrderRepositoryInterface $orderRepository, \Magento\Quote\Api\PaymentMethodManagementInterface $paymentMethodManagement)
    {
        $this->___init();
        parent::__construct($validator, $getCartForUser, $checkCartCheckoutAllowance, $cartManagement, $orderRepository, $paymentMethodManagement);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\Magento\Framework\GraphQl\Config\Element\Field $field, $context, \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info, ?array $value = null, ?array $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resolve');
        return $pluginInfo ? $this->___callPlugins('resolve', func_get_args(), $pluginInfo) : parent::resolve($field, $context, $info, $value, $args);
    }
}
