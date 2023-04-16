<?php
namespace Candela\Blog\Controller\Adminhtml\Categories\MassInactivate;

/**
 * Interceptor class for @see \Candela\Blog\Controller\Adminhtml\Categories\MassInactivate
 */
class Interceptor extends \Candela\Blog\Controller\Adminhtml\Categories\MassInactivate implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Ui\Component\MassAction\Filter $filter, \Psr\Log\LoggerInterface $logger, \Candela\Blog\Model\Repository\CategoriesRepository $repository, \Candela\Blog\Model\ResourceModel\Categories\CollectionFactory $collectionFactory)
    {
        $this->___init();
        parent::__construct($context, $filter, $logger, $repository, $collectionFactory);
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
