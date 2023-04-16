<?php

declare(strict_types=1);



namespace Candela\Blog\Model\Layout;

interface BlockNameGeneratorInterface
{
    public function generate(string $data, string $prefix = ''): string;
}
