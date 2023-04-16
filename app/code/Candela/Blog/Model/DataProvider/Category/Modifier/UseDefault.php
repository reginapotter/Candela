<?php


namespace Candela\Blog\Model\DataProvider\Category\Modifier;

use Candela\Blog\Api\Data\CategoryInterface;
use Candela\Blog\Model\DataProvider\AbstractModifier;

class UseDefault extends AbstractModifier
{
    /**
     * @return array
     */
    public function getFieldsByStore()
    {
        return CategoryInterface::FIELDS_BY_STORE;
    }
}
