<?php
namespace Magento\Bundle\Model\Product\Type;

/**
 * Proxy class for @see \Magento\Bundle\Model\Product\Type
 */
class Proxy extends \Magento\Bundle\Model\Product\Type implements \Magento\Framework\ObjectManager\NoninterceptableInterface
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
     * @var \Magento\Bundle\Model\Product\Type
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\Bundle\\Model\\Product\\Type', $shared = true)
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
     * @return \Magento\Bundle\Model\Product\Type
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
    public function getRelationInfo()
    {
        return $this->_getSubject()->getRelationInfo();
    }

    /**
     * {@inheritdoc}
     */
    public function getChildrenIds($parentId, $required = true)
    {
        return $this->_getSubject()->getChildrenIds($parentId, $required);
    }

    /**
     * {@inheritdoc}
     */
    public function getParentIdsByChild($childId)
    {
        return $this->_getSubject()->getParentIdsByChild($childId);
    }

    /**
     * {@inheritdoc}
     */
    public function getSku($product)
    {
        return $this->_getSubject()->getSku($product);
    }

    /**
     * {@inheritdoc}
     */
    public function getWeight($product)
    {
        return $this->_getSubject()->getWeight($product);
    }

    /**
     * {@inheritdoc}
     */
    public function isVirtual($product)
    {
        return $this->_getSubject()->isVirtual($product);
    }

    /**
     * {@inheritdoc}
     */
    public function beforeSave($product)
    {
        return $this->_getSubject()->beforeSave($product);
    }

    /**
     * {@inheritdoc}
     */
    public function getOptions($product)
    {
        return $this->_getSubject()->getOptions($product);
    }

    /**
     * {@inheritdoc}
     */
    public function getOptionsIds($product)
    {
        return $this->_getSubject()->getOptionsIds($product);
    }

    /**
     * {@inheritdoc}
     */
    public function getOptionsCollection($product)
    {
        return $this->_getSubject()->getOptionsCollection($product);
    }

    /**
     * {@inheritdoc}
     */
    public function getSelectionsCollection($optionIds, $product)
    {
        return $this->_getSubject()->getSelectionsCollection($optionIds, $product);
    }

    /**
     * {@inheritdoc}
     */
    public function updateQtyOption($options, \Magento\Framework\DataObject $option, $value, $product)
    {
        return $this->_getSubject()->updateQtyOption($options, $option, $value, $product);
    }

    /**
     * {@inheritdoc}
     */
    public function prepareQuoteItemQty($qty, $product)
    {
        return $this->_getSubject()->prepareQuoteItemQty($qty, $product);
    }

    /**
     * {@inheritdoc}
     */
    public function isSalable($product)
    {
        return $this->_getSubject()->isSalable($product);
    }

    /**
     * {@inheritdoc}
     */
    public function getSpecifyOptionMessage()
    {
        return $this->_getSubject()->getSpecifyOptionMessage();
    }

    /**
     * {@inheritdoc}
     */
    public function getSelectionsByIds($selectionIds, $product)
    {
        return $this->_getSubject()->getSelectionsByIds($selectionIds, $product);
    }

    /**
     * {@inheritdoc}
     */
    public function getOptionsByIds($optionIds, $product)
    {
        return $this->_getSubject()->getOptionsByIds($optionIds, $product);
    }

    /**
     * {@inheritdoc}
     */
    public function getOrderOptions($product)
    {
        return $this->_getSubject()->getOrderOptions($product);
    }

    /**
     * {@inheritdoc}
     */
    public function shakeSelections($firstItem, $secondItem)
    {
        return $this->_getSubject()->shakeSelections($firstItem, $secondItem);
    }

    /**
     * {@inheritdoc}
     */
    public function hasOptions($product)
    {
        return $this->_getSubject()->hasOptions($product);
    }

    /**
     * {@inheritdoc}
     */
    public function getForceChildItemQtyChanges($product)
    {
        return $this->_getSubject()->getForceChildItemQtyChanges($product);
    }

    /**
     * {@inheritdoc}
     */
    public function getSearchableData($product)
    {
        return $this->_getSubject()->getSearchableData($product);
    }

    /**
     * {@inheritdoc}
     */
    public function checkProductBuyState($product)
    {
        return $this->_getSubject()->checkProductBuyState($product);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductsToPurchaseByReqGroups($product)
    {
        return $this->_getSubject()->getProductsToPurchaseByReqGroups($product);
    }

    /**
     * {@inheritdoc}
     */
    public function processBuyRequest($product, $buyRequest)
    {
        return $this->_getSubject()->processBuyRequest($product, $buyRequest);
    }

    /**
     * {@inheritdoc}
     */
    public function canConfigure($product)
    {
        return $this->_getSubject()->canConfigure($product);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteTypeSpecificData(\Magento\Catalog\Model\Product $product)
    {
        return $this->_getSubject()->deleteTypeSpecificData($product);
    }

    /**
     * {@inheritdoc}
     */
    public function getIdentities(\Magento\Catalog\Model\Product $product)
    {
        return $this->_getSubject()->getIdentities($product);
    }

    /**
     * {@inheritdoc}
     */
    public function setTypeId($typeId)
    {
        return $this->_getSubject()->setTypeId($typeId);
    }

    /**
     * {@inheritdoc}
     */
    public function getSetAttributes($product)
    {
        return $this->_getSubject()->getSetAttributes($product);
    }

    /**
     * {@inheritdoc}
     */
    public function attributesCompare($attributeOne, $attributeTwo)
    {
        return $this->_getSubject()->attributesCompare($attributeOne, $attributeTwo);
    }

    /**
     * {@inheritdoc}
     */
    public function getEditableAttributes($product)
    {
        return $this->_getSubject()->getEditableAttributes($product);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeById($attributeId, $product)
    {
        return $this->_getSubject()->getAttributeById($attributeId, $product);
    }

    /**
     * {@inheritdoc}
     */
    public function processConfiguration(\Magento\Framework\DataObject $buyRequest, $product, $processMode = 'lite')
    {
        return $this->_getSubject()->processConfiguration($buyRequest, $product, $processMode);
    }

    /**
     * {@inheritdoc}
     */
    public function prepareForCartAdvanced(\Magento\Framework\DataObject $buyRequest, $product, $processMode = null)
    {
        return $this->_getSubject()->prepareForCartAdvanced($buyRequest, $product, $processMode);
    }

    /**
     * {@inheritdoc}
     */
    public function prepareForCart(\Magento\Framework\DataObject $buyRequest, $product)
    {
        return $this->_getSubject()->prepareForCart($buyRequest, $product);
    }

    /**
     * {@inheritdoc}
     */
    public function processFileQueue()
    {
        return $this->_getSubject()->processFileQueue();
    }

    /**
     * {@inheritdoc}
     */
    public function addFileQueue($queueOptions)
    {
        return $this->_getSubject()->addFileQueue($queueOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function save($product)
    {
        return $this->_getSubject()->save($product);
    }

    /**
     * {@inheritdoc}
     */
    public function isComposite($product)
    {
        return $this->_getSubject()->isComposite($product);
    }

    /**
     * {@inheritdoc}
     */
    public function canUseQtyDecimals()
    {
        return $this->_getSubject()->canUseQtyDecimals();
    }

    /**
     * {@inheritdoc}
     */
    public function getOptionSku($product, $sku = '')
    {
        return $this->_getSubject()->getOptionSku($product, $sku);
    }

    /**
     * {@inheritdoc}
     */
    public function hasRequiredOptions($product)
    {
        return $this->_getSubject()->hasRequiredOptions($product);
    }

    /**
     * {@inheritdoc}
     */
    public function getStoreFilter($product)
    {
        return $this->_getSubject()->getStoreFilter($product);
    }

    /**
     * {@inheritdoc}
     */
    public function setStoreFilter($store, $product)
    {
        return $this->_getSubject()->setStoreFilter($store, $product);
    }

    /**
     * {@inheritdoc}
     */
    public function assignProductToOption($optionProduct, $option, $product)
    {
        return $this->_getSubject()->assignProductToOption($optionProduct, $option, $product);
    }

    /**
     * {@inheritdoc}
     */
    public function setConfig($config)
    {
        return $this->_getSubject()->setConfig($config);
    }

    /**
     * {@inheritdoc}
     */
    public function checkProductConfiguration($product, $buyRequest)
    {
        return $this->_getSubject()->checkProductConfiguration($product, $buyRequest);
    }

    /**
     * {@inheritdoc}
     */
    public function hasWeight()
    {
        return $this->_getSubject()->hasWeight();
    }

    /**
     * {@inheritdoc}
     */
    public function setImageFromChildProduct(\Magento\Catalog\Model\Product $product)
    {
        return $this->_getSubject()->setImageFromChildProduct($product);
    }

    /**
     * {@inheritdoc}
     */
    public function getAssociatedProducts($product)
    {
        return $this->_getSubject()->getAssociatedProducts($product);
    }

    /**
     * {@inheritdoc}
     */
    public function isPossibleBuyFromList($product)
    {
        return $this->_getSubject()->isPossibleBuyFromList($product);
    }
}
