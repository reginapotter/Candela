<?php


namespace Candela\Blog\Api\Data;

interface GetRelatedPostsForProductInterface
{
    /**
     * @param int $productId
     * @return PostInterface[]
     */
    public function execute(int $productId): array;
}
