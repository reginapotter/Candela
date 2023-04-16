<?php
/**
 *
 */
namespace Candela\WordPressBlogPosts\Model\Data;

use Magento\Framework\Api\AbstractExtensibleObject;
use Magento\Framework\Api\ExtensionAttributesInterface;
use Candela\WordPressBlogPosts\Api\Data\BlogPostsExtensionInterface;
use Candela\WordPressBlogPosts\Api\Data\BlogPostsInterface;

class BlogPosts extends AbstractExtensibleObject implements BlogPostsInterface
{

    /**
     * Get blogposts_id
     * @return string|null
     */
    public function getBlogpostsId()
    {
        return $this->_get(self::BLOGPOSTS_ID);
    }

    /**
     * Set blogposts_id
     * @param string $blogpostsId
     * @return BlogPostsInterface
     */
    public function setBlogpostsId($blogpostsId)
    {
        return $this->setData(self::BLOGPOSTS_ID, $blogpostsId);
    }

    /**
     * Get blog_posts
     * @return string|null
     */
    public function getBlogPosts()
    {
        return $this->_get(self::BLOG_POSTS);
    }

    /**
     * Set blog_posts
     * @param string $blogPosts
     * @return BlogPostsInterface
     */
    public function setBlogPosts($blogPosts)
    {
        return $this->setData(self::BLOG_POSTS, $blogPosts);
    }

    /**
     * Get is_success
     * @return string|null
     */
    public function getIsSuccess()
    {
        return $this->_get(self::IS_SUCCESS);
    }

    /**
     * Set is_success
     * @param string $isSuccess
     * @return BlogPostsInterface
     */
    public function setIsSuccess($isSuccess)
    {
        return $this->setData(self::IS_SUCCESS, $isSuccess);
    }

    /**
     * Retrieve existing extension attributes object or create a new one.
     * @return ExtensionAttributesInterface
     */
    public function getExtensionAttributes()
    {
        return $this->_getExtensionAttributes();
    }

    /**
     * Set an extension attributes object.
     * @param BlogPostsExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        BlogPostsExtensionInterface $extensionAttributes
    ) {
        return $this->_setExtensionAttributes($extensionAttributes);
    }
}
