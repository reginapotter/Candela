<?php
namespace Candela\Blog\Controller\Post\Preview;

/**
 * Interceptor class for @see \Candela\Blog\Controller\Post\Preview
 */
class Interceptor extends \Candela\Blog\Controller\Post\Preview implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Candela\Blog\Model\Blog\Registry $registry, \Candela\Blog\Model\PostsFactory $postsFactory, \Magento\Store\App\Response\Redirect $redirect, \Candela\Blog\Helper\Url $urlHelper, \Candela\Blog\Model\Cache\Type\Blog $cache, \Amasty\Base\Model\Serializer $serializer, \Candela\Blog\Model\Blog\MetaDataResolver\Post $metadataResolver, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Candela\Blog\Model\Repository\PostRepository $postRepository, \Candela\Blog\Model\Preview\PrepareForView $prepareForView, \Candela\Blog\Model\Preview\Encryptor $encryptor, \Magento\Framework\Stdlib\DateTime\DateTime $dateTime)
    {
        $this->___init();
        parent::__construct($context, $registry, $postsFactory, $redirect, $urlHelper, $cache, $serializer, $metadataResolver, $resultPageFactory, $postRepository, $prepareForView, $encryptor, $dateTime);
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
