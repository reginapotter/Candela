<?php
namespace Magento\InventoryExportStock\Model\ExportStockSalableQtySearchResult;

/**
 * Interceptor class for @see \Magento\InventoryExportStock\Model\ExportStockSalableQtySearchResult
 */
class Interceptor extends \Magento\InventoryExportStock\Model\ExportStockSalableQtySearchResult implements \Magento\Framework\Interception\InterceptorInterface
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
