<?php
namespace Candela\Blog\Api\CategoryRepositoryInterface;

/**
 * Proxy class for @see \Candela\Blog\Api\CategoryRepositoryInterface
 */
class Proxy implements \Candela\Blog\Api\CategoryRepositoryInterface, \Magento\Framework\ObjectManager\NoninterceptableInterface
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
     * @var \Candela\Blog\Api\CategoryRepositoryInterface
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Candela\\Blog\\Api\\CategoryRepositoryInterface', $shared = true)
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
     * @return \Candela\Blog\Api\CategoryRepositoryInterface
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
    public function save(\Candela\Blog\Api\Data\CategoryInterface $category) : \Candela\Blog\Api\Data\CategoryInterface
    {
        return $this->_getSubject()->save($category);
    }

    /**
     * {@inheritdoc}
     */
    public function getById(int $categoryId) : \Candela\Blog\Api\Data\CategoryInterface
    {
        return $this->_getSubject()->getById($categoryId);
    }

    /**
     * {@inheritdoc}
     */
    public function getByUrlKey(?string $urlKey) : \Candela\Blog\Api\Data\CategoryInterface
    {
        return $this->_getSubject()->getByUrlKey($urlKey);
    }

    /**
     * {@inheritdoc}
     */
    public function getByUrlKeyAndStoreId(?string $urlKey, ?int $storeId = 0) : \Candela\Blog\Api\Data\CategoryInterface
    {
        return $this->_getSubject()->getByUrlKeyAndStoreId($urlKey, $storeId);
    }

    /**
     * {@inheritdoc}
     */
    public function getCategory() : \Candela\Blog\Api\Data\CategoryInterface
    {
        return $this->_getSubject()->getCategory();
    }

    /**
     * {@inheritdoc}
     */
    public function delete(\Candela\Blog\Api\Data\CategoryInterface $category) : bool
    {
        return $this->_getSubject()->delete($category);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteById(int $categoryId) : bool
    {
        return $this->_getSubject()->deleteById($categoryId);
    }

    /**
     * {@inheritdoc}
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria) : \Magento\Framework\Api\SearchResultsInterface
    {
        return $this->_getSubject()->getList($searchCriteria);
    }

    /**
     * {@inheritdoc}
     */
    public function getAllCategories() : array
    {
        return $this->_getSubject()->getAllCategories();
    }

    /**
     * {@inheritdoc}
     */
    public function getStores(int $categoryId) : array
    {
        return $this->_getSubject()->getStores($categoryId);
    }

    /**
     * {@inheritdoc}
     */
    public function getCategoriesByPost(int $postId) : \Candela\Blog\Model\ResourceModel\Categories\Collection
    {
        return $this->_getSubject()->getCategoriesByPost($postId);
    }

    /**
     * {@inheritdoc}
     */
    public function getActiveCategories(?int $storeId = null) : \Candela\Blog\Model\ResourceModel\Categories\Collection
    {
        return $this->_getSubject()->getActiveCategories($storeId);
    }

    /**
     * {@inheritdoc}
     */
    public function getCategoriesByIds(array $categoryIds = []) : \Candela\Blog\Model\ResourceModel\Categories\Collection
    {
        return $this->_getSubject()->getCategoriesByIds($categoryIds);
    }

    /**
     * {@inheritdoc}
     */
    public function getChildrenCategories(int $parentId, int $limit = 0, ?int $storeId = null) : \Candela\Blog\Model\ResourceModel\Categories\Collection
    {
        return $this->_getSubject()->getChildrenCategories($parentId, $limit, $storeId);
    }

    /**
     * {@inheritdoc}
     */
    public function getByIdAndStore(?int $categoryId, ?int $storeId = 0, bool $isAddDefaultStore = true) : \Candela\Blog\Api\Data\CategoryInterface
    {
        return $this->_getSubject()->getByIdAndStore($categoryId, $storeId, $isAddDefaultStore);
    }
}
