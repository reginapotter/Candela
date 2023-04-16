<?php
namespace Candela\Blog\Controller\Index\Form;

/**
 * Interceptor class for @see \Candela\Blog\Controller\Index\Form
 */
class Interceptor extends \Candela\Blog\Controller\Index\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Candela\Blog\Api\PostRepositoryInterface $postRepository, \Candela\Blog\Api\CommentRepositoryInterface $commentRepository, ?\Amasty\Base\Model\Serializer $serializer = null)
    {
        $this->___init();
        parent::__construct($context, $postRepository, $commentRepository, $serializer);
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
