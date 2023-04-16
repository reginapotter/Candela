<?php
namespace Candela\Blog\Api\AuthorRepositoryInterface;

/**
 * Proxy class for @see \Candela\Blog\Api\AuthorRepositoryInterface
 */
class Proxy implements \Candela\Blog\Api\AuthorRepositoryInterface, \Magento\Framework\ObjectManager\NoninterceptableInterface
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
     * @var \Candela\Blog\Api\AuthorRepositoryInterface
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Candela\\Blog\\Api\\AuthorRepositoryInterface', $shared = true)
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
     * @return \Candela\Blog\Api\AuthorRepositoryInterface
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
    public function save(\Candela\Blog\Api\Data\AuthorInterface $author) : \Candela\Blog\Api\Data\AuthorInterface
    {
        return $this->_getSubject()->save($author);
    }

    /**
     * {@inheritdoc}
     */
    public function getById(int $authorId) : \Candela\Blog\Api\Data\AuthorInterface
    {
        return $this->_getSubject()->getById($authorId);
    }

    /**
     * {@inheritdoc}
     */
    public function getByUrlKey(?string $urlKey) : \Candela\Blog\Api\Data\AuthorInterface
    {
        return $this->_getSubject()->getByUrlKey($urlKey);
    }

    /**
     * {@inheritdoc}
     */
    public function getByUrlKeyAndStoreId(?string $urlKey, int $storeId = 0) : \Candela\Blog\Api\Data\AuthorInterface
    {
        return $this->_getSubject()->getByUrlKeyAndStoreId($urlKey, $storeId);
    }

    /**
     * {@inheritdoc}
     */
    public function getByName(string $name) : \Candela\Blog\Api\Data\AuthorInterface
    {
        return $this->_getSubject()->getByName($name);
    }

    /**
     * {@inheritdoc}
     */
    public function delete(\Candela\Blog\Api\Data\AuthorInterface $author) : bool
    {
        return $this->_getSubject()->delete($author);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteById(int $authorId) : bool
    {
        return $this->_getSubject()->deleteById($authorId);
    }

    /**
     * {@inheritdoc}
     */
    public function getList(array $authors) : \Candela\Blog\Model\ResourceModel\Author\Collection
    {
        return $this->_getSubject()->getList($authors);
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthorModel() : \Candela\Blog\Api\Data\AuthorInterface
    {
        return $this->_getSubject()->getAuthorModel();
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthorCollection() : \Candela\Blog\Model\ResourceModel\Author\Collection
    {
        return $this->_getSubject()->getAuthorCollection();
    }

    /**
     * {@inheritdoc}
     */
    public function createAuthor(string $name, string $facebookProfile, string $twitterProfile) : \Candela\Blog\Api\Data\AuthorInterface
    {
        return $this->_getSubject()->createAuthor($name, $facebookProfile, $twitterProfile);
    }

    /**
     * {@inheritdoc}
     */
    public function getByIdAndStore(int $authorId, ?int $storeId = 0, bool $isAddDefaultStore = true) : \Candela\Blog\Api\Data\AuthorInterface
    {
        return $this->_getSubject()->getByIdAndStore($authorId, $storeId, $isAddDefaultStore);
    }
}
