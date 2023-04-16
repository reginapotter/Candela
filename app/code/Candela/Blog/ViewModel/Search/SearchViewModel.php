<?php

declare(strict_types=1);



namespace Candela\Blog\ViewModel\Search;

use Candela\Blog\Model\ConfigProvider;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class SearchViewModel implements ArgumentInterface
{
    /**
     * @var ConfigProvider
     */
    private $configProvider;

    public function __construct(
        ConfigProvider $configProvider
    ) {
        $this->configProvider = $configProvider;
    }

    /**
     * @return int
     */
    public function getMinCharacterLength(): int
    {
        return $this->configProvider->getMinCharacterLength();
    }

    /**
     * @return int
     */
    public function getItemsPerEntity(): int
    {
        return $this->configProvider->getItemsPerEntity();
    }
}
