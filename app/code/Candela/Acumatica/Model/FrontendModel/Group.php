<?php
/**
 * Copyright © 2021 Candela Commerce. All rights reserved.
 */
namespace Candela\Acumatica\Model\FrontendModel;

use Magento\Config\Block\System\Config\Form\Field\FieldArray\AbstractFieldArray;

/**
 * Class Group
 */
class Group extends AbstractFieldArray
{
    /**
     * @return void
     */
    protected function _prepareToRender()
    {
        $this->addColumn('customerGroup', ['label' => __('Customer Group')]);
        $this->addColumn('classAcumatica', ['label' => __('Customer Class')]);
        $this->_addAfter = false;
        $this->_addButtonLabel = __('Add');
    }

}
