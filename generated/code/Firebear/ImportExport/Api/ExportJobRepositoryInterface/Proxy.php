<?php
namespace Firebear\ImportExport\Api\ExportJobRepositoryInterface;

/**
 * Proxy class for @see \Firebear\ImportExport\Api\ExportJobRepositoryInterface
 */
class Proxy implements \Firebear\ImportExport\Api\ExportJobRepositoryInterface, \Magento\Framework\ObjectManager\NoninterceptableInterface
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
     * @var \Firebear\ImportExport\Api\ExportJobRepositoryInterface
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Firebear\\ImportExport\\Api\\ExportJobRepositoryInterface', $shared = true)
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
     * @return \Firebear\ImportExport\Api\ExportJobRepositoryInterface
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
    public function save(\Firebear\ImportExport\Api\Data\ExportInterface $job)
    {
        return $this->_getSubject()->save($job);
    }

    /**
     * {@inheritdoc}
     */
    public function getById($jobId)
    {
        return $this->_getSubject()->getById($jobId);
    }

    /**
     * {@inheritdoc}
     */
    public function delete(\Firebear\ImportExport\Api\Data\ExportInterface $job)
    {
        return $this->_getSubject()->delete($job);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteById($jobId)
    {
        return $this->_getSubject()->deleteById($jobId);
    }
}
