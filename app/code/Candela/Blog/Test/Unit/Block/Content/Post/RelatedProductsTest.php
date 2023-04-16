<?php

declare(strict_types=1);



namespace Candela\Blog\Test\Unit\Block\Content\Post;

use Candela\Blog\Api\Data\PostInterface;
use Candela\Blog\Block\Content\Post\RelatedProducts;
use Candela\Blog\Model\Posts;
use Candela\Blog\Test\Unit\Traits\ObjectManagerTrait;
use Candela\Blog\Test\Unit\Traits\ReflectionTrait;
use Candela\Blog\ViewModel\Posts\RelatedProducts as RelatedProductsViewModel;
use Magento\Catalog\Model\Product;
use PHPUnit\Framework\TestCase;

/**
 *
 * @see \Candela\Blog\Block\Content\Post\RelatedProducts
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 * phpcs:ignoreFile
 */
class RelatedProductsTest extends TestCase
{
    use ObjectManagerTrait;
    use ReflectionTrait;

    /**
     * @covers       \Candela\Blog\Block\Content\Post\RelatedProducts::getIdentities
     * @dataProvider getIdentitiesDataProvider
     *
     * @param array $cacheTags
     * @param int $postId
     * @param array $expectedResult
     */
    public function testGetIdentities(array $cacheTags, int $postId, array $expectedResult): void
    {
        $products = [];

        foreach ($cacheTags as $cacheTag) {
            $product = $this->createMock(Product::class);
            $product->expects($this->any())->method('getIdentities')->willReturn($cacheTag);
            $products[] = $product;
        }

        $post = $this->getMockForAbstractClass(PostInterface::class);
        $post->expects($this->once())->method('getPostId')->willReturn($postId);

        $viewModel = $this->createMock(RelatedProductsViewModel::class);
        $viewModel->expects($this->any())->method('getPostProducts')->willReturn($products);
        $viewModel->expects($this->once())->method('getCurrentPost')->willReturn($post);

        $block = $this->getObjectManager()->getObject(
            RelatedProducts::class,
            ['data' => ['view_model' => $viewModel]]
        );

        $this->assertEquals($expectedResult, $block->getIdentities());
    }

    public function getIdentitiesDataProvider(): array
    {
        return [
            [
                [
                    [
                        'cache_tag_1',
                        'cache_tag_2'
                    ],
                    [
                        'cache_tag_3'
                    ]
                ],
                1,
                [
                    Posts::CACHE_TAG . '_' . 1,
                    'cache_tag_1',
                    'cache_tag_2',
                    'cache_tag_3'
                ]
            ],
            [
                [],
                1,
                [Posts::CACHE_TAG . '_' . 1]
            ]
        ];
    }
}
