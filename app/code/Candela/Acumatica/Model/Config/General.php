<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Model\Config;

use Magento\Store\Model\ScopeInterface;

class General
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
     * @return bool
     */
    public function isEnabled(int $websiteId = null): bool
    {
        return (bool)$this->scopeConfig->getValue(
            'candela_acumatica/general/enabled',
            ScopeInterface::SCOPE_WEBSITE,
            $websiteId
        );
    }

    /**
     * @param int|null $websiteId
     * @return bool
     */
    public function isLoggingEnabled(int $websiteId = null): bool
    {
        return (bool)$this->scopeConfig->getValue(
            'candela_acumatica/general/enable_logging',
            ScopeInterface::SCOPE_WEBSITE,
            $websiteId
        );
    }

    /**
     * @param int|null $websiteId
     * @return bool
     */
    public function isResendEnabled(int $websiteId = null): bool
    {
        return (bool)$this->scopeConfig->getValue(
            'candela_acumatica/general/resend_enable',
            ScopeInterface::SCOPE_WEBSITE,
            $websiteId
        );
    }

    /**
     * @param int|null $websiteId
     * @return null|string
     */
    public function getFailedNotificationEmail(int $websiteId = null): ?string
    {
        return $this->scopeConfig->getValue(
            'candela_acumatica/general/failed_notification_email',
            ScopeInterface::SCOPE_WEBSITE,
            $websiteId
        );
    }

    /**
     * @param int|null $websiteId
     * @return null|string
     */
    public function getFailAuthenticateNotificationEmail(int $websiteId = null): ?string
    {
        return $this->scopeConfig->getValue(
            'candela_acumatica/general/failed_authenticate_notification_email',
            ScopeInterface::SCOPE_WEBSITE,
            $websiteId
        );
    }

    /**
     * @param int|null $websiteId
     * @return int
     */
    public function getResendMaxTime(int $websiteId = null): int
    {
        return (int)$this->scopeConfig->getValue(
            'candela_acumatica/general/resend_max_time',
            ScopeInterface::SCOPE_WEBSITE,
            $websiteId
        );
    }

    /**
     * @param int|null $websiteId
     * @return int
     */
    public function getRetainMaxTime(int $websiteId = null): int
    {
        return (int)$this->scopeConfig->getValue(
            'candela_acumatica/general/retain_max_time',
            ScopeInterface::SCOPE_WEBSITE,
            $websiteId
        );
    }

    /**
     * @param int|null $websiteId
     * @return string
     */
    public function getCurrency(int $websiteId = null): ?string
    {
        return $this->scopeConfig->getValue(
            'candela_acumatica/general/currency',
            ScopeInterface::SCOPE_WEBSITE,
            $websiteId
        );
    }

    /**
     * @param int|null $websiteId
     * @return array
     */
    public function getShippingMethodsMapping($websiteId = null): array
    {
        $mappingString = $this->scopeConfig->getValue(
            'candela_acumatica/general/shipping_method_mapping',
            ScopeInterface::SCOPE_WEBSITE,
            $websiteId
        );

        $mappingArray = [];
        if ($mappingString) {
            $mappingArray = $this->getMappingArray($mappingString);
        }

        return $mappingArray;
    }

    /**
     * @param int|null $websiteId
     * @return null|string
     */
    public function getDefaultShippingMethod(int $websiteId = null): ?string
    {
        return $this->scopeConfig->getValue(
            'candela_acumatica/general/default_shipping_method',
            ScopeInterface::SCOPE_WEBSITE,
            $websiteId
        );
    }

    /**
     * @param int|null $websiteId
     * @return array
     */
    public function getPaymentMethodsMapping($websiteId = null): array
    {
        $mappingString = $this->scopeConfig->getValue(
            'candela_acumatica/general/payment_method_mapping',
            ScopeInterface::SCOPE_WEBSITE,
            $websiteId
        );

        $mappingArray = [];
        if ($mappingString) {
            $mappingArray = $this->getMappingArray($mappingString);
        }

        return $mappingArray;
    }

    /**
     * @param int|null $websiteId
     * @return null|string
     */
    public function getDefaultPaymentMethod(int $websiteId = null): ?string
    {
        return $this->scopeConfig->getValue(
            'candela_acumatica/general/default_payment_method',
            ScopeInterface::SCOPE_WEBSITE,
            $websiteId
        );
    }

    /**
     * @param int|null $websiteId
     * @return bool
     */
    public function isStockItemEnabled(int $websiteId = null): bool
    {
        return (bool)$this->scopeConfig->getValue(
            'candela_acumatica/stock_item_cron/stock_item_enable',
            ScopeInterface::SCOPE_WEBSITE,
            $websiteId
        );
    }

    /**
     * @param int|null $websiteId
     * @return null|string
     */
    public function getStockUpdateReportEmail(int $websiteId = null): ?string
    {
        return $this->scopeConfig->getValue(
            'candela_acumatica/stock_item_cron/stock_update_report_email',
            ScopeInterface::SCOPE_WEBSITE,
            $websiteId
        );
    }

    /**
     * @param string $mappingString
     * @return array
     */
    private function getMappingArray(string $mappingString): array
    {
        $mappingArray = [];
        $mappingData = explode(',', $mappingString);
        foreach ($mappingData as $mappedItem) {
            $mappedItemArray = explode('|', trim($mappedItem));
            if (count($mappedItemArray) === 2) {
                $mappingArray[$mappedItemArray[0]] = $mappedItemArray[1];
            }
        }

        return $mappingArray;
    }
}
