<?php


namespace Candela\Blog\Model\DataProvider\Tag\Modifier;

use Candela\Blog\Api\Data\TagInterface;
use Candela\Blog\Model\DataProvider\AbstractModifier;

class UseDefault extends AbstractModifier
{
    /**
     * @return array
     */
    public function getFieldsByStore()
    {
        return TagInterface::FIELDS_BY_STORE;
    }
}
