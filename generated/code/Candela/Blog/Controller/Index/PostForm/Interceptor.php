<?php
namespace Candela\Blog\Controller\Index\PostForm;

/**
 * Interceptor class for @see \Candela\Blog\Controller\Index\PostForm
 */
class Interceptor extends \Candela\Blog\Controller\Index\PostForm implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Customer\Model\SessionFactory $sessionFactory, \Candela\Blog\Model\Blog\Registry $registry, \Candela\Blog\Helper\Settings $settingsHelper, \Candela\Blog\Api\PostRepositoryInterface $postRepository, \Candela\Blog\Api\CommentRepositoryInterface $commentRepository, \Magento\Store\Model\StoreManagerInterface $storeManagerInterface, \Candela\Blog\Helper\Url $urlHelper, \Magento\Framework\DataObjectFactory $objectFactory, \Candela\Blog\Model\Notification\Notification $notificationModel, \Candela\Blog\Block\Comments\Form $form, \Magento\Framework\App\Response\RedirectInterface $redirect, ?\Amasty\Base\Model\Serializer $serializer = null)
    {
        $this->___init();
        parent::__construct($context, $sessionFactory, $registry, $settingsHelper, $postRepository, $commentRepository, $storeManagerInterface, $urlHelper, $objectFactory, $notificationModel, $form, $redirect, $serializer);
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
