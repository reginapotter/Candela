<?php

declare(strict_types=1);



namespace Candela\Blog\Test\Unit\Model\Image;

use Candela\Blog\Model\Image\ImagePathConverter;
use Candela\Blog\Test\Unit\Traits;
use Magento\Framework\UrlInterface;
use Magento\Store\Model\Store;
use Magento\Store\Model\StoreManagerInterface;

/**
 * Class ImagePathConverterTest
 *
 * @see ImagePathConverter
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 * phpcs:ignoreFile
 */
class ImagePathConverterTest extends \PHPUnit\Framework\TestCase
{
    use Traits\ObjectManagerTrait;
    use Traits\ReflectionTrait;

    /**
     * @var ImagePathConverter
     */
    private $model;

    /**
     * @var Store|\PHPUnit\Framework\MockObject\MockObject
     */
    private $store;

    protected function setUp(): void
    {
        $storeManager = $this->createMock(StoreManagerInterface::class);
        $this->store = $this->createMock(Store::class);
        $storeManager->expects($this->any())->method('getStore')->willReturn($this->store);

        $this->model = $this->getObjectManager()->getObject(
            ImagePathConverter::class,
            ['storeManager' => $storeManager]
        );
    }

    /**
     * @covers ImagePathConverter::getImagePath
     *  @dataProvider getImagePathDataProvider
     */
    public function testGetImagePath(string $image, string $result)
    {
        $this->store->expects($this->any())->method('getBaseUrl')->willReturnArgument(0);

        $this->assertEquals($result, $this->model->getImagePath($image));
    }

    /**
     * Data provider for getStatus test
     * @return array
     */
    public function getImagePathDataProvider()
    {
        return [
            ['image.png', 'mediacandela/blog/image.png']
        ];
    }
}
