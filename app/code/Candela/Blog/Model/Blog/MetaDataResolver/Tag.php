<?php

declare(strict_types=1);



namespace Candela\Blog\Model\Blog\MetaDataResolver;

use Candela\Blog\Api\Data\TagInterface;
use Candela\Blog\Model\Blog\MetaDataResolver;
use Magento\Framework\View\Result\Page as ResultPage;

class Tag
{
    /**
     * @var MetaDataResolver
     */
    private $resolver;

    public function __construct(MetaDataResolver $metaDataResolver)
    {
        $this->resolver = $metaDataResolver;
    }

    public function resolve(ResultPage $resultPage, TagInterface $tag): void
    {
        $this->resolver->preparePageMetadata(
            $resultPage,
            (string)$tag->getMetaTitle(),
            (string)$tag->getMetaTags(),
            (string)$tag->getMetaDescription(),
            (string)$tag->getUrl(),
            __("Posts tagged '%1'", $tag->getName())->render(),
            $this->resolver->getMetaRobots($tag)
        );
    }
}
