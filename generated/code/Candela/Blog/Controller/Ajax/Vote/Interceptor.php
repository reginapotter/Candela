<?php
namespace Candela\Blog\Controller\Ajax\Vote;

/**
 * Interceptor class for @see \Candela\Blog\Controller\Ajax\Vote
 */
class Interceptor extends \Candela\Blog\Controller\Ajax\Vote implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\Data\Form\FormKey\Validator $formKeyValidator, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Json\EncoderInterface $jsonEncoder, \Magento\Framework\HTTP\PhpEnvironment\RemoteAddress $remoteAddress, \Candela\Blog\Model\VoteFactory $voteFactory, \Candela\Blog\Api\VoteRepositoryInterface $voteRepository, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory)
    {
        $this->___init();
        parent::__construct($context, $formKeyValidator, $logger, $jsonEncoder, $remoteAddress, $voteFactory, $voteRepository, $resultJsonFactory);
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
