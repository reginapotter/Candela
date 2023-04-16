<?php
namespace Candela\Blog\Model\ConfigProvider;

/**
 * Proxy class for @see \Candela\Blog\Model\ConfigProvider
 */
class Proxy extends \Candela\Blog\Model\ConfigProvider implements \Magento\Framework\ObjectManager\NoninterceptableInterface
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
     * @var \Candela\Blog\Model\ConfigProvider
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Candela\\Blog\\Model\\ConfigProvider', $shared = true)
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
     * @return \Candela\Blog\Model\ConfigProvider
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
    public function isShowSummaryBlock() : bool
    {
        return $this->_getSubject()->isShowSummaryBlock();
    }

    /**
     * {@inheritdoc}
     */
    public function getSummaryBlockId() : int
    {
        return $this->_getSubject()->getSummaryBlockId();
    }

    /**
     * {@inheritdoc}
     */
    public function isAskEmail($scopeCode = null)
    {
        return $this->_getSubject()->isAskEmail($scopeCode);
    }

    /**
     * {@inheritdoc}
     */
    public function isAskName($scopeCode = null)
    {
        return $this->_getSubject()->isAskName($scopeCode);
    }

    /**
     * {@inheritdoc}
     */
    public function isShowGdpr($scopeCode = null)
    {
        return $this->_getSubject()->isShowGdpr($scopeCode);
    }

    /**
     * {@inheritdoc}
     */
    public function getGdprText($scopeCode = null)
    {
        return $this->_getSubject()->getGdprText($scopeCode);
    }

    /**
     * {@inheritdoc}
     */
    public function isAmpEnabled(?int $storeId = null) : bool
    {
        return $this->_getSubject()->isAmpEnabled($storeId);
    }

    /**
     * {@inheritdoc}
     */
    public function getImageQuality() : int
    {
        return $this->_getSubject()->getImageQuality();
    }

    /**
     * {@inheritdoc}
     */
    public function getBlogPostfix(?\Magento\Store\Api\Data\StoreInterface $store = null) : string
    {
        return $this->_getSubject()->getBlogPostfix($store);
    }

    /**
     * {@inheritdoc}
     */
    public function getSeoRoute(?\Magento\Store\Api\Data\StoreInterface $store = null) : string
    {
        return $this->_getSubject()->getSeoRoute($store);
    }

    /**
     * {@inheritdoc}
     */
    public function getTitleSuffix() : string
    {
        return $this->_getSubject()->getTitleSuffix();
    }

    /**
     * {@inheritdoc}
     */
    public function getTitlePrefix() : string
    {
        return $this->_getSubject()->getTitlePrefix();
    }

    /**
     * {@inheritdoc}
     */
    public function getMetaTitle() : string
    {
        return $this->_getSubject()->getMetaTitle();
    }

    /**
     * {@inheritdoc}
     */
    public function getMetaTags() : string
    {
        return $this->_getSubject()->getMetaTags();
    }

    /**
     * {@inheritdoc}
     */
    public function getMetaDescription() : string
    {
        return $this->_getSubject()->getMetaDescription();
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle() : string
    {
        return $this->_getSubject()->getTitle();
    }

    /**
     * {@inheritdoc}
     */
    public function isNotifyAboutReplies() : bool
    {
        return $this->_getSubject()->isNotifyAboutReplies();
    }

    /**
     * {@inheritdoc}
     */
    public function notifyAboutRepliesSender() : ?string
    {
        return $this->_getSubject()->notifyAboutRepliesSender();
    }

    /**
     * {@inheritdoc}
     */
    public function notifyAboutRepliesTemplate() : ?string
    {
        return $this->_getSubject()->notifyAboutRepliesTemplate();
    }

    /**
     * {@inheritdoc}
     */
    public function isShowPostPageBlockOnProductPage() : bool
    {
        return $this->_getSubject()->isShowPostPageBlockOnProductPage();
    }

    /**
     * {@inheritdoc}
     */
    public function getPostPageBlockTitleOnProductPage() : string
    {
        return $this->_getSubject()->getPostPageBlockTitleOnProductPage();
    }

    /**
     * {@inheritdoc}
     */
    public function isShowPostPageBlockOnPostPage() : bool
    {
        return $this->_getSubject()->isShowPostPageBlockOnPostPage();
    }

    /**
     * {@inheritdoc}
     */
    public function getPostPageBlockTitleOnPostPage() : string
    {
        return $this->_getSubject()->getPostPageBlockTitleOnPostPage();
    }

    /**
     * {@inheritdoc}
     */
    public function getCategoryLimitOnPost() : int
    {
        return $this->_getSubject()->getCategoryLimitOnPost();
    }

    /**
     * {@inheritdoc}
     */
    public function getIconColorClass() : string
    {
        return $this->_getSubject()->getIconColorClass();
    }

    /**
     * {@inheritdoc}
     */
    public function isShowAuthorInfo() : bool
    {
        return $this->_getSubject()->isShowAuthorInfo();
    }

    /**
     * {@inheritdoc}
     */
    public function getLayoutConfigByIdentifier(string $identifier, ?int $storeId = null) : string
    {
        return $this->_getSubject()->getLayoutConfigByIdentifier($identifier, $storeId);
    }

    /**
     * {@inheritdoc}
     */
    public function isPreviousNextNavigation(?int $storeId = null) : bool
    {
        return $this->_getSubject()->isPreviousNextNavigation($storeId);
    }

    /**
     * {@inheritdoc}
     */
    public function getDateFormat() : string
    {
        return $this->_getSubject()->getDateFormat();
    }

    /**
     * {@inheritdoc}
     */
    public function getEditedAtDateFormat() : string
    {
        return $this->_getSubject()->getEditedAtDateFormat();
    }

    /**
     * {@inheritdoc}
     */
    public function isShowEditedAt() : bool
    {
        return $this->_getSubject()->isShowEditedAt();
    }

    /**
     * {@inheritdoc}
     */
    public function getFontType(?int $storeId = null) : string
    {
        return $this->_getSubject()->getFontType($storeId);
    }

    /**
     * {@inheritdoc}
     */
    public function getGoogleFontSetting() : string
    {
        return $this->_getSubject()->getGoogleFontSetting();
    }

    /**
     * {@inheritdoc}
     */
    public function getGoogleFontStyle() : string
    {
        return $this->_getSubject()->getGoogleFontStyle();
    }

    /**
     * {@inheritdoc}
     */
    public function getMetaRobots() : string
    {
        return $this->_getSubject()->getMetaRobots();
    }

    /**
     * {@inheritdoc}
     */
    public function getMinCharacterLength() : int
    {
        return $this->_getSubject()->getMinCharacterLength();
    }

    /**
     * {@inheritdoc}
     */
    public function getItemsPerEntity() : int
    {
        return $this->_getSubject()->getItemsPerEntity();
    }

    /**
     * {@inheritdoc}
     */
    public function isDisplayReadTime() : bool
    {
        return $this->_getSubject()->isDisplayReadTime();
    }

    /**
     * {@inheritdoc}
     */
    public function clean()
    {
        return $this->_getSubject()->clean();
    }
}
