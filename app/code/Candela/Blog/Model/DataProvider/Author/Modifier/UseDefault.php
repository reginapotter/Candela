<?php


namespace Candela\Blog\Model\DataProvider\Author\Modifier;

use Candela\Blog\Api\Data\AuthorInterface;
use Candela\Blog\Model\DataProvider\AbstractModifier;

class UseDefault extends AbstractModifier
{
    /**
     * @return array
     */
    public function getFieldsByStore()
    {
        return AuthorInterface::FIELDS_BY_STORE;
    }
}
