<?php
namespace Magento\Catalog\Model\ResourceModel\Product;

/**
 * Proxy class for @see \Magento\Catalog\Model\ResourceModel\Product
 */
class Proxy extends \Magento\Catalog\Model\ResourceModel\Product implements \Magento\Framework\ObjectManager\NoninterceptableInterface
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
     * @var \Magento\Catalog\Model\ResourceModel\Product
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\Catalog\\Model\\ResourceModel\\Product', $shared = true)
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
     * @return \Magento\Catalog\Model\ResourceModel\Product
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
    public function getEntityType()
    {
        return $this->_getSubject()->getEntityType();
    }

    /**
     * {@inheritdoc}
     */
    public function getProductWebsiteTable()
    {
        return $this->_getSubject()->getProductWebsiteTable();
    }

    /**
     * {@inheritdoc}
     */
    public function getProductCategoryTable()
    {
        return $this->_getSubject()->getProductCategoryTable();
    }

    /**
     * {@inheritdoc}
     */
    public function getWebsiteIds($product)
    {
        return $this->_getSubject()->getWebsiteIds($product);
    }

    /**
     * {@inheritdoc}
     */
    public function getWebsiteIdsByProductIds($productIds)
    {
        return $this->_getSubject()->getWebsiteIdsByProductIds($productIds);
    }

    /**
     * {@inheritdoc}
     */
    public function getCategoryIds($product)
    {
        return $this->_getSubject()->getCategoryIds($product);
    }

    /**
     * {@inheritdoc}
     */
    public function getIdBySku($sku)
    {
        return $this->_getSubject()->getIdBySku($sku);
    }

    /**
     * {@inheritdoc}
     */
    public function delete($object)
    {
        return $this->_getSubject()->delete($object);
    }

    /**
     * {@inheritdoc}
     */
    public function getCategoryCollection($product)
    {
        return $this->_getSubject()->getCategoryCollection($product);
    }

    /**
     * {@inheritdoc}
     */
    public function getAvailableInCategories($object)
    {
        return $this->_getSubject()->getAvailableInCategories($object);
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultAttributeSourceModel()
    {
        return $this->_getSubject()->getDefaultAttributeSourceModel();
    }

    /**
     * {@inheritdoc}
     */
    public function canBeShowInCategory($product, $categoryId)
    {
        return $this->_getSubject()->canBeShowInCategory($product, $categoryId);
    }

    /**
     * {@inheritdoc}
     */
    public function duplicate($oldId, $newId)
    {
        return $this->_getSubject()->duplicate($oldId, $newId);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductsSku(array $productIds)
    {
        return $this->_getSubject()->getProductsSku($productIds);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductsIdsBySkus(array $productSkuList)
    {
        return $this->_getSubject()->getProductsIdsBySkus($productSkuList);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductEntitiesInfo($columns = null)
    {
        return $this->_getSubject()->getProductEntitiesInfo($columns);
    }

    /**
     * {@inheritdoc}
     */
    public function countAll()
    {
        return $this->_getSubject()->countAll();
    }

    /**
     * {@inheritdoc}
     */
    public function validate($object)
    {
        return $this->_getSubject()->validate($object);
    }

    /**
     * {@inheritdoc}
     */
    public function load($object, $entityId, $attributes = [])
    {
        return $this->_getSubject()->load($object, $entityId, $attributes);
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\Framework\Model\AbstractModel $object)
    {
        return $this->_getSubject()->save($object);
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultStoreId()
    {
        return $this->_getSubject()->getDefaultStoreId();
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeRawValue($entityId, $attribute, $store)
    {
        return $this->_getSubject()->getAttributeRawValue($entityId, $attribute, $store);
    }

    /**
     * {@inheritdoc}
     */
    public function setConnection($connection)
    {
        return $this->_getSubject()->setConnection($connection);
    }

    /**
     * {@inheritdoc}
     */
    public function getConnection()
    {
        return $this->_getSubject()->getConnection();
    }

    /**
     * {@inheritdoc}
     */
    public function getIdFieldName()
    {
        return $this->_getSubject()->getIdFieldName();
    }

    /**
     * {@inheritdoc}
     */
    public function getTable($alias)
    {
        return $this->_getSubject()->getTable($alias);
    }

    /**
     * {@inheritdoc}
     */
    public function setType($type)
    {
        return $this->_getSubject()->setType($type);
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return $this->_getSubject()->getType();
    }

    /**
     * {@inheritdoc}
     */
    public function getTypeId()
    {
        return $this->_getSubject()->getTypeId();
    }

    /**
     * {@inheritdoc}
     */
    public function unsetAttributes($attributes = null)
    {
        return $this->_getSubject()->unsetAttributes($attributes);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttribute($attribute)
    {
        return $this->_getSubject()->getAttribute($attribute);
    }

    /**
     * {@inheritdoc}
     */
    public function addAttribute(\Magento\Eav\Model\Entity\Attribute\AbstractAttribute $attribute, $object = null)
    {
        return $this->_getSubject()->addAttribute($attribute, $object);
    }

    /**
     * {@inheritdoc}
     */
    public function isPartialLoad($flag = null)
    {
        return $this->_getSubject()->isPartialLoad($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function isPartialSave($flag = null)
    {
        return $this->_getSubject()->isPartialSave($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function loadAllAttributes($object = null)
    {
        return $this->_getSubject()->loadAllAttributes($object);
    }

    /**
     * {@inheritdoc}
     */
    public function getSortedAttributes($setId = null)
    {
        return $this->_getSubject()->getSortedAttributes($setId);
    }

    /**
     * {@inheritdoc}
     */
    public function attributesCompare($firstAttribute, $secondAttribute)
    {
        return $this->_getSubject()->attributesCompare($firstAttribute, $secondAttribute);
    }

    /**
     * {@inheritdoc}
     */
    public function walkAttributes($partMethod, array $args = [], $collectExceptionMessages = null)
    {
        return $this->_getSubject()->walkAttributes($partMethod, $args, $collectExceptionMessages);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributesByCode()
    {
        return $this->_getSubject()->getAttributesByCode();
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributesByTable()
    {
        return $this->_getSubject()->getAttributesByTable();
    }

    /**
     * {@inheritdoc}
     */
    public function getEntityTable()
    {
        return $this->_getSubject()->getEntityTable();
    }

    /**
     * {@inheritdoc}
     */
    public function getLinkField()
    {
        return $this->_getSubject()->getLinkField();
    }

    /**
     * {@inheritdoc}
     */
    public function getEntityIdField()
    {
        return $this->_getSubject()->getEntityIdField();
    }

    /**
     * {@inheritdoc}
     */
    public function getValueEntityIdField()
    {
        return $this->_getSubject()->getValueEntityIdField();
    }

    /**
     * {@inheritdoc}
     */
    public function getValueTablePrefix()
    {
        return $this->_getSubject()->getValueTablePrefix();
    }

    /**
     * {@inheritdoc}
     */
    public function getEntityTablePrefix()
    {
        return $this->_getSubject()->getEntityTablePrefix();
    }

    /**
     * {@inheritdoc}
     */
    public function isAttributeStatic($attribute)
    {
        return $this->_getSubject()->isAttributeStatic($attribute);
    }

    /**
     * {@inheritdoc}
     */
    public function setNewIncrementId(\Magento\Framework\DataObject $object)
    {
        return $this->_getSubject()->setNewIncrementId($object);
    }

    /**
     * {@inheritdoc}
     */
    public function checkAttributeUniqueValue(\Magento\Eav\Model\Entity\Attribute\AbstractAttribute $attribute, $object)
    {
        return $this->_getSubject()->checkAttributeUniqueValue($attribute, $object);
    }

    /**
     * {@inheritdoc}
     */
    public function saveAttribute(\Magento\Framework\DataObject $object, $attributeCode)
    {
        return $this->_getSubject()->saveAttribute($object, $attributeCode);
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultAttributes()
    {
        return $this->_getSubject()->getDefaultAttributes();
    }

    /**
     * {@inheritdoc}
     */
    public function afterLoad(\Magento\Framework\DataObject $object)
    {
        return $this->_getSubject()->afterLoad($object);
    }

    /**
     * {@inheritdoc}
     */
    public function beforeSave(\Magento\Framework\DataObject $object)
    {
        return $this->_getSubject()->beforeSave($object);
    }

    /**
     * {@inheritdoc}
     */
    public function afterSave(\Magento\Framework\DataObject $object)
    {
        return $this->_getSubject()->afterSave($object);
    }

    /**
     * {@inheritdoc}
     */
    public function beforeDelete(\Magento\Framework\DataObject $object)
    {
        return $this->_getSubject()->beforeDelete($object);
    }

    /**
     * {@inheritdoc}
     */
    public function afterDelete(\Magento\Framework\DataObject $object)
    {
        return $this->_getSubject()->afterDelete($object);
    }

    /**
     * {@inheritdoc}
     */
    public function beginTransaction()
    {
        return $this->_getSubject()->beginTransaction();
    }

    /**
     * {@inheritdoc}
     */
    public function addCommitCallback($callback)
    {
        return $this->_getSubject()->addCommitCallback($callback);
    }

    /**
     * {@inheritdoc}
     */
    public function commit()
    {
        return $this->_getSubject()->commit();
    }

    /**
     * {@inheritdoc}
     */
    public function rollBack()
    {
        return $this->_getSubject()->rollBack();
    }

    /**
     * {@inheritdoc}
     */
    public function getValidationRulesBeforeSave()
    {
        return $this->_getSubject()->getValidationRulesBeforeSave();
    }
}
