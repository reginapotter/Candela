<?php
namespace Candela\OrderAttributes\Controller\Adminhtml\Index\SaveFields;

/**
 * Interceptor class for @see \Candela\OrderAttributes\Controller\Adminhtml\Index\SaveFields
 */
class Interceptor extends \Candela\OrderAttributes\Controller\Adminhtml\Index\SaveFields implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Quote\Model\ResourceModel\Quote $quoteResource, \Magento\Backend\Model\Session\Quote $sessionQuote)
    {
        $this->___init();
        parent::__construct($context, $quoteResource, $sessionQuote);
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
