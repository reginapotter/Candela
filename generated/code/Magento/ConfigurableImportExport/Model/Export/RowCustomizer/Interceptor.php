<?php
namespace Magento\ConfigurableImportExport\Model\Export\RowCustomizer;

/**
 * Interceptor class for @see \Magento\ConfigurableImportExport\Model\Export\RowCustomizer
 */
class Interceptor extends \Magento\ConfigurableImportExport\Model\Export\RowCustomizer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Store\Model\StoreManagerInterface $storeManager)
    {
        $this->___init();
        parent::__construct($storeManager);
    }

    /**
     * {@inheritdoc}
     */
    public function prepareData($collection, $productIds)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepareData');
        return $pluginInfo ? $this->___callPlugins('prepareData', func_get_args(), $pluginInfo) : parent::prepareData($collection, $productIds);
    }
}
