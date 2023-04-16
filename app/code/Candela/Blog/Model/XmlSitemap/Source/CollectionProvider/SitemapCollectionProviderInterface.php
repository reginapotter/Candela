<?php

declare(strict_types=1);



namespace Candela\Blog\Model\XmlSitemap\Source\CollectionProvider;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

interface SitemapCollectionProviderInterface
{
    /**
     * @return AbstractCollection
     */
    public function getCollection(int $storeId): AbstractCollection;
}
