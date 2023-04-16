<?php
namespace Magento\Framework\Stdlib\DateTime\TimezoneInterface;

/**
 * Proxy class for @see \Magento\Framework\Stdlib\DateTime\TimezoneInterface
 */
class Proxy implements \Magento\Framework\Stdlib\DateTime\TimezoneInterface, \Magento\Framework\ObjectManager\NoninterceptableInterface
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
     * @var \Magento\Framework\Stdlib\DateTime\TimezoneInterface
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\Framework\\Stdlib\\DateTime\\TimezoneInterface', $shared = true)
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
     * @return \Magento\Framework\Stdlib\DateTime\TimezoneInterface
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
    public function getDefaultTimezonePath()
    {
        return $this->_getSubject()->getDefaultTimezonePath();
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultTimezone()
    {
        return $this->_getSubject()->getDefaultTimezone();
    }

    /**
     * {@inheritdoc}
     */
    public function getDateFormat($type = 3)
    {
        return $this->_getSubject()->getDateFormat($type);
    }

    /**
     * {@inheritdoc}
     */
    public function getDateFormatWithLongYear()
    {
        return $this->_getSubject()->getDateFormatWithLongYear();
    }

    /**
     * {@inheritdoc}
     */
    public function getTimeFormat($type = null)
    {
        return $this->_getSubject()->getTimeFormat($type);
    }

    /**
     * {@inheritdoc}
     */
    public function getDateTimeFormat($type)
    {
        return $this->_getSubject()->getDateTimeFormat($type);
    }

    /**
     * {@inheritdoc}
     */
    public function date($date = null, $locale = null, $useTimezone = true, $includeTime = true)
    {
        return $this->_getSubject()->date($date, $locale, $useTimezone, $includeTime);
    }

    /**
     * {@inheritdoc}
     */
    public function scopeDate($scope = null, $date = null, $includeTime = false)
    {
        return $this->_getSubject()->scopeDate($scope, $date, $includeTime);
    }

    /**
     * {@inheritdoc}
     */
    public function scopeTimeStamp($scope = null)
    {
        return $this->_getSubject()->scopeTimeStamp($scope);
    }

    /**
     * {@inheritdoc}
     */
    public function formatDate($date = null, $format = 3, $showTime = false)
    {
        return $this->_getSubject()->formatDate($date, $format, $showTime);
    }

    /**
     * {@inheritdoc}
     */
    public function getConfigTimezone($scopeType = null, $scopeCode = null)
    {
        return $this->_getSubject()->getConfigTimezone($scopeType, $scopeCode);
    }

    /**
     * {@inheritdoc}
     */
    public function isScopeDateInInterval($scope, $dateFrom = null, $dateTo = null)
    {
        return $this->_getSubject()->isScopeDateInInterval($scope, $dateFrom, $dateTo);
    }

    /**
     * {@inheritdoc}
     */
    public function formatDateTime($date, $dateType = 3, $timeType = 3, $locale = null, $timezone = null, $pattern = null)
    {
        return $this->_getSubject()->formatDateTime($date, $dateType, $timeType, $locale, $timezone, $pattern);
    }

    /**
     * {@inheritdoc}
     */
    public function convertConfigTimeToUtc($date, $format = 'Y-m-d H:i:s')
    {
        return $this->_getSubject()->convertConfigTimeToUtc($date, $format);
    }
}
