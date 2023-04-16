<?php

declare(strict_types=1);



namespace Candela\Blog\Api\Data;

use Magento\Catalog\Api\Data\ProductInterface;

/**
 * @api
 */
interface GetPostRelatedProductsInterface
{
    /**
     * @param int $postId
     * @return ProductInterface[]
     */
    public function execute(int $postId): array;
}
