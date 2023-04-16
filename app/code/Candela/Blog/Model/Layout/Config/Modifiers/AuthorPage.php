<?php

declare(strict_types=1);



namespace Candela\Blog\Model\Layout\Config\Modifiers;

use Candela\Blog\Model\Layout\Config\DynamicModifierInterface;
use Candela\Blog\Model\Layout\ConfigFactory;
use Candela\Blog\Model\Source\Layout;

class AuthorPage implements DynamicModifierInterface
{
    const AUTHOR_ABOUT_IDENTIFIER = 'author_about';

    public function modify(array $layoutConfig): array
    {
        $pageTypeIdentifier = $layoutConfig[ConfigFactory::LAYOUT] ?? Layout::ONE_COLUMN_LAYOUT;

        if (in_array($pageTypeIdentifier, [Layout::THREE_COLUMNS_LAYOUT, Layout::TWO_COLUMNS_RIGHT_LAYOUT])) {
            $layoutConfig[ConfigFactory::RIGHT_SIDE] = $layoutConfig[ConfigFactory::RIGHT_SIDE] ?? [];
            array_unshift($layoutConfig[ConfigFactory::RIGHT_SIDE], self::AUTHOR_ABOUT_IDENTIFIER);
        } elseif ($pageTypeIdentifier === Layout::TWO_COLUMNS_LEFT_LAYOUT) {
            $layoutConfig[ConfigFactory::LEFT_SIDE] = $layoutConfig[ConfigFactory::LEFT_SIDE] ?? [];
            array_unshift($layoutConfig[ConfigFactory::LEFT_SIDE], self::AUTHOR_ABOUT_IDENTIFIER);
        }

        return $layoutConfig;
    }
}
