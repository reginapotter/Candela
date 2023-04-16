<?php
namespace Magento\Backend\Block\Page\RequireJs;

/**
 * Proxy class for @see \Magento\Backend\Block\Page\RequireJs
 */
class Proxy extends \Magento\Backend\Block\Page\RequireJs implements \Magento\Framework\ObjectManager\NoninterceptableInterface
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
     * @var \Magento\Backend\Block\Page\RequireJs
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\Backend\\Block\\Page\\RequireJs', $shared = true)
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
     * @return \Magento\Backend\Block\Page\RequireJs
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
    public function getFormKey()
    {
        return $this->_getSubject()->getFormKey();
    }

    /**
     * {@inheritdoc}
     */
    public function setTemplateContext($templateContext)
    {
        return $this->_getSubject()->setTemplateContext($templateContext);
    }

    /**
     * {@inheritdoc}
     */
    public function getTemplate()
    {
        return $this->_getSubject()->getTemplate();
    }

    /**
     * {@inheritdoc}
     */
    public function setTemplate($template)
    {
        return $this->_getSubject()->setTemplate($template);
    }

    /**
     * {@inheritdoc}
     */
    public function getTemplateFile($template = null)
    {
        return $this->_getSubject()->getTemplateFile($template);
    }

    /**
     * {@inheritdoc}
     */
    public function getArea()
    {
        return $this->_getSubject()->getArea();
    }

    /**
     * {@inheritdoc}
     */
    public function assign($key, $value = null)
    {
        return $this->_getSubject()->assign($key, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function fetchView($fileName)
    {
        return $this->_getSubject()->fetchView($fileName);
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseUrl()
    {
        return $this->_getSubject()->getBaseUrl();
    }

    /**
     * {@inheritdoc}
     */
    public function getObjectData(\Magento\Framework\DataObject $object, $key)
    {
        return $this->_getSubject()->getObjectData($object, $key);
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheKeyInfo()
    {
        return $this->_getSubject()->getCacheKeyInfo();
    }

    /**
     * {@inheritdoc}
     */
    public function getJsLayout()
    {
        return $this->_getSubject()->getJsLayout();
    }

    /**
     * {@inheritdoc}
     */
    public function getRequest()
    {
        return $this->_getSubject()->getRequest();
    }

    /**
     * {@inheritdoc}
     */
    public function getParentBlock()
    {
        return $this->_getSubject()->getParentBlock();
    }

    /**
     * {@inheritdoc}
     */
    public function setLayout(\Magento\Framework\View\LayoutInterface $layout)
    {
        return $this->_getSubject()->setLayout($layout);
    }

    /**
     * {@inheritdoc}
     */
    public function getLayout()
    {
        return $this->_getSubject()->getLayout();
    }

    /**
     * {@inheritdoc}
     */
    public function setNameInLayout($name)
    {
        return $this->_getSubject()->setNameInLayout($name);
    }

    /**
     * {@inheritdoc}
     */
    public function getChildNames()
    {
        return $this->_getSubject()->getChildNames();
    }

    /**
     * {@inheritdoc}
     */
    public function setAttribute($name, $value = null)
    {
        return $this->_getSubject()->setAttribute($name, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function setChild($alias, $block)
    {
        return $this->_getSubject()->setChild($alias, $block);
    }

    /**
     * {@inheritdoc}
     */
    public function addChild($alias, $block, $data = [])
    {
        return $this->_getSubject()->addChild($alias, $block, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function unsetChild($alias)
    {
        return $this->_getSubject()->unsetChild($alias);
    }

    /**
     * {@inheritdoc}
     */
    public function unsetCallChild($alias, $callback, $result, $params)
    {
        return $this->_getSubject()->unsetCallChild($alias, $callback, $result, $params);
    }

    /**
     * {@inheritdoc}
     */
    public function unsetChildren()
    {
        return $this->_getSubject()->unsetChildren();
    }

    /**
     * {@inheritdoc}
     */
    public function getChildBlock($alias)
    {
        return $this->_getSubject()->getChildBlock($alias);
    }

    /**
     * {@inheritdoc}
     */
    public function getChildHtml($alias = '', $useCache = true)
    {
        return $this->_getSubject()->getChildHtml($alias, $useCache);
    }

    /**
     * {@inheritdoc}
     */
    public function getChildChildHtml($alias, $childChildAlias = '', $useCache = true)
    {
        return $this->_getSubject()->getChildChildHtml($alias, $childChildAlias, $useCache);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockHtml($name)
    {
        return $this->_getSubject()->getBlockHtml($name);
    }

    /**
     * {@inheritdoc}
     */
    public function insert($element, $siblingName = 0, $after = true, $alias = '')
    {
        return $this->_getSubject()->insert($element, $siblingName, $after, $alias);
    }

    /**
     * {@inheritdoc}
     */
    public function append($element, $alias = '')
    {
        return $this->_getSubject()->append($element, $alias);
    }

    /**
     * {@inheritdoc}
     */
    public function getGroupChildNames($groupName)
    {
        return $this->_getSubject()->getGroupChildNames($groupName);
    }

    /**
     * {@inheritdoc}
     */
    public function getChildData($alias, $key = '')
    {
        return $this->_getSubject()->getChildData($alias, $key);
    }

    /**
     * {@inheritdoc}
     */
    public function toHtml()
    {
        return $this->_getSubject()->toHtml();
    }

    /**
     * {@inheritdoc}
     */
    public function getUiId($arg1 = null, $arg2 = null, $arg3 = null, $arg4 = null, $arg5 = null)
    {
        return $this->_getSubject()->getUiId($arg1, $arg2, $arg3, $arg4, $arg5);
    }

    /**
     * {@inheritdoc}
     */
    public function getJsId($arg1 = null, $arg2 = null, $arg3 = null, $arg4 = null, $arg5 = null)
    {
        return $this->_getSubject()->getJsId($arg1, $arg2, $arg3, $arg4, $arg5);
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl($route = '', $params = [])
    {
        return $this->_getSubject()->getUrl($route, $params);
    }

    /**
     * {@inheritdoc}
     */
    public function getViewFileUrl($fileId, array $params = [])
    {
        return $this->_getSubject()->getViewFileUrl($fileId, $params);
    }

    /**
     * {@inheritdoc}
     */
    public function formatDate($date = null, $format = 3, $showTime = false, $timezone = null)
    {
        return $this->_getSubject()->formatDate($date, $format, $showTime, $timezone);
    }

    /**
     * {@inheritdoc}
     */
    public function formatTime($time = null, $format = 3, $showDate = false)
    {
        return $this->_getSubject()->formatTime($time, $format, $showDate);
    }

    /**
     * {@inheritdoc}
     */
    public function getModuleName()
    {
        return $this->_getSubject()->getModuleName();
    }

    /**
     * {@inheritdoc}
     */
    public function escapeHtml($data, $allowedTags = null)
    {
        return $this->_getSubject()->escapeHtml($data, $allowedTags);
    }

    /**
     * {@inheritdoc}
     */
    public function escapeJs($string)
    {
        return $this->_getSubject()->escapeJs($string);
    }

    /**
     * {@inheritdoc}
     */
    public function escapeHtmlAttr($string, $escapeSingleQuote = true)
    {
        return $this->_getSubject()->escapeHtmlAttr($string, $escapeSingleQuote);
    }

    /**
     * {@inheritdoc}
     */
    public function escapeCss($string)
    {
        return $this->_getSubject()->escapeCss($string);
    }

    /**
     * {@inheritdoc}
     */
    public function stripTags($data, $allowableTags = null, $allowHtmlEntities = false)
    {
        return $this->_getSubject()->stripTags($data, $allowableTags, $allowHtmlEntities);
    }

    /**
     * {@inheritdoc}
     */
    public function escapeUrl($string)
    {
        return $this->_getSubject()->escapeUrl($string);
    }

    /**
     * {@inheritdoc}
     */
    public function escapeXssInUrl($data)
    {
        return $this->_getSubject()->escapeXssInUrl($data);
    }

    /**
     * {@inheritdoc}
     */
    public function escapeQuote($data, $addSlashes = false)
    {
        return $this->_getSubject()->escapeQuote($data, $addSlashes);
    }

    /**
     * {@inheritdoc}
     */
    public function escapeJsQuote($data, $quote = '\'')
    {
        return $this->_getSubject()->escapeJsQuote($data, $quote);
    }

    /**
     * {@inheritdoc}
     */
    public function getNameInLayout()
    {
        return $this->_getSubject()->getNameInLayout();
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheKey()
    {
        return $this->_getSubject()->getCacheKey();
    }

    /**
     * {@inheritdoc}
     */
    public function getVar($name, $module = null)
    {
        return $this->_getSubject()->getVar($name, $module);
    }

    /**
     * {@inheritdoc}
     */
    public function isScopePrivate()
    {
        return $this->_getSubject()->isScopePrivate();
    }

    /**
     * {@inheritdoc}
     */
    public function addData(array $arr)
    {
        return $this->_getSubject()->addData($arr);
    }

    /**
     * {@inheritdoc}
     */
    public function setData($key, $value = null)
    {
        return $this->_getSubject()->setData($key, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function unsetData($key = null)
    {
        return $this->_getSubject()->unsetData($key);
    }

    /**
     * {@inheritdoc}
     */
    public function getData($key = '', $index = null)
    {
        return $this->_getSubject()->getData($key, $index);
    }

    /**
     * {@inheritdoc}
     */
    public function getDataByPath($path)
    {
        return $this->_getSubject()->getDataByPath($path);
    }

    /**
     * {@inheritdoc}
     */
    public function getDataByKey($key)
    {
        return $this->_getSubject()->getDataByKey($key);
    }

    /**
     * {@inheritdoc}
     */
    public function setDataUsingMethod($key, $args = [])
    {
        return $this->_getSubject()->setDataUsingMethod($key, $args);
    }

    /**
     * {@inheritdoc}
     */
    public function getDataUsingMethod($key, $args = null)
    {
        return $this->_getSubject()->getDataUsingMethod($key, $args);
    }

    /**
     * {@inheritdoc}
     */
    public function hasData($key = '')
    {
        return $this->_getSubject()->hasData($key);
    }

    /**
     * {@inheritdoc}
     */
    public function toArray(array $keys = [])
    {
        return $this->_getSubject()->toArray($keys);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToArray(array $keys = [])
    {
        return $this->_getSubject()->convertToArray($keys);
    }

    /**
     * {@inheritdoc}
     */
    public function toXml(array $keys = [], $rootName = 'item', $addOpenTag = false, $addCdata = true)
    {
        return $this->_getSubject()->toXml($keys, $rootName, $addOpenTag, $addCdata);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToXml(array $arrAttributes = [], $rootName = 'item', $addOpenTag = false, $addCdata = true)
    {
        return $this->_getSubject()->convertToXml($arrAttributes, $rootName, $addOpenTag, $addCdata);
    }

    /**
     * {@inheritdoc}
     */
    public function toJson(array $keys = [])
    {
        return $this->_getSubject()->toJson($keys);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToJson(array $keys = [])
    {
        return $this->_getSubject()->convertToJson($keys);
    }

    /**
     * {@inheritdoc}
     */
    public function toString($format = '')
    {
        return $this->_getSubject()->toString($format);
    }

    /**
     * {@inheritdoc}
     */
    public function __call($method, $args)
    {
        return $this->_getSubject()->__call($method, $args);
    }

    /**
     * {@inheritdoc}
     */
    public function isEmpty()
    {
        return $this->_getSubject()->isEmpty();
    }

    /**
     * {@inheritdoc}
     */
    public function serialize($keys = [], $valueSeparator = '=', $fieldSeparator = ' ', $quote = '"')
    {
        return $this->_getSubject()->serialize($keys, $valueSeparator, $fieldSeparator, $quote);
    }

    /**
     * {@inheritdoc}
     */
    public function debug($data = null, &$objects = [])
    {
        return $this->_getSubject()->debug($data, $objects);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetSet($offset, $value)
    {
        return $this->_getSubject()->offsetSet($offset, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetExists($offset)
    {
        return $this->_getSubject()->offsetExists($offset);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetUnset($offset)
    {
        return $this->_getSubject()->offsetUnset($offset);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetGet($offset)
    {
        return $this->_getSubject()->offsetGet($offset);
    }
}
