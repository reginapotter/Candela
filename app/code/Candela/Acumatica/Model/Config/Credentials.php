<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Model\Config;

use Magento\Store\Model\ScopeInterface;

class Credentials
{
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
    public function getApiAuthName($websiteId = null): ?string
    {
        return $this->scopeConfig->getValue('candela_acumatica/credentials/api_auth_name', ScopeInterface::SCOPE_WEBSITE, $websiteId);
    }

    /**
     * @param int|null $websiteId
     * @return null|string
     */
    public function getApiAuthPassword($websiteId = null): ?string
    {
        return $this->scopeConfig->getValue('candela_acumatica/credentials/api_auth_password', ScopeInterface::SCOPE_WEBSITE, $websiteId);
    }

    /**
     * @param int|null $websiteId
     * @return null|string
     */
    public function getApiAuthCompany($websiteId = null): ?string
    {
        return $this->scopeConfig->getValue('candela_acumatica/credentials/api_auth_company', ScopeInterface::SCOPE_WEBSITE, $websiteId);
    }
}
