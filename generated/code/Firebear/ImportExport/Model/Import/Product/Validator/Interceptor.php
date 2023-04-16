<?php
namespace Firebear\ImportExport\Model\Import\Product\Validator;

/**
 * Interceptor class for @see \Firebear\ImportExport\Model\Import\Product\Validator
 */
class Interceptor extends \Firebear\ImportExport\Model\Import\Product\Validator implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Stdlib\StringUtils $string, $validators = [])
    {
        $this->___init();
        parent::__construct($string, $validators);
    }

    /**
     * {@inheritdoc}
     */
    public function isAttributeValid($attrCode, array $attrParams, array $rowData)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isAttributeValid');
        return $pluginInfo ? $this->___callPlugins('isAttributeValid', func_get_args(), $pluginInfo) : parent::isAttributeValid($attrCode, $attrParams, $rowData);
    }
}
