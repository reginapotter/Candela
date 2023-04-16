<?php
namespace Candela\Blog\Controller\Index\Category;

/**
 * Interceptor class for @see \Candela\Blog\Controller\Index\Category
 */
class Interceptor extends \Candela\Blog\Controller\Index\Category implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Candela\Blog\Model\Blog\Registry $registry, \Candela\Blog\Model\UrlResolver $urlResolver, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Candela\Blog\Model\Blog\MetaDataResolver\Category $metaDataResolver, \Candela\Blog\Api\CategoryRepositoryInterface $categoryRepository, \Magento\Store\Model\StoreManagerInterface $storeManager, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($context, $registry, $urlResolver, $resultPageFactory, $metaDataResolver, $categoryRepository, $storeManager, $logger);
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
