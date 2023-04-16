<?php

declare(strict_types=1);



namespace Candela\Blog\Model\Posts\RelatedProducts\Products;

use Magento\Catalog\Api\Data\ProductInterface;
use Magento\Catalog\Model\ResourceModel\Product\Collection as ProductCollection;

class BackendViewCollectionModifier implements CollectionModifierInterface
{
    public function modify(ProductCollection $collection): void
    {
        $collection->addAttributeToSelect(ProductInterface::VISIBILITY);
        $collection->addAttributeToSelect(ProductInterface::STATUS);
        $collection->addAttributeToSelect('websites');
        $collection->addAttributeToSelect('thumbnail');
    }
}
