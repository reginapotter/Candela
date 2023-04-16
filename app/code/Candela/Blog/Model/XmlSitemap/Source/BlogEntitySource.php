<?php

declare(strict_types=1);



namespace Candela\Blog\Model\XmlSitemap\Source;

use Candela\Blog\Model\XmlSitemap\Source\CollectionProvider\SitemapCollectionProviderInterface as CollectionProvider;
use Magento\Framework\Escaper;

class BlogEntitySource
{
    /**
     * @var Escaper
     */
    private $escaper;

    /**
     * @var CollectionProvider
     */
    private $collectionProvider;

    /**
     * @var string
     */
    private $entityCode;

    /**
     * @var string
     */
    private $entityLabel;

    public function __construct(
        Escaper $escaper,
        CollectionProvider $collectionProvider,
        string $entityCode,
        string $entityLabel
    ) {
        $this->escaper = $escaper;
        $this->collectionProvider = $collectionProvider;
        $this->entityCode = $entityCode;
        $this->entityLabel = $entityLabel;
    }

    public function getData($sitemap): \Generator
    {
        /** @var \Candela\XmlSitemap\Model\Sitemap\SitemapEntityData $sitemapEntityData */
        $sitemapEntityData = $sitemap->getEntityData($this->getEntityCode());
        $storeId = $sitemap->getStoreId();
        $collection = $this->collectionProvider->getCollection($storeId);

        foreach ($collection as $item) {
            $item->setStoreId($storeId);
            yield [
                [
                    'loc' => $this->escaper->escapeUrl($item->getUrl()),
                    'frequency' => $sitemapEntityData->getFrequency(),
                    'priority' => $sitemapEntityData->getPriority()
                ]
            ];
        }
    }

    public function getEntityCode(): string
    {
        return $this->entityCode;
    }

    public function getEntityLabel(): string
    {
        return $this->entityLabel;
    }
}
