<?php


namespace Candela\Blog\Model\ResourceModel\View;

/**
 * Class
 */
class Collection extends \Candela\Blog\Model\ResourceModel\Abstracts\Collection
{
    public function _construct()
    {
        parent::_construct();
        $this->_init(\Candela\Blog\Model\View::class, \Candela\Blog\Model\ResourceModel\View::class);
    }
}
