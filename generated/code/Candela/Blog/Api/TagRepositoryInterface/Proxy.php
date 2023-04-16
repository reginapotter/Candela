<?php
namespace Candela\Blog\Api\TagRepositoryInterface;

/**
 * Proxy class for @see \Candela\Blog\Api\TagRepositoryInterface
 */
class Proxy implements \Candela\Blog\Api\TagRepositoryInterface, \Magento\Framework\ObjectManager\NoninterceptableInterface
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
     * @var \Candela\Blog\Api\TagRepositoryInterface
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Candela\\Blog\\Api\\TagRepositoryInterface', $shared = true)
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
     * @return \Candela\Blog\Api\TagRepositoryInterface
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
    public function save(\Candela\Blog\Api\Data\TagInterface $tag) : \Candela\Blog\Api\Data\TagInterface
    {
        return $this->_getSubject()->save($tag);
    }

    /**
     * {@inheritdoc}
     */
    public function getById(int $tagId) : \Candela\Blog\Api\Data\TagInterface
    {
        return $this->_getSubject()->getById($tagId);
    }

    /**
     * {@inheritdoc}
     */
    public function getByUrlKey(?string $urlKey) : \Candela\Blog\Api\Data\TagInterface
    {
        return $this->_getSubject()->getByUrlKey($urlKey);
    }

    /**
     * {@inheritdoc}
     */
    public function getByUrlKeyAndStoreId(?string $urlKey, ?int $storeId = 0) : \Candela\Blog\Api\Data\TagInterface
    {
        return $this->_getSubject()->getByUrlKeyAndStoreId($urlKey, $storeId);
    }

    /**
     * {@inheritdoc}
     */
    public function delete(\Candela\Blog\Api\Data\TagInterface $tag) : bool
    {
        return $this->_getSubject()->delete($tag);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteById(int $tagId) : bool
    {
        return $this->_getSubject()->deleteById($tagId);
    }

    /**
     * {@inheritdoc}
     */
    public function getList(array $tags) : \Candela\Blog\Model\ResourceModel\Tag\Collection
    {
        return $this->_getSubject()->getList($tags);
    }

    /**
     * {@inheritdoc}
     */
    public function getTagModel() : \Candela\Blog\Api\Data\TagInterface
    {
        return $this->_getSubject()->getTagModel();
    }

    /**
     * {@inheritdoc}
     */
    public function getTagCollection() : \Candela\Blog\Model\ResourceModel\Tag\Collection
    {
        return $this->_getSubject()->getTagCollection();
    }

    /**
     * {@inheritdoc}
     */
    public function getTagsByPost(int $postId, ?int $storeId) : \Candela\Blog\Model\ResourceModel\Tag\Collection
    {
        return $this->_getSubject()->getTagsByPost($postId, $storeId);
    }

    /**
     * {@inheritdoc}
     */
    public function getTagsByIds(array $tagsIds = []) : \Candela\Blog\Model\ResourceModel\Tag\Collection
    {
        return $this->_getSubject()->getTagsByIds($tagsIds);
    }

    /**
     * {@inheritdoc}
     */
    public function getActiveTags(?int $storeId = null) : \Candela\Blog\Model\ResourceModel\Tag\Collection
    {
        return $this->_getSubject()->getActiveTags($storeId);
    }

    /**
     * {@inheritdoc}
     */
    public function getAllTags() : array
    {
        return $this->_getSubject()->getAllTags();
    }

    /**
     * {@inheritdoc}
     */
    public function getByIdAndStore(?int $tagId, ?int $storeId = 0, bool $isAddDefaultStore = true) : \Candela\Blog\Api\Data\TagInterface
    {
        return $this->_getSubject()->getByIdAndStore($tagId, $storeId, $isAddDefaultStore);
    }
}
