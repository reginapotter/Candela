<?php
namespace Candela\Blog\Controller\AbstractController\Author;

/**
 * Interceptor class for @see \Candela\Blog\Controller\AbstractController\Author
 */
class Interceptor extends \Candela\Blog\Controller\AbstractController\Author implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Candela\Blog\Model\Blog\Registry $registry, \Candela\Blog\Model\UrlResolver $urlResolver, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Candela\Blog\Model\Blog\MetaDataResolver\Author $metaDataResolver, \Candela\Blog\Api\AuthorRepositoryInterface $authorRepository, \Magento\Store\Model\StoreManagerInterface $storeManager, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($context, $registry, $urlResolver, $resultPageFactory, $metaDataResolver, $authorRepository, $storeManager, $logger);
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
