<?php
namespace Candela\OrderAttributes\Controller\Index\SaveFields;

/**
 * Interceptor class for @see \Candela\OrderAttributes\Controller\Index\SaveFields
 */
class Interceptor extends \Candela\OrderAttributes\Controller\Index\SaveFields implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Quote\Model\QuoteFactory $quoteFactory, \Magento\Quote\Model\ResourceModel\Quote $quoteResource)
    {
        $this->___init();
        parent::__construct($context, $checkoutSession, $quoteFactory, $quoteResource);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
