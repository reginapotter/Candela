<?php


namespace Candela\Blog\Api;

use Candela\Blog\Model\ResourceModel\Comments\Collection;
use Magento\Framework\Exception\NoSuchEntityException;

/**
 * @api
 */
interface CommentRepositoryInterface
{
    /**
     * Save
     *
     * @param \Candela\Blog\Api\Data\CommentInterface $comment
     *
     * @return \Candela\Blog\Api\Data\CommentInterface
     */
    public function save(\Candela\Blog\Api\Data\CommentInterface $comment);

    /**
     * Get by id
     *
     * @param int $commentId
     *
     * @return \Candela\Blog\Api\Data\CommentInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getById($commentId);

    /**
     * Delete
     *
     * @param \Candela\Blog\Api\Data\CommentInterface $comment
     *
     * @return bool true on success
     * @throws \Magento\Framework\Exception\CouldNotDeleteException
     */
    public function delete(\Candela\Blog\Api\Data\CommentInterface $comment);

    /**
     * Delete by id
     *
     * @param int $commentId
     *
     * @return bool true on success
     * @throws \Magento\Framework\Exception\CouldNotDeleteException
     */
    public function deleteById($commentId);

    /**
     * Lists
     *
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     *
     * @return \Magento\Framework\Api\SearchResultsInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria);

    /**
     * @return \Candela\Blog\Api\Data\CommentInterface
     */
    public function getComment();

    /**
     * @param $activeFilter
     * @param $messageId
     * @return Collection
     * @throws NoSuchEntityException
     */
    public function getRepliesCollection($activeFilter, $messageId);

    /**
     * @param $postId
     * @return Collection
     */
    public function getCommentsInPost($postId);

    /**
     * @return Collection
     * @throws NoSuchEntityException
     */
    public function getCollection();

    /**
     * @return Collection
     */
    public function getRecentComments();
}
