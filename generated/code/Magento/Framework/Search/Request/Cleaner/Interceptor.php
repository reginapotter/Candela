<?php
namespace Magento\Framework\Search\Request\Cleaner;

/**
 * Interceptor class for @see \Magento\Framework\Search\Request\Cleaner
 */
class Interceptor extends \Magento\Framework\Search\Request\Cleaner implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Search\Request\Aggregation\StatusInterface $aggregationStatus)
    {
        $this->___init();
        parent::__construct($aggregationStatus);
    }

    /**
     * {@inheritdoc}
     */
    public function clean(array $requestData)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'clean');
        return $pluginInfo ? $this->___callPlugins('clean', func_get_args(), $pluginInfo) : parent::clean($requestData);
    }
}
