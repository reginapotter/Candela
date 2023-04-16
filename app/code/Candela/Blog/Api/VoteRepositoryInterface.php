<?php


namespace Candela\Blog\Api;

/**
 * Interface VoteRepositoryInterface
 * @api
 */
interface VoteRepositoryInterface
{
    /**
     * @param \Candela\Blog\Api\Data\VoteInterface $vote
     * @return \Candela\Blog\Api\Data\VoteInterface
     * @throws \Magento\Framework\Exception\CouldNotSaveException
     */
    public function save(\Candela\Blog\Api\Data\VoteInterface $vote);

    /**
     * @param int $voteId
     * @return \Candela\Blog\Api\Data\VoteInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function get($voteId);

    /**
     * @param Data\VoteInterface $vote
     * @return mixed
     */
    public function delete(\Candela\Blog\Api\Data\VoteInterface $vote);

    /**
     * @param int $voteId
     *
     * @return boolean
     */
    public function deleteById($voteId);
}
