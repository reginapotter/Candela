<?php
namespace Candela\Blog\Controller\Adminhtml\Posts\Save;

/**
 * Interceptor class for @see \Candela\Blog\Controller\Adminhtml\Posts\Save
 */
class Interceptor extends \Candela\Blog\Controller\Adminhtml\Posts\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Candela\Blog\Helper\Url $urlHelper, \Candela\Blog\Api\PostRepositoryInterface $postRepository, \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor, \Candela\Blog\Model\BlogRegistry $blogRegistry, \Magento\Framework\Stdlib\DateTime\TimezoneInterface $timezone, \Psr\Log\LoggerInterface $logger, \Candela\Blog\Model\ImageProcessor $imageProcessor, \Candela\Blog\Model\ResourceModel\Posts\RelatedProducts\PopulateRelatedProductsInfo $populateRelatedProductsInfo)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $urlHelper, $postRepository, $dataPersistor, $blogRegistry, $timezone, $logger, $imageProcessor, $populateRelatedProductsInfo);
    }

    /**
     * {@inheritdoc}
     */
    public function execute() : \Magento\Framework\Controller\ResultInterface
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
