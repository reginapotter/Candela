<?php
namespace Magento\Framework\HTTP\Client\Curl;

/**
 * Proxy class for @see \Magento\Framework\HTTP\Client\Curl
 */
class Proxy extends \Magento\Framework\HTTP\Client\Curl implements \Magento\Framework\ObjectManager\NoninterceptableInterface
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
     * @var \Magento\Framework\HTTP\Client\Curl
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\Framework\\HTTP\\Client\\Curl', $shared = true)
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
     * @return \Magento\Framework\HTTP\Client\Curl
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
    public function setTimeout($value)
    {
        return $this->_getSubject()->setTimeout($value);
    }

    /**
     * {@inheritdoc}
     */
    public function setHeaders($headers)
    {
        return $this->_getSubject()->setHeaders($headers);
    }

    /**
     * {@inheritdoc}
     */
    public function addHeader($name, $value)
    {
        return $this->_getSubject()->addHeader($name, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function removeHeader($name)
    {
        return $this->_getSubject()->removeHeader($name);
    }

    /**
     * {@inheritdoc}
     */
    public function setCredentials($login, $pass)
    {
        return $this->_getSubject()->setCredentials($login, $pass);
    }

    /**
     * {@inheritdoc}
     */
    public function addCookie($name, $value)
    {
        return $this->_getSubject()->addCookie($name, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function removeCookie($name)
    {
        return $this->_getSubject()->removeCookie($name);
    }

    /**
     * {@inheritdoc}
     */
    public function setCookies($cookies)
    {
        return $this->_getSubject()->setCookies($cookies);
    }

    /**
     * {@inheritdoc}
     */
    public function removeCookies()
    {
        return $this->_getSubject()->removeCookies();
    }

    /**
     * {@inheritdoc}
     */
    public function get($uri)
    {
        return $this->_getSubject()->get($uri);
    }

    /**
     * {@inheritdoc}
     */
    public function post($uri, $params)
    {
        return $this->_getSubject()->post($uri, $params);
    }

    /**
     * {@inheritdoc}
     */
    public function getHeaders()
    {
        return $this->_getSubject()->getHeaders();
    }

    /**
     * {@inheritdoc}
     */
    public function getBody()
    {
        return $this->_getSubject()->getBody();
    }

    /**
     * {@inheritdoc}
     */
    public function getCookies()
    {
        return $this->_getSubject()->getCookies();
    }

    /**
     * {@inheritdoc}
     */
    public function getCookiesFull()
    {
        return $this->_getSubject()->getCookiesFull();
    }

    /**
     * {@inheritdoc}
     */
    public function getStatus()
    {
        return $this->_getSubject()->getStatus();
    }

    /**
     * {@inheritdoc}
     */
    public function doError($string)
    {
        return $this->_getSubject()->doError($string);
    }

    /**
     * {@inheritdoc}
     */
    public function setOptions($arr)
    {
        return $this->_getSubject()->setOptions($arr);
    }

    /**
     * {@inheritdoc}
     */
    public function setOption($name, $value)
    {
        return $this->_getSubject()->setOption($name, $value);
    }
}
