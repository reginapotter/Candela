<?php
namespace Firebear\ImportExport\Model\Import\StockItemImporter;

/**
 * Interceptor class for @see \Firebear\ImportExport\Model\Import\StockItemImporter
 */
class Interceptor extends \Firebear\ImportExport\Model\Import\StockItemImporter implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CatalogInventory\Model\ResourceModel\Stock\ItemFactory $stockResourceItemFactory, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($stockResourceItemFactory, $logger);
    }

    /**
     * {@inheritdoc}
     */
    public function import(array $stockData)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'import');
        return $pluginInfo ? $this->___callPlugins('import', func_get_args(), $pluginInfo) : parent::import($stockData);
    }
}
