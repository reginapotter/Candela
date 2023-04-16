<?php

declare(strict_types=1);



namespace Candela\Blog\ViewModel\Category;

use Candela\Blog\Api\Data\CategoryInterface;
use Candela\Blog\Model\Blog\Registry as BlogRegistry;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class Description implements ArgumentInterface
{
    /**
     * @var BlogRegistry
     */
    private $blogRegistry;

    public function __construct(
        BlogRegistry $blogRegistry
    ) {
        $this->blogRegistry = $blogRegistry;
    }

    public function getCategoryDescription(): string
    {
        /** @var CategoryInterface $currentCategory **/
        $currentCategory = $this->blogRegistry->registry(BlogRegistry::CURRENT_CATEGORY);

        return $currentCategory ? $currentCategory->getDescription() : '';
    }
}
