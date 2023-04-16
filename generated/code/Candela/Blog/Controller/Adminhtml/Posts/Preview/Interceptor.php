<?php
namespace Candela\Blog\Controller\Adminhtml\Posts\Preview;

/**
 * Interceptor class for @see \Candela\Blog\Controller\Adminhtml\Posts\Preview
 */
class Interceptor extends \Candela\Blog\Controller\Adminhtml\Posts\Preview implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Candela\Blog\Model\PostsFactory $postsFactory, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Candela\Blog\Model\Repository\PostRepository $repository, \Magento\Framework\Url $urlHelper, \Candela\Blog\Model\Cache\Type\Blog $cache, \Amasty\Base\Model\Serializer $serializer, \Magento\Framework\Math\Random $mathRandom, \Magento\Framework\App\Cache\StateInterface $cacheState, \Candela\Blog\Model\Preview\PrepareForView $prepareForView, \Candela\Blog\Model\Preview\Encryptor $encryptor, \Magento\Framework\Stdlib\DateTime\DateTime $dateTime)
    {
        $this->___init();
        parent::__construct($context, $postsFactory, $resultJsonFactory, $repository, $urlHelper, $cache, $serializer, $mathRandom, $cacheState, $prepareForView, $encryptor, $dateTime);
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
