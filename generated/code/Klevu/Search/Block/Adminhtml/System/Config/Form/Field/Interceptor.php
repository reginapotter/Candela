<?php
namespace Klevu\Search\Block\Adminhtml\System\Config\Form\Field;

/**
 * Interceptor class for @see \Klevu\Search\Block\Adminhtml\System\Config\Form\Field
 */
class Interceptor extends \Klevu\Search\Block\Adminhtml\System\Config\Form\Field implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Klevu\Search\Model\Klevu\HelperManager $klevuHelperManager, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $klevuHelperManager, $data);
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
