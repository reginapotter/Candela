<?php
namespace Firebear\ImportExport\Model\ResourceModel\Import\CustomerComposite;

/**
 * Factory class for @see \Firebear\ImportExport\Model\ResourceModel\Import\CustomerComposite\Data
 */
class DataFactory
{
    /**
     * Object Manager instance
     *
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager = null;

    /**
     * Instance name to create
     *
     * @var string
     */
    protected $_instanceName = null;

    /**
     * Factory constructor
     *
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     * @param string $instanceName
     */
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Firebear\\ImportExport\\Model\\ResourceModel\\Import\\CustomerComposite\\Data')
    {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
    }

    /**
     * Create class instance with specified parameters
     *
     * @param array $data
     * @return \Firebear\ImportExport\Model\ResourceModel\Import\CustomerComposite\Data
     */
    public function create(array $data = [])
    {
        return $this->_objectManager->create($this->_instanceName, $data);
    }
}
