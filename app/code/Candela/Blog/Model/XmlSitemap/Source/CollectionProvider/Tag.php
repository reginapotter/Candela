<?php

declare(strict_types=1);



namespace Candela\Blog\Model\XmlSitemap\Source\CollectionProvider;

use Candela\Blog\Helper\Settings;
use Candela\Blog\Model\ResourceModel\Tag\CollectionFactory;
use Candela\Blog\Model\Source\PostStatus;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Tag implements SitemapCollectionProviderInterface
{
    /**
     * @var CollectionFactory
     */
    private $collectionFactory;

    /**
     * @var Settings
     */
    private $settingsHelper;

    public function __construct(
        CollectionFactory $collectionFactory,
        Settings $settingsHelper
    ) {
        $this->collectionFactory = $collectionFactory;
        $this->settingsHelper = $settingsHelper;
    }

    public function getCollection(int $storeId): AbstractCollection
    {
        $collection = $this->collectionFactory->create();
        $collection->addStoreWithDefault((int)$storeId);
        $collection->addWeightData($storeId);
        $collection->setPostStatusFilter(PostStatus::STATUS_ENABLED);
        $collection->setMinimalPostCountFilter($this->settingsHelper->getTagsMinimalPostCount());
        $collection->setNameOrder();

        return $collection;
    }
}
