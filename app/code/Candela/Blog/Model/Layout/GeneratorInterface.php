<?php

declare(strict_types=1);



namespace Candela\Blog\Model\Layout;

interface GeneratorInterface
{
    public function generate(Config $layoutConfig): string;
}
