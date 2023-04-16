<?php
namespace Candela\Blog\Controller\Adminhtml\Tags\Tagged;

/**
 * Interceptor class for @see \Candela\Blog\Controller\Adminhtml\Tags\Tagged
 */
class Interceptor extends \Candela\Blog\Controller\Adminhtml\Tags\Tagged implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Result\LayoutFactory $resultLayoutFactory, \Magento\Framework\Registry $registry, \Candela\Blog\Api\PostRepositoryInterface $postRepository)
    {
        $this->___init();
        parent::__construct($context, $resultLayoutFactory, $registry, $postRepository);
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
