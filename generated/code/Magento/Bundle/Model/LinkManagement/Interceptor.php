<?php
namespace Magento\Bundle\Model\LinkManagement;

/**
 * Interceptor class for @see \Magento\Bundle\Model\LinkManagement
 */
class Interceptor extends \Magento\Bundle\Model\LinkManagement implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\Bundle\Api\Data\LinkInterfaceFactory $linkFactory, \Magento\Bundle\Model\SelectionFactory $bundleSelection, \Magento\Bundle\Model\ResourceModel\BundleFactory $bundleFactory, \Magento\Bundle\Model\ResourceModel\Option\CollectionFactory $optionCollection, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Api\DataObjectHelper $dataObjectHelper, \Magento\Framework\EntityManager\MetadataPool $metadataPool)
    {
        $this->___init();
        parent::__construct($productRepository, $linkFactory, $bundleSelection, $bundleFactory, $optionCollection, $storeManager, $dataObjectHelper, $metadataPool);
    }

    /**
     * {@inheritdoc}
     */
    public function addChildByProductSku($sku, $optionId, \Magento\Bundle\Api\Data\LinkInterface $linkedProduct)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addChildByProductSku');
        return $pluginInfo ? $this->___callPlugins('addChildByProductSku', func_get_args(), $pluginInfo) : parent::addChildByProductSku($sku, $optionId, $linkedProduct);
    }

    /**
     * {@inheritdoc}
     */
    public function removeChild($sku, $optionId, $childSku)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeChild');
        return $pluginInfo ? $this->___callPlugins('removeChild', func_get_args(), $pluginInfo) : parent::removeChild($sku, $optionId, $childSku);
    }
}
