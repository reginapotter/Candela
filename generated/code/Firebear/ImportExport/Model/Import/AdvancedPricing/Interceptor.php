<?php
namespace Firebear\ImportExport\Model\Import\AdvancedPricing;

/**
 * Interceptor class for @see \Firebear\ImportExport\Model\Import\AdvancedPricing
 */
class Interceptor extends \Firebear\ImportExport\Model\Import\AdvancedPricing implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Firebear\ImportExport\Model\Import\Context $context, \Magento\Framework\Stdlib\DateTime\DateTime $dateTime, \Magento\CatalogImportExport\Model\Import\Proxy\Product\ResourceModelFactory $resourceFactory, \Magento\Catalog\Model\Product $productModel, \Magento\Catalog\Helper\Data $catalogHelper, \Magento\CatalogImportExport\Model\Import\Product\StoreResolver $storeResolver, \Firebear\ImportExport\Model\Import\Product $importProduct, \Magento\AdvancedPricingImportExport\Model\Import\AdvancedPricing\Validator $validator, \Magento\AdvancedPricingImportExport\Model\Import\AdvancedPricing\Validator\Website $websiteValidator, \Magento\AdvancedPricingImportExport\Model\Import\AdvancedPricing\Validator\TierPrice $tierPriceValidator, \Symfony\Component\Console\Output\ConsoleOutput $output, \Firebear\ImportExport\Helper\Data $helper, \Magento\Framework\App\ProductMetadataInterface $productMetadata, \Magento\Framework\App\CacheInterface $cache)
    {
        $this->___init();
        parent::__construct($context, $dateTime, $resourceFactory, $productModel, $catalogHelper, $storeResolver, $importProduct, $validator, $websiteValidator, $tierPriceValidator, $output, $helper, $productMetadata, $cache);
    }

    /**
     * {@inheritdoc}
     */
    public function saveAdvancedPricing()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'saveAdvancedPricing');
        return $pluginInfo ? $this->___callPlugins('saveAdvancedPricing', func_get_args(), $pluginInfo) : parent::saveAdvancedPricing();
    }

    /**
     * {@inheritdoc}
     */
    public function deleteAdvancedPricing()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deleteAdvancedPricing');
        return $pluginInfo ? $this->___callPlugins('deleteAdvancedPricing', func_get_args(), $pluginInfo) : parent::deleteAdvancedPricing();
    }
}
