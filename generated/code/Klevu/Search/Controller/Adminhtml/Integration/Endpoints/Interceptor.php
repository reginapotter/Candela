<?php
namespace Klevu\Search\Controller\Adminhtml\Integration\Endpoints;

/**
 * Interceptor class for @see \Klevu\Search\Controller\Adminhtml\Integration\Endpoints
 */
class Interceptor extends \Klevu\Search\Controller\Adminhtml\Integration\Endpoints implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Klevu\Search\Api\Service\Account\GetAccountDetailsInterface $getAccountDetails, \Klevu\Search\Api\Service\Account\UpdateEndpointsInterface $updateEndpoints, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($context, $resultJsonFactory, $getAccountDetails, $updateEndpoints, $logger);
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
