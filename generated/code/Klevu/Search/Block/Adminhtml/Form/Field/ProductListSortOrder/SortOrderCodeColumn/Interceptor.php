<?php
namespace Klevu\Search\Block\Adminhtml\Form\Field\ProductListSortOrder\SortOrderCodeColumn;

/**
 * Interceptor class for @see \Klevu\Search\Block\Adminhtml\Form\Field\ProductListSortOrder\SortOrderCodeColumn
 */
class Interceptor extends \Klevu\Search\Block\Adminhtml\Form\Field\ProductListSortOrder\SortOrderCodeColumn implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Context $context, \Magento\Framework\Data\OptionSourceInterface $productListSortOrdersSource, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $productListSortOrdersSource, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function setOptions($options)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setOptions');
        return $pluginInfo ? $this->___callPlugins('setOptions', func_get_args(), $pluginInfo) : parent::setOptions($options);
    }
}
