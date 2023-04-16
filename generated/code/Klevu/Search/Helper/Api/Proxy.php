<?php
namespace Klevu\Search\Helper\Api;

/**
 * Proxy class for @see \Klevu\Search\Helper\Api
 */
class Proxy extends \Klevu\Search\Helper\Api implements \Magento\Framework\ObjectManager\NoninterceptableInterface
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
     * @var \Klevu\Search\Helper\Api
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Klevu\\Search\\Helper\\Api', $shared = true)
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
     * @return \Klevu\Search\Helper\Api
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
    public function createUser($email, $password, $userPlan, $partnerAccount, $url, $merchantEmail, $contactNo, $store = null)
    {
        return $this->_getSubject()->createUser($email, $password, $userPlan, $partnerAccount, $url, $merchantEmail, $contactNo, $store);
    }

    /**
     * {@inheritdoc}
     */
    public function getUser($email, $password, $store = null)
    {
        return $this->_getSubject()->getUser($email, $password, $store);
    }

    /**
     * {@inheritdoc}
     */
    public function checkUserDetail($email, $store = null)
    {
        return $this->_getSubject()->checkUserDetail($email, $store);
    }

    /**
     * {@inheritdoc}
     */
    public function createWebstore($customer_id, $store)
    {
        return $this->_getSubject()->createWebstore($customer_id, $store);
    }

    /**
     * {@inheritdoc}
     */
    public function getTimezoneOptions()
    {
        return $this->_getSubject()->getTimezoneOptions();
    }

    /**
     * {@inheritdoc}
     */
    public function getVersion()
    {
        return $this->_getSubject()->getVersion();
    }

    /**
     * {@inheritdoc}
     */
    public function isModuleOutputEnabled($moduleName = null)
    {
        return $this->_getSubject()->isModuleOutputEnabled($moduleName);
    }
}
