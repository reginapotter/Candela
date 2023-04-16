<?php

declare(strict_types=1);



namespace Candela\Blog\ViewModel\Product\View;

use Candela\Blog\Api\Data\GetRelatedPostsForProductInterface;
use Candela\Blog\Api\Data\PostInterface;
use Candela\Blog\Helper\Date;
use Candela\Blog\Model\ConfigProvider;
use Magento\Catalog\Api\Data\ProductInterface;
use Magento\Framework\Phrase;
use Magento\Framework\Registry;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class RelatedPosts implements ArgumentInterface
{
    /**
     * @var GetRelatedPostsForProductInterface
     */
    private $getRelatedPostsForProduct;

    /**
     * @var Registry
     */
    private $registry;

    /**
     * @var ConfigProvider
     */
    private $configProvider;

    /**
     * @var Date
     */
    private $dateRenderer;

    public function __construct(
        GetRelatedPostsForProductInterface $getRelatedPostsForProduct,
        Registry $registry,
        ConfigProvider $configProvider,
        Date $dateRenderer
    ) {
        $this->getRelatedPostsForProduct = $getRelatedPostsForProduct;
        $this->registry = $registry;
        $this->configProvider = $configProvider;
        $this->dateRenderer = $dateRenderer;
    }

    private function getCurrentProduct(): ?ProductInterface
    {
        $product = null;

        foreach (['product', 'current_product'] as $registryKey) {
            if ($this->registry->registry($registryKey) instanceof ProductInterface) {
                $product = $this->registry->registry($registryKey);
                break;
            }
        }

        return $product;
    }

    public function isCanRender(): bool
    {
        return count($this->getPostsForCurrentProduct()) > 0;
    }

    /**
     * @return PostInterface[]
     */
    public function getPostsForCurrentProduct(): array
    {
        $posts = [];

        if ($product = $this->getCurrentProduct()) {
            $posts = $this->getRelatedPostsForProduct->execute((int)$product->getId());
        }

        return $posts;
    }

    public function getBlockTitle(): string
    {
        return $this->configProvider->getPostPageBlockTitleOnProductPage();
    }

    public function getPublishDate(PostInterface $post): string
    {
        return (string) $this->dateRenderer->renderDate($post->getPublishedAt());
    }
}
