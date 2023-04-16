<?php
namespace Klevu\Search\Model\Product\MagentoProductActionsInterface;

/**
 * Proxy class for @see \Klevu\Search\Model\Product\MagentoProductActionsInterface
 */
class Proxy implements \Klevu\Search\Model\Product\MagentoProductActionsInterface, \Magento\Framework\ObjectManager\NoninterceptableInterface
{
    /**
     * Object Manager instance
     *
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager = null;

    /**
     * Proxied instance name
     *
     * @var string
     */
    protected $_instanceName = null;

    /**
     * Proxied instance
     *
     * @var \Klevu\Search\Model\Product\MagentoProductActionsInterface
     */
    protected $_subject = null;

    /**
     * Instance shareability flag
     *
     * @var bool
     */
    protected $_isShared = null;

    /**
     * Proxy constructor
     *
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     * @param string $instanceName
     * @param bool $shared
     */
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Klevu\\Search\\Model\\Product\\MagentoProductActionsInterface', $shared = true)
    {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
        $this->_isShared = $shared;
    }

    /**
     * @return array
     */
    public function __sleep()
    {
        return ['_subject', '_isShared', '_instanceName'];
    }

    /**
     * Retrieve ObjectManager from global scope
     */
    public function __wakeup()
    {
        $this->_objectManager = \Magento\Framework\App\ObjectManager::getInstance();
    }

    /**
     * Clone proxied instance
     */
    public function __clone()
    {
        $this->_subject = clone $this->_getSubject();
    }

    /**
     * Get proxied instance
     *
     * @return \Klevu\Search\Model\Product\MagentoProductActionsInterface
     */
    protected function _getSubject()
    {
        if (!$this->_subject) {
            $this->_subject = true === $this->_isShared
                ? $this->_objectManager->get($this->_instanceName)
                : $this->_objectManager->create($this->_instanceName);
        }
        return $this->_subject;
    }

    /**
     * {@inheritdoc}
     */
    public function updateProductCollection($store = null, $productIdsToUpdate = [])
    {
        return $this->_getSubject()->updateProductCollection($store, $productIdsToUpdate);
    }

    /**
     * {@inheritdoc}
     */
    public function addProductCollection($store = null, $productIdsToAdd = [])
    {
        return $this->_getSubject()->addProductCollection($store, $productIdsToAdd);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteProductCollection($store = null, $productIdsToDelete = [])
    {
        return $this->_getSubject()->deleteProductCollection($store, $productIdsToDelete);
    }

    /**
     * {@inheritdoc}
     */
    public function getKlevuProductCollection($store = null, $productIds = [], $lastEntityId = null)
    {
        return $this->_getSubject()->getKlevuProductCollection($store, $productIds, $lastEntityId);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteProducts(array $data)
    {
        return $this->_getSubject()->deleteProducts($data);
    }

    /**
     * {@inheritdoc}
     */
    public function updateProducts(array $data)
    {
        return $this->_getSubject()->updateProducts($data);
    }

    /**
     * {@inheritdoc}
     */
    public function addProducts(array $data)
    {
        return $this->_getSubject()->addProducts($data);
    }

    /**
     * {@inheritdoc}
     */
    public function markAllProductsForUpdate($store = null)
    {
        return $this->_getSubject()->markAllProductsForUpdate($store);
    }

    /**
     * {@inheritdoc}
     */
    public function clearAllProducts($store = null)
    {
        return $this->_getSubject()->clearAllProducts($store);
    }

    /**
     * {@inheritdoc}
     */
    public function sheduleCronExteranally($restApi)
    {
        return $this->_getSubject()->sheduleCronExteranally($restApi);
    }

    /**
     * {@inheritdoc}
     */
    public function getExpiryDateAttributeId()
    {
        return $this->_getSubject()->getExpiryDateAttributeId();
    }

    /**
     * {@inheritdoc}
     */
    public function getExpirySaleProductsIds()
    {
        return $this->_getSubject()->getExpirySaleProductsIds();
    }

    /**
     * {@inheritdoc}
     */
    public function markProductForUpdate()
    {
        return $this->_getSubject()->markProductForUpdate();
    }

    /**
     * {@inheritdoc}
     */
    public function updateSpecificProductIds($ids)
    {
        return $this->_getSubject()->updateSpecificProductIds($ids);
    }

    /**
     * {@inheritdoc}
     */
    public function updateProductsRating($store)
    {
        return $this->_getSubject()->updateProductsRating($store);
    }

    /**
     * {@inheritdoc}
     */
    public function catalogruleUpdateinfo()
    {
        return $this->_getSubject()->catalogruleUpdateinfo();
    }

    /**
     * {@inheritdoc}
     */
    public function markRecordIntoQueue($productIds, $recordType, $stores)
    {
        return $this->_getSubject()->markRecordIntoQueue($productIds, $recordType, $stores);
    }

    /**
     * {@inheritdoc}
     */
    public function getParentRelationsByChild($ids, $storeId = 0, $includeOosParents = true)
    {
        return $this->_getSubject()->getParentRelationsByChild($ids, $storeId, $includeOosParents);
    }

    /**
     * {@inheritdoc}
     */
    public function markCategoryRecordIntoQueue($stores = null)
    {
        return $this->_getSubject()->markCategoryRecordIntoQueue($stores);
    }
}
