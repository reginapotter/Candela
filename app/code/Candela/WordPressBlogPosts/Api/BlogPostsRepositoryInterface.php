<?php
/**
 *
 */
namespace Candela\WordPressBlogPosts\Api;

use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;
use Candela\WordPressBlogPosts\Api\Data\BlogPostsInterface;
use Candela\WordPressBlogPosts\Api\Data\BlogPostsSearchResultsInterface;

interface BlogPostsRepositoryInterface
{

    /**
     * Save BlogPosts
     * @param BlogPostsInterface $blogPosts
     * @return BlogPostsInterface
     * @throws LocalizedException
     */
    public function save(
        BlogPostsInterface $blogPosts
    );

    /**
     * Create empty BlogPosts object
     * @return BlogPostsInterface
     */
    public function initBlogPosts();

    /**
     * Retrieve BlogPosts
     * @param string $blogpostsId
     * @return BlogPostsInterface
     * @throws LocalizedException
     */
    public function getById($blogpostsId);

    /**
     * Retrieve BlogPosts matching the specified criteria.
     * @param SearchCriteriaInterface $searchCriteria
     * @return BlogPostsSearchResultsInterface
     * @throws LocalizedException
     */
    public function getList(
        SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete BlogPosts
     * @param BlogPostsInterface $blogPosts
     * @return bool true on success
     * @throws LocalizedException
     */
    public function delete(
        BlogPostsInterface $blogPosts
    );

    /**
     * Delete BlogPosts by ID
     * @param string $blogpostsId
     * @return bool true on success
     * @throws NoSuchEntityException
     * @throws LocalizedException
     */
    public function deleteById($blogpostsId);

    /**
     * Get last blog posts
     * @return array|bool
     */
    public function getLastBlogPosts();

    /*
     * Get active/inactive blog posts ids
     * @param int $isSuccess
     * @return array
     */
    public function getBlogPosts($isSuccess);
}
