<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types=1);

namespace Candela\Acumatica\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

class WebsiteOption implements OptionSourceInterface
{
    /**
     * @var \Magento\Cms\Model\Block
     */
    private $storeManager;

    /**
     * @param \Magento\Store\Model\StoreManagerInterface $storeManager
     */
    public function __construct(
        \Magento\Store\Model\StoreManagerInterface $storeManager
    ) {
        $this->storeManager = $storeManager;
    }

    /**
     * @return array
     */
    public function toOptionArray(): array
    {
        $websites = $this->storeManager->getWebsites();
        $options = [];

        foreach ($websites as $website) {
            $options[] = [
                'label' => $website->getName(),
                'value' => $website->getId(),
            ];
        }
        return $options;
    }
}
