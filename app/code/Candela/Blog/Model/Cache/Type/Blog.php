<?php


namespace Candela\Blog\Model\Cache\Type;

use Magento\Framework\App\Cache\Type\FrontendPool;
use Magento\Framework\Cache\Frontend\Decorator\TagScope;

class Blog extends TagScope
{
    const TYPE_IDENTIFIER = 'candela_blog';
    const CACHE_TAG = 'CANDELA_BLOG';
    const CACHE_ID = 'candela_blog_cache';

    public function __construct(
        FrontendPool $cacheFrontendPool
    ) {
        parent::__construct(
            $cacheFrontendPool->get(self::TYPE_IDENTIFIER),
            self::CACHE_TAG
        );
    }
}
