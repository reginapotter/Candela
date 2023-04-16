<?php
namespace Candela\Blog\Controller\Adminhtml\Comments\Delete;

/**
 * Interceptor class for @see \Candela\Blog\Controller\Adminhtml\Comments\Delete
 */
class Interceptor extends \Candela\Blog\Controller\Adminhtml\Comments\Delete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Candela\Blog\Api\CommentRepositoryInterface $commentRepository, \Psr\Log\LoggerInterface $logger, \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor, \Candela\Blog\Model\BlogRegistry $blogRegistry)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $commentRepository, $logger, $dataPersistor, $blogRegistry);
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
