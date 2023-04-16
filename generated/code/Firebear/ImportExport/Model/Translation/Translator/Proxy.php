<?php
namespace Firebear\ImportExport\Model\Translation\Translator;

/**
 * Proxy class for @see \Firebear\ImportExport\Model\Translation\Translator
 */
class Proxy extends \Firebear\ImportExport\Model\Translation\Translator implements \Magento\Framework\ObjectManager\NoninterceptableInterface
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
     * @var \Firebear\ImportExport\Model\Translation\Translator
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Firebear\\ImportExport\\Model\\Translation\\Translator', $shared = true)
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
     * @return \Firebear\ImportExport\Model\Translation\Translator
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
    public function init(array $parameters)
    {
        return $this->_getSubject()->init($parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function isTranslatorSet()
    {
        return $this->_getSubject()->isTranslatorSet();
    }

    /**
     * {@inheritdoc}
     */
    public function translateAttributeValue(string $attrValue, string $translateAttribute, int $storeId)
    {
        return $this->_getSubject()->translateAttributeValue($attrValue, $translateAttribute, $storeId);
    }

    /**
     * {@inheritdoc}
     */
    public function translate($text = null, $returnOrigText = true)
    {
        return $this->_getSubject()->translate($text, $returnOrigText);
    }

    /**
     * {@inheritdoc}
     */
    public function setSerializer($serializer)
    {
        return $this->_getSubject()->setSerializer($serializer);
    }

    /**
     * {@inheritdoc}
     */
    public function getSerializer()
    {
        return $this->_getSubject()->getSerializer();
    }

    /**
     * {@inheritdoc}
     */
    public function phpSerialize($data)
    {
        return $this->_getSubject()->phpSerialize($data);
    }

    /**
     * {@inheritdoc}
     */
    public function phpUnserialize($data)
    {
        return $this->_getSubject()->phpUnserialize($data);
    }

    /**
     * {@inheritdoc}
     */
    public function getPhpSerializer()
    {
        return $this->_getSubject()->getPhpSerializer();
    }

    /**
     * {@inheritdoc}
     */
    public function setLogger($logger)
    {
        return $this->_getSubject()->setLogger($logger);
    }

    /**
     * {@inheritdoc}
     */
    public function getLogger()
    {
        return $this->_getSubject()->getLogger();
    }

    /**
     * {@inheritdoc}
     */
    public function addLogWriteln($debugData, ?\Symfony\Component\Console\Output\OutputInterface $output = null, $type = null)
    {
        return $this->_getSubject()->addLogWriteln($debugData, $output, $type);
    }

    /**
     * {@inheritdoc}
     */
    public function setErrorMessages()
    {
        return $this->_getSubject()->setErrorMessages();
    }

    /**
     * {@inheritdoc}
     */
    public function setOutput($output)
    {
        return $this->_getSubject()->setOutput($output);
    }

    /**
     * {@inheritdoc}
     */
    public function getOutput()
    {
        return $this->_getSubject()->getOutput();
    }

    /**
     * {@inheritdoc}
     */
    public function customChangeData($data)
    {
        return $this->_getSubject()->customChangeData($data);
    }

    /**
     * {@inheritdoc}
     */
    public function customBunchesData($data)
    {
        return $this->_getSubject()->customBunchesData($data);
    }
}
