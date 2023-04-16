<?php
namespace Candela\Blog\Controller\Ajax\LiveSearch;

/**
 * Interceptor class for @see \Candela\Blog\Controller\Ajax\LiveSearch
 */
class Interceptor extends \Candela\Blog\Controller\Ajax\LiveSearch implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Controller\ResultFactory $resultFactory, \Candela\Blog\Model\LiveSearch\LiveSearchPool $liveSearchPool, \Magento\Framework\App\RequestInterface $request, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($resultFactory, $liveSearchPool, $request, $logger);
    }

    /**
     * {@inheritdoc}
     */
    public function execute() : \Magento\Framework\Controller\ResultInterface
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }
}
