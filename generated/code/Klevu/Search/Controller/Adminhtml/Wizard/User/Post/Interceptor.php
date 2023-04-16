<?php
namespace Klevu\Search\Controller\Adminhtml\Wizard\User\Post;

/**
 * Interceptor class for @see \Klevu\Search\Controller\Adminhtml\Wizard\User\Post
 */
class Interceptor extends \Klevu\Search\Controller\Adminhtml\Wizard\User\Post implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Klevu\Search\Helper\Api $searchHelperApi)
    {
        $this->___init();
        parent::__construct($context, $searchHelperApi);
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
