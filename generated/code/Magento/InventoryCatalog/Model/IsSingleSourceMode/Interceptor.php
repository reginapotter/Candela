<?php
namespace Magento\InventoryCatalog\Model\IsSingleSourceMode;

/**
 * Interceptor class for @see \Magento\InventoryCatalog\Model\IsSingleSourceMode
 */
class Interceptor extends \Magento\InventoryCatalog\Model\IsSingleSourceMode implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\InventoryApi\Api\SourceRepositoryInterface $sourceRepository, \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder)
    {
        $this->___init();
        parent::__construct($sourceRepository, $searchCriteriaBuilder);
    }

    /**
     * {@inheritdoc}
     */
    public function execute() : bool
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }
}
