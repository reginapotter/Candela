<?php
namespace Candela\Blog\Model\ResourceModel\Posts\Collection;

/**
 * Interceptor class for @see \Candela\Blog\Model\ResourceModel\Posts\Collection
 */
class Interceptor extends \Candela\Blog\Model\ResourceModel\Posts\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactoryInterface $entityFactory, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy, \Magento\Framework\Event\ManagerInterface $eventManager, \Candela\Blog\Model\ResourceModel\Author\CollectionFactory $authorCollectionFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\DB\Helper\Mysql\Fulltext $fulltextHelper, \Magento\Framework\Stdlib\StringUtils $stringUtils, \Magento\Framework\App\State $state, ?\Magento\Framework\DB\Adapter\AdapterInterface $connection = null, ?\Magento\Framework\Model\ResourceModel\Db\AbstractDb $resource = null)
    {
        $this->___init();
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $authorCollectionFactory, $storeManager, $fulltextHelper, $stringUtils, $state, $connection, $resource);
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
