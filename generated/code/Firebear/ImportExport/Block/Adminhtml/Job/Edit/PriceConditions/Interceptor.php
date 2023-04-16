<?php
namespace Firebear\ImportExport\Block\Adminhtml\Job\Edit\PriceConditions;

/**
 * Interceptor class for @see \Firebear\ImportExport\Block\Adminhtml\Job\Edit\PriceConditions
 */
class Interceptor extends \Firebear\ImportExport\Block\Adminhtml\Job\Edit\PriceConditions implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Rule\Block\Conditions $conditions, \Magento\Backend\Block\Widget\Form\Renderer\Fieldset $rendererFieldset, \Firebear\ImportExport\Model\Import\Product\Price\RuleFactory $rule, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $conditions, $rendererFieldset, $rule, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getForm()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getForm');
        return $pluginInfo ? $this->___callPlugins('getForm', func_get_args(), $pluginInfo) : parent::getForm();
    }
}
