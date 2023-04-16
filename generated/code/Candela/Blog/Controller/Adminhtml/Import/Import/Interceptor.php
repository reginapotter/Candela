<?php
namespace Candela\Blog\Controller\Adminhtml\Import\Import;

/**
 * Interceptor class for @see \Candela\Blog\Controller\Adminhtml\Import\Import
 */
class Interceptor extends \Candela\Blog\Controller\Adminhtml\Import\Import implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Cron\Model\ScheduleFactory $scheduleFactory, \Magento\Framework\Stdlib\DateTime\DateTime $dateTime, \Magento\Framework\App\Config\Storage\WriterInterface $configWritter, \Magento\Framework\App\Config\ReinitableConfigInterface $reinitableConfig, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig)
    {
        $this->___init();
        parent::__construct($context, $scheduleFactory, $dateTime, $configWritter, $reinitableConfig, $scopeConfig);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
