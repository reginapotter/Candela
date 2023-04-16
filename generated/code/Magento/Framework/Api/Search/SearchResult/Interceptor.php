<?php
namespace Magento\Framework\Api\Search\SearchResult;

/**
 * Interceptor class for @see \Magento\Framework\Api\Search\SearchResult
 */
class Interceptor extends \Magento\Framework\Api\Search\SearchResult implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(array $data = [])
    {
        $this->___init();
        parent::__construct($data);
    }

    /**
     * {@inheritdoc}
     */
    public function setItems(?array $items = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setItems');
        return $pluginInfo ? $this->___callPlugins('setItems', func_get_args(), $pluginInfo) : parent::setItems($items);
    }
}
