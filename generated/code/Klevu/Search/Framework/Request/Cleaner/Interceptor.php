<?php
namespace Klevu\Search\Framework\Request\Cleaner;

/**
 * Interceptor class for @see \Klevu\Search\Framework\Request\Cleaner
 */
class Interceptor extends \Klevu\Search\Framework\Request\Cleaner implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Search\Request\Aggregation\StatusInterface $aggregationStatus, \Magento\Framework\Session\SessionManagerInterface $sessionManagerInterface, \Magento\Framework\App\Config\MutableScopeConfigInterface $mutableScopeConfigInterface, \Magento\Framework\Registry $magentoRegistry, \Klevu\Search\Model\Api\Magento\Request\ProductInterface $klevuRequest, \Klevu\Search\Helper\Config $klevuConfig, \Magento\Framework\App\Request\Http $magentoRequest, \Klevu\Search\Model\ContextFE $klevuCoreContext)
    {
        $this->___init();
        parent::__construct($aggregationStatus, $sessionManagerInterface, $mutableScopeConfigInterface, $magentoRegistry, $klevuRequest, $klevuConfig, $magentoRequest, $klevuCoreContext);
    }

    /**
     * {@inheritdoc}
     */
    public function clean(array $requestData)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'clean');
        return $pluginInfo ? $this->___callPlugins('clean', func_get_args(), $pluginInfo) : parent::clean($requestData);
    }
}
