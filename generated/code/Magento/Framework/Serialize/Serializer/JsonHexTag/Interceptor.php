<?php
namespace Magento\Framework\Serialize\Serializer\JsonHexTag;

/**
 * Interceptor class for @see \Magento\Framework\Serialize\Serializer\JsonHexTag
 */
class Interceptor extends \Magento\Framework\Serialize\Serializer\JsonHexTag implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
    }

    /**
     * {@inheritdoc}
     */
    public function serialize($data) : string
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'serialize');
        return $pluginInfo ? $this->___callPlugins('serialize', func_get_args(), $pluginInfo) : parent::serialize($data);
    }

    /**
     * {@inheritdoc}
     */
    public function unserialize($string)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unserialize');
        return $pluginInfo ? $this->___callPlugins('unserialize', func_get_args(), $pluginInfo) : parent::unserialize($string);
    }
}
