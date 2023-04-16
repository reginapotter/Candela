<?php
namespace Amasty\EmailUnsubscribe\Controller\Unsubscribe\Index;

/**
 * Interceptor class for @see \Amasty\EmailUnsubscribe\Controller\Unsubscribe\Index
 */
class Interceptor extends \Amasty\EmailUnsubscribe\Controller\Unsubscribe\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Controller\ResultFactory $resultFactory, \Magento\Framework\App\RequestInterface $request, \Amasty\EmailUnsubscribe\Model\Unsubscribe $unsubscribe, \Amasty\EmailUnsubscribe\Model\UrlHash $urlHash, \Magento\Framework\Message\ManagerInterface $messageManager)
    {
        $this->___init();
        parent::__construct($resultFactory, $request, $unsubscribe, $urlHash, $messageManager);
    }

    /**
     * {@inheritdoc}
     */
    public function execute() : \Magento\Framework\Controller\Result\Redirect
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }
}
