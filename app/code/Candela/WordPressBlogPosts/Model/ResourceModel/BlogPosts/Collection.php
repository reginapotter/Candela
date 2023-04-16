<?php
/**
 *
 */
namespace Candela\WordPressBlogPosts\Model\ResourceModel\BlogPosts;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            \Candela\WordPressBlogPosts\Model\BlogPosts::class,
            \Candela\WordPressBlogPosts\Model\ResourceModel\BlogPosts::class
        );
    }
}
