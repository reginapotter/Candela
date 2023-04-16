<?php
namespace Magento\Cron\Model\Config;

/**
 * Interceptor class for @see \Magento\Cron\Model\Config
 */
class Interceptor extends \Magento\Cron\Model\Config implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Cron\Model\Config\Data $configData)
    {
        $this->___init();
        parent::__construct($configData);
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
