<?php

declare(strict_types=1);



namespace Candela\Blog\Model\LiveSearch;

use Candela\Blog\Model\ConfigProvider;

class LiveSearchPool
{
    /**
     * @var LiveSearchInterface[]
     */
    private $liveSearchEntities;

    /**
     * @var ConfigProvider
     */
    private $configProvider;

    public function __construct(
        ConfigProvider $configProvider,
        array $liveSearchEntities = []
    ) {
        $this->liveSearchEntities = $liveSearchEntities;
        $this->configProvider = $configProvider;
    }

    public function search(string $query): array
    {
        $result = [];
        foreach ($this->liveSearchEntities as $key => $liveSearchEntity) {
            $searchResult = $liveSearchEntity->getSearchResult($query, $this->configProvider->getItemsPerEntity());
            if ($searchResult) {
                $result[$key] = $searchResult;
            }
        }

        return $result;
    }
}
