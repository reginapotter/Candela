<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Model\Config;

use Magento\Store\Model\ScopeInterface;

class AddressTypeConfig
{
    const ADDRESS_TYPE_ENABLED = 'candela_acumatica/address_type/enabled';
    const ADDRESS_TYPE_DEFAULT = 'candela_acumatica/address_type/default_type';

    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    private $scopeConfig;

    /**
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     */
    public function __construct(\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * @param int|null $websiteId
     * @return null|string
     */
    public function isEnabled(int $websiteId = null): ?string
    {
        return $this->scopeConfig->getValue(self::ADDRESS_TYPE_ENABLED, ScopeInterface::SCOPE_WEBSITE, $websiteId);
    }

    /**
     * @param int|null $websiteId
     * @return null|string
     */
    public function getDefault(int $websiteId = null): ?string
    {
        return $this->scopeConfig->getValue(self::ADDRESS_TYPE_DEFAULT, ScopeInterface::SCOPE_WEBSITE, $websiteId);
    }
}
