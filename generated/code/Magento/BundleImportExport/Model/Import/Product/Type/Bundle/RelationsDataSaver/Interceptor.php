<?php
namespace Magento\BundleImportExport\Model\Import\Product\Type\Bundle\RelationsDataSaver;

/**
 * Interceptor class for @see \Magento\BundleImportExport\Model\Import\Product\Type\Bundle\RelationsDataSaver
 */
class Interceptor extends \Magento\BundleImportExport\Model\Import\Product\Type\Bundle\RelationsDataSaver implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ResourceConnection $resource, ?\Magento\Catalog\Model\ResourceModel\Product\Relation $productRelation = null)
    {
        $this->___init();
        parent::__construct($resource, $productRelation);
    }

    /**
     * {@inheritdoc}
     */
    public function saveSelections(array $selections)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'saveSelections');
        return $pluginInfo ? $this->___callPlugins('saveSelections', func_get_args(), $pluginInfo) : parent::saveSelections($selections);
    }
}
