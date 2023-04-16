<?php

declare(strict_types=1);



namespace Candela\Blog\Model\ResourceModel\Posts\RelatedProducts;

use Candela\Blog\Api\Data\GetPostRelatedProductsInterface;
use Candela\Blog\Api\Data\PostInterface;
use Candela\Blog\Model\ResourceModel\Posts\Save\SavePostProductRelations;
use Magento\Catalog\Api\Data\ProductInterface;

class PopulateRelatedProductsInfo
{
    /**
     * @var GetPostRelatedProductsInterface
     */
    private $getPostRelatedProducts;

    public function __construct(
        GetPostRelatedProductsInterface $getPostRelatedProducts
    ) {
        $this->getPostRelatedProducts = $getPostRelatedProducts;
    }

    public function execute(PostInterface $post): void
    {
        if (!$post->hasData(SavePostProductRelations::DATA_SECTION)) {
            $postRelatedProducts = $this->getPostRelatedProducts->execute($post->getPostId());
            $result = [];

            /** @var ProductInterface $product **/
            foreach (array_values($postRelatedProducts) as $position => $product) {
                $result[] = [
                    SavePostProductRelations::ENTITY_ID => $product->getId(),
                    GetPostRelatedProducts::POSITION_ALIAS => $position + 1
                ];
            }

            $post->setData(SavePostProductRelations::DATA_SECTION, $result);
        }
    }
}
