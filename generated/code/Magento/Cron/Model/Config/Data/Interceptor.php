<?php
namespace Magento\Cron\Model\Config\Data;

/**
 * Interceptor class for @see \Magento\Cron\Model\Config\Data
 */
class Interceptor extends \Magento\Cron\Model\Config\Data implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Cron\Model\Config\Reader\Xml $reader, \Magento\Framework\Config\CacheInterface $cache, \Magento\Cron\Model\Config\Reader\Db $dbReader, $cacheId = 'crontab_config_cache', ?\Magento\Framework\Serialize\SerializerInterface $serializer = null)
    {
        $this->___init();
        parent::__construct($reader, $cache, $dbReader, $cacheId, $serializer);
    }

    /**
     * {@inheritdoc}
     */
    public function getJobs()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getJobs');
        return $pluginInfo ? $this->___callPlugins('getJobs', func_get_args(), $pluginInfo) : parent::getJobs();
    }
}
