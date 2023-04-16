<?php
namespace Klevu\Search\Block\Adminhtml\Form\Field\Sync\UpdatesOnly;

/**
 * Interceptor class for @see \Klevu\Search\Block\Adminhtml\Form\Field\Sync\UpdatesOnly
 */
class Interceptor extends \Klevu\Search\Block\Adminhtml\Form\Field\Sync\UpdatesOnly implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Klevu\Search\Model\Sync $klevuSync, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $klevuSync, $data);
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
