<?php
namespace Magento\CatalogImportExport\Model\Import\Product\ImageTypeProcessor;

/**
 * Interceptor class for @see \Magento\CatalogImportExport\Model\Import\Product\ImageTypeProcessor
 */
class Interceptor extends \Magento\CatalogImportExport\Model\Import\Product\ImageTypeProcessor implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CatalogImportExport\Model\Import\Proxy\Product\ResourceModelFactory $resourceFactory)
    {
        $this->___init();
        parent::__construct($resourceFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function getImageTypes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getImageTypes');
        return $pluginInfo ? $this->___callPlugins('getImageTypes', func_get_args(), $pluginInfo) : parent::getImageTypes();
    }
}
