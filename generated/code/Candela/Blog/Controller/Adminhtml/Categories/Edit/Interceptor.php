<?php
namespace Candela\Blog\Controller\Adminhtml\Categories\Edit;

/**
 * Interceptor class for @see \Candela\Blog\Controller\Adminhtml\Categories\Edit
 */
class Interceptor extends \Candela\Blog\Controller\Adminhtml\Categories\Edit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Candela\Blog\Api\CategoryRepositoryInterface $categoryRepository, \Psr\Log\LoggerInterface $logger, \Candela\Blog\Helper\Url $urlHelper, \Candela\Blog\Model\BlogRegistry $blogRegistry, \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $categoryRepository, $logger, $urlHelper, $blogRegistry, $dataPersistor);
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
