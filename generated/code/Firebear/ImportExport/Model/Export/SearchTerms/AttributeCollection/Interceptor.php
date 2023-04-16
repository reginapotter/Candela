<?php
namespace Firebear\ImportExport\Model\Export\SearchTerms\AttributeCollection;

/**
 * Interceptor class for @see \Firebear\ImportExport\Model\Export\SearchTerms\AttributeCollection
 */
class Interceptor extends \Firebear\ImportExport\Model\Export\SearchTerms\AttributeCollection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactory $entityFactory, \Magento\Eav\Model\AttributeFactory $attributeFactory, \Magento\Search\Model\ResourceModel\Query $searchQuery, \Firebear\ImportExport\Helper\Data $helper)
    {
        $this->___init();
        parent::__construct($entityFactory, $attributeFactory, $searchQuery, $helper);
    }

    /**
     * {@inheritdoc}
     */
    public function getCurPage($displacement = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurPage');
        return $pluginInfo ? $this->___callPlugins('getCurPage', func_get_args(), $pluginInfo) : parent::getCurPage($displacement);
    }
}
