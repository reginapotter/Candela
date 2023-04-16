<?php
namespace Sezzle\Sezzlepay\Model\GraphQl\Resolver\CreateSezzleCheckout;

/**
 * Interceptor class for @see \Sezzle\Sezzlepay\Model\GraphQl\Resolver\CreateSezzleCheckout
 */
class Interceptor extends \Sezzle\Sezzlepay\Model\GraphQl\Resolver\CreateSezzleCheckout implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Sezzle\Sezzlepay\Api\CheckoutInterface $checkout, \Sezzle\Sezzlepay\Model\GraphQl\Resolver\Validator $validator, \Sezzle\Sezzlepay\Model\GraphQl\Resolver\GetCartForUser $getCartForUser)
    {
        $this->___init();
        parent::__construct($checkout, $validator, $getCartForUser);
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
