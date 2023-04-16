<?php
/**
 *
 */
namespace Candela\WordPressBlogPosts\Api\Data;

interface BlogPostsInterface extends \Magento\Framework\Api\ExtensibleDataInterface
{
    const Candela_BLOGPOSTS_BLOGPOSTS_TABLE = 'Candela_blogposts_blogposts';
    const BLOGPOSTS_ID = 'blogposts_id';
    const IS_SUCCESS   = 'is_success';
    const BLOG_POSTS   = 'blog_posts';
    const CREATED_AT   = 'created_at';

    /**
     * Get blogposts_id
     * @return string|null
     */
    public function getBlogpostsId();

    /**
     * Set blogposts_id
     * @param string $blogpostsId
     * @return \Candela\WordPressBlogPosts\Api\Data\BlogPostsInterface
     */
    public function setBlogpostsId($blogpostsId);

    /**
     * Get blog_posts
     * @return string|null
     */
    public function getBlogPosts();

    /**
     * Set blog_posts
     * @param string $blogPosts
     * @return \Candela\WordPressBlogPosts\Api\Data\BlogPostsInterface
     */
    public function setBlogPosts($blogPosts);

    /**
     * Get is_success
     * @return string|null
     */
    public function getIsSuccess();

    /**
     * Set is_success
     * @param string $isSuccess
     * @return \Candela\WordPressBlogPosts\Api\Data\BlogPostsInterface
     */
    public function setIsSuccess($isSuccess);

    /**
     * Retrieve existing extension attributes object or create a new one.
     * @return \Candela\WordPressBlogPosts\Api\Data\BlogPostsExtensionInterface|null
     */
    public function getExtensionAttributes();

    /**
     * Set an extension attributes object.
     * @param \Candela\WordPressBlogPosts\Api\Data\BlogPostsExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \Candela\WordPressBlogPosts\Api\Data\BlogPostsExtensionInterface $extensionAttributes
    );
}
