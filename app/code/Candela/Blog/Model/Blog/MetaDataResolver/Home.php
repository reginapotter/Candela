<?php

declare(strict_types=1);



namespace Candela\Blog\Model\Blog\MetaDataResolver;

use Candela\Blog\Model\Blog\MetaDataResolver;
use Candela\Blog\Model\ConfigProvider;
use Candela\Blog\Model\UrlResolver;
use Magento\Framework\View\Result\Page as ResultPage;

class Home
{
    /**
     * @var MetaDataResolver
     */
    private $resolver;

    /**
     * @var ConfigProvider
     */
    private $configProvider;

    /**
     * @var UrlResolver
     */
    private $urlResolver;

    public function __construct(
        MetaDataResolver $metaDataResolver,
        ConfigProvider $configProvider,
        UrlResolver $urlResolver
    ) {
        $this->resolver = $metaDataResolver;
        $this->configProvider = $configProvider;
        $this->urlResolver = $urlResolver;
    }

    public function resolve(ResultPage $resultPage): void
    {
        $this->resolver->preparePageMetadata(
            $resultPage,
            (string)$this->configProvider->getMetaTitle(),
            (string)$this->configProvider->getMetaTags(),
            (string)$this->configProvider->getMetaDescription(),
            $this->urlResolver->getBlogUrl(),
            (string)$this->configProvider->getTitle(),
            $this->resolver->getMetaRobots()
        );
    }
}
