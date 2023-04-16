<?php
namespace Candela\Blog\Controller\Index\Post;

/**
 * Interceptor class for @see \Candela\Blog\Controller\Index\Post
 */
class Interceptor extends \Candela\Blog\Controller\Index\Post implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Candela\Blog\Model\Blog\Registry $registry, \Candela\Blog\Api\PostRepositoryInterface $postRepository, \Magento\Store\App\Response\Redirect $redirect, \Candela\Blog\Helper\Url $urlHelper, \Candela\Blog\Model\UrlResolver $urlResolver, \Magento\Catalog\Model\Session $session, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Candela\Blog\Model\Blog\MetaDataResolver\Post $metaDataResolver, \Psr\Log\LoggerInterface $logger, \Magento\Store\Model\StoreManagerInterface $storeManager)
    {
        $this->___init();
        parent::__construct($context, $registry, $postRepository, $redirect, $urlHelper, $urlResolver, $session, $resultPageFactory, $metaDataResolver, $logger, $storeManager);
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
