<?php

declare(strict_types=1);



namespace Candela\Blog\ViewModel\ContentPreparation\Preparers;

interface PreparerInterface
{
    public function prepare(string $content): string;
}
