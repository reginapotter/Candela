<?php
namespace Magento\InventoryCache\Model\FlushCacheByProductIds;

/**
 * Interceptor class for @see \Magento\InventoryCache\Model\FlushCacheByProductIds
 */
class Interceptor extends \Magento\InventoryCache\Model\FlushCacheByProductIds implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(string $productCacheTag, \Magento\InventoryCache\Model\FlushCacheByCacheTag $flushCacheByCacheTag)
    {
        $this->___init();
        parent::__construct($productCacheTag, $flushCacheByCacheTag);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(array $productIds) : void
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($productIds);
    }
}
