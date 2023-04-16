<?php
namespace Klevu\Categorynavigation\Block\Adminhtml\Form\Nextsteps\CatNavEnabled;

/**
 * Interceptor class for @see \Klevu\Categorynavigation\Block\Adminhtml\Form\Nextsteps\CatNavEnabled
 */
class Interceptor extends \Klevu\Categorynavigation\Block\Adminhtml\Form\Nextsteps\CatNavEnabled implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Klevu\Search\Api\Service\Account\GetFeaturesInterface $getFeatures, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $getFeatures, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'render');
        return $pluginInfo ? $this->___callPlugins('render', func_get_args(), $pluginInfo) : parent::render($element);
    }
}
