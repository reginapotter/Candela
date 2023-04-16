<?php

declare(strict_types=1);



namespace Candela\Blog\Model\XmlSitemap\Source\CollectionProvider;

use Candela\Blog\Model\Source\PostStatus;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Candela\Blog\Model\ResourceModel\Posts\CollectionFactory;

class Post implements SitemapCollectionProviderInterface
{
    /**
     * @var CollectionFactory
     */
    private $collectionFactory;

    public function __construct(
        CollectionFactory $collectionFactory
    ) {
        $this->collectionFactory = $collectionFactory;
    }

    public function getCollection(int $storeId): AbstractCollection
    {
        $collection = $this->collectionFactory->create();
        $collection->addStoreWithDefault($storeId);
        $collection->addFilterByStatus([PostStatus::STATUS_ENABLED]);
        $collection->setDateOrder();

        return $collection;
    }
}
