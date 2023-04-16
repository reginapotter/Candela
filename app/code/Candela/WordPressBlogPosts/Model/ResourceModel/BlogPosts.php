<?php
/**
 *
 */
namespace Candela\WordPressBlogPosts\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Candela\WordPressBlogPosts\Api\Data\BlogPostsInterface;

class BlogPosts extends AbstractDb
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            BlogPostsInterface::Candela_BLOGPOSTS_BLOGPOSTS_TABLE,
            BlogPostsInterface::BLOGPOSTS_ID
        );
    }
}
