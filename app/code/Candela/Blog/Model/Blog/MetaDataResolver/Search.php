<?php

declare(strict_types=1);



namespace Candela\Blog\Model\Blog\MetaDataResolver;

use Candela\Blog\Api\Data\PostInterface;
use Candela\Blog\Model\Blog\MetaDataResolver;
use Magento\Framework\View\Result\Page as ResultPage;

class Search
{
    /**
     * @var MetaDataResolver
     */
    private $resolver;

    public function __construct(MetaDataResolver $metaDataResolver)
    {
        $this->resolver = $metaDataResolver;
    }

    public function resolve(ResultPage $resultPage, string $searchText): void
    {
        $this->resolver->preparePageMetadata(
            $resultPage,
            __("Search results for '%1'", $searchText)->render(),
            $searchText,
            __("There are following posts founded for the search request '%1'", $searchText)->render(),
            '',
            __("Search results for '%1'", $searchText)->render()
        );
    }
}
