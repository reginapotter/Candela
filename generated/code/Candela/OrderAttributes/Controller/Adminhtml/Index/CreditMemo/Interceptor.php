<?php
namespace Candela\OrderAttributes\Controller\Adminhtml\Index\CreditMemo;

/**
 * Interceptor class for @see \Candela\OrderAttributes\Controller\Adminhtml\Index\CreditMemo
 */
class Interceptor extends \Candela\OrderAttributes\Controller\Adminhtml\Index\CreditMemo implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Sales\Api\InvoiceRepositoryInterface $invoiceRepository, \Magento\Sales\Api\OrderRepositoryInterface $orderRepository)
    {
        $this->___init();
        parent::__construct($context, $invoiceRepository, $orderRepository);
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
