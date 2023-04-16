<?php

declare(strict_types=1);



namespace Candela\Blog\Model\Layout;

class LayoutUpdateNameGenerator
{
    const LAYOUT_UPDATE_PREFIX = 'candela_blog_';

    public function generate(string $identifier): string
    {
        return self::LAYOUT_UPDATE_PREFIX . $identifier;
    }
}
