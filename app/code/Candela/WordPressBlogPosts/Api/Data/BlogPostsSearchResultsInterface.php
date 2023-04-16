<?php
/**
 *
 */
namespace Candela\WordPressBlogPosts\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface BlogPostsSearchResultsInterface extends SearchResultsInterface
{

    /**
     * Get BlogPosts list.
     * @return \Candela\WordPressBlogPosts\Api\Data\BlogPostsInterface[]
     */
    public function getItems();

    /**
     * Set blog_posts list.
     * @param \Candela\WordPressBlogPosts\Api\Data\BlogPostsInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
