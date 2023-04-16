<?php

declare(strict_types=1);



namespace Candela\Blog\Model\LiveSearch;

interface LiveSearchInterface
{
    public function getSearchResult(string $query, int $itemsLimit): array;
}
