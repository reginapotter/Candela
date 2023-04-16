<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Model\Config;

use Magento\Store\Model\ScopeInterface;

class Endpoint
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
    public function getEndpointLogin(int $websiteId = null): ?string
    {
        return $this->scopeConfig->getValue('candela_acumatica/endpoint/login', ScopeInterface::SCOPE_WEBSITE, $websiteId);
    }

    /**
     * @param int|null $websiteId
     * @return null|string
     */
    public function getEndpointLogout(int $websiteId = null): ?string
    {
        return $this->scopeConfig->getValue('candela_acumatica/endpoint/logout', ScopeInterface::SCOPE_WEBSITE, $websiteId);
    }

    /**
     * @param int|null $websiteId
     * @return null|string
     */
    public function getEndpointCustomer(int $websiteId = null): ?string
    {
        return $this->scopeConfig->getValue('candela_acumatica/endpoint/customer', ScopeInterface::SCOPE_WEBSITE, $websiteId);
    }

    /**
     * @param int|null $websiteId
     * @return null|string
     */
    public function getEndpointSalesOrder(int $websiteId = null): ?string
    {
        return $this->scopeConfig->getValue('candela_acumatica/endpoint/sales_order', ScopeInterface::SCOPE_WEBSITE, $websiteId);
    }

    /**
     * @param int|null $websiteId
     * @return null|string
     */
    public function getEndpointSalesOrderPayment(int $websiteId = null): ?string
    {
        return $this->scopeConfig->getValue('candela_acumatica/endpoint/sales_order_payment', ScopeInterface::SCOPE_WEBSITE, $websiteId);
    }

    /**
     * @param int|null $websiteId
     * @return null|string
     */
    public function getEndpointPayment(int $websiteId = null): ?string
    {
        return $this->scopeConfig->getValue('candela_acumatica/endpoint/payment', ScopeInterface::SCOPE_WEBSITE, $websiteId);
    }

    /**
     * @param int|null $websiteId
     * @return null|string
     */
    public function getEndpointCustomerLocation(int $websiteId = null): ?string
    {
        return $this->scopeConfig->getValue('candela_acumatica/endpoint/customer_location', ScopeInterface::SCOPE_WEBSITE, $websiteId);
    }

    /**
     * @param int|null $websiteId
     * @return null|string
     */
    public function getEndpointStockItem(int $websiteId = null): ?string
    {
        return $this->scopeConfig->getValue('candela_acumatica/endpoint/stock_item', ScopeInterface::SCOPE_WEBSITE, $websiteId);
    }

    /**
     * @param int|null $websiteId
     * @return null|string
     */
    public function getEndpointShipment(int $websiteId = null): ?string
    {
        return $this->scopeConfig->getValue('candela_acumatica/endpoint/shipment', ScopeInterface::SCOPE_WEBSITE, $websiteId);
    }
}
