<?php

declare(strict_types=1);



namespace Candela\Blog\Model\Blog\MetaDataResolver;

use Candela\Blog\Api\Data\PostInterface;
use Candela\Blog\Model\Blog\MetaDataResolver;
use Magento\Framework\View\Result\Page as ResultPage;

class Post
{
    /**
     * @var MetaDataResolver
     */
    private $resolver;

    public function __construct(MetaDataResolver $metaDataResolver)
    {
        $this->resolver = $metaDataResolver;
    }

    public function resolve(ResultPage $resultPage, PostInterface $post): void
    {
        $this->resolver->preparePageMetadata(
            $resultPage,
            (string)$post->getMetaTitle(),
            (string)$post->getMetaTags(),
            (string)($post->getMetaDescription() ?: $this->resolver->cutDescription((string)$post->getShortContent())),
            (string)$post->getUrl(),
            (string)$post->getTitle(),
            $this->resolver->getMetaRobots($post)
        );
    }
}
