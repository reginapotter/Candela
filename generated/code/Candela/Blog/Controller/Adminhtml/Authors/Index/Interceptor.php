<?php
namespace Candela\Blog\Controller\Adminhtml\Authors\Index;

/**
 * Interceptor class for @see \Candela\Blog\Controller\Adminhtml\Authors\Index
 */
class Interceptor extends \Candela\Blog\Controller\Adminhtml\Authors\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Candela\Blog\Api\AuthorRepositoryInterface $authorRepository, \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor, \Psr\Log\LoggerInterface $logger, \Candela\Blog\Model\BlogRegistry $blogRegistry, \Candela\Blog\Model\ImageProcessor $imageProcessor)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $authorRepository, $dataPersistor, $logger, $blogRegistry, $imageProcessor);
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
