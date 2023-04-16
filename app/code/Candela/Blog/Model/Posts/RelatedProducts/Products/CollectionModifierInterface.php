<?php

declare(strict_types=1);



namespace Candela\Blog\Model\Posts\RelatedProducts\Products;

use Magento\Catalog\Model\ResourceModel\Product\Collection as ProductCollection;

interface CollectionModifierInterface
{
    public function modify(ProductCollection $collection): void;
}
