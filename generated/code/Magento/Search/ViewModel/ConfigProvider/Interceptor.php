<?php
namespace Magento\Search\ViewModel\ConfigProvider;

/**
 * Interceptor class for @see \Magento\Search\ViewModel\ConfigProvider
 */
class Interceptor extends \Magento\Search\ViewModel\ConfigProvider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Search\Helper\Data $searchHelper)
    {
        $this->___init();
        parent::__construct($scopeConfig, $searchHelper);
    }

    /**
     * {@inheritdoc}
     */
    public function isSuggestionsAllowed() : bool
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isSuggestionsAllowed');
        return $pluginInfo ? $this->___callPlugins('isSuggestionsAllowed', func_get_args(), $pluginInfo) : parent::isSuggestionsAllowed();
    }
}
