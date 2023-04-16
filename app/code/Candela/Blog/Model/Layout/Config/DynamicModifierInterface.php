<?php

declare(strict_types=1);



namespace Candela\Blog\Model\Layout\Config;

interface DynamicModifierInterface
{
    public function modify(array $layoutConfig): array;
}
