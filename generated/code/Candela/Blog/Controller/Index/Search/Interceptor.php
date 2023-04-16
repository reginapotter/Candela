<?php
namespace Candela\Blog\Controller\Index\Search;

/**
 * Interceptor class for @see \Candela\Blog\Controller\Index\Search
 */
class Interceptor extends \Candela\Blog\Controller\Index\Search implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Candela\Blog\Model\Blog\MetaDataResolver\Search $metaDataResolver, \Candela\Blog\Model\Blog\Registry $registry)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $metaDataResolver, $registry);
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
