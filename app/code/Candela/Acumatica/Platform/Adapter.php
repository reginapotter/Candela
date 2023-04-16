<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Platform;

class Adapter
{
    /**
     * @var \Candela\Acumatica\Model\Config\General
     */
    private $configGeneral;

    /**
     * @var \Candela\Acumatica\Model\Config\Endpoint
     */
    private $configEndpoint;

    /**
     * @var \Candela\Acumatica\Model\Config\Credentials
     */
    private $configCredentials;

    /**
     * @var \Candela\Acumatica\Platform\HttpClient
     */
    private $httpClient;

    /**
     * @var bool
     */
    private $isAuthorized = false;

    /**
     * @var bool
     */
    private $isLoggingEnabled = false;

    /**
     * @param \Candela\Acumatica\Model\Config\General $configGeneral
     * @param \Candela\Acumatica\Model\Config\Endpoint $configEndpoint
     * @param \Candela\Acumatica\Model\Config\Credentials $configCredentials
     * @param \Candela\Acumatica\Platform\HttpClient $httpClient
     */
    public function __construct(
        \Candela\Acumatica\Model\Config\General $configGeneral,
        \Candela\Acumatica\Model\Config\Endpoint $configEndpoint,
        \Candela\Acumatica\Model\Config\Credentials $configCredentials,
        \Candela\Acumatica\Platform\HttpClient $httpClient,
        \Psr\Log\LoggerInterface $logger
    ) {
        $this->configGeneral = $configGeneral;
        $this->configEndpoint = $configEndpoint;
        $this->configCredentials = $configCredentials;
        $this->httpClient = $httpClient;
        $this->logger = $logger;
    }

    /**
     * @param array $postData
     * @param int $websiteId
     * @return array|null
     * @throws \InvalidArgumentException
     */
    public function createCustomer(array $postData, int $websiteId): ?array
    {
        $this->authenticate($websiteId);
        $this->enableLogging($websiteId);

        if (!$this->configEndpoint->getEndpointCustomer($websiteId)) {
            throw new \InvalidArgumentException(__('Customer Endpoint is not set.'));
        }

        $response = $this->httpClient->put($this->configEndpoint->getEndpointCustomer($websiteId), $postData);

        return $this->httpClient->readResponse($response);
    }

    /**
     * @param string $email
     * @param int $websiteId
     * @return array|null
     */
    public function findCustomer(string $email, int $websiteId): ?array
    {
        $this->authenticate($websiteId);
        $this->enableLogging($websiteId);

        $response = $this->httpClient->get($this->getFindCustomerUri($email, $websiteId));
        $body = $this->httpClient->readResponse($response);

        return $body && is_array($body) ? array_shift($body) : null;
    }

    /**
     * @param string $email
     * @param int $websiteId
     * @return string
     * @throws \InvalidArgumentException
     */
    private function getFindCustomerUri(string $email, int $websiteId): string
    {
        if (!$this->configEndpoint->getEndpointCustomer($websiteId)) {
            throw new \InvalidArgumentException(__('Customer Endpoint is not set.'));
        }

        $uri = $this->configEndpoint->getEndpointCustomer($websiteId);
        $restUri = '?$select=CustomerID,ContactEmail&$filter=ContactEmail eq \'' . urlencode($email) . '\'';

        return $uri . $restUri;
    }

    /**
     * @param array $postData
     * @param int $websiteId
     * @return array|null
     * @throws \InvalidArgumentException
     */
    public function createSalesOrder(array $postData, int $websiteId): ?array
    {
        $this->authenticate($websiteId);
        $this->enableLogging($websiteId);

        if (!$this->configEndpoint->getEndpointSalesOrder($websiteId)) {
            throw new \InvalidArgumentException(__('SalesOrder Endpoint is not set.'));
        }

        $response = $this->httpClient->put($this->configEndpoint->getEndpointSalesOrder($websiteId), $postData);

        return $this->httpClient->readResponse($response);
    }

    /**
     * @param array $postData
     * @param int $websiteId
     * @return array|null
     * @throws \InvalidArgumentException
     */
    public function updateSalesOrder(array $postData, int $websiteId): ?array
    {
        $this->authenticate($websiteId);
        $this->enableLogging($websiteId);

        if (!$this->configEndpoint->getEndpointSalesOrderPayment($websiteId)) {
            throw new \InvalidArgumentException(__('SalesOrderPayment Endpoint is not set.'));
        }

        $response = $this->httpClient->put($this->configEndpoint->getEndpointSalesOrderPayment($websiteId), $postData);

        return $this->httpClient->readResponse($response);
    }

    /**
     * @param string $salesOrderNbr
     * @param int $websiteId
     * @return array|null
     * @throws \InvalidArgumentException
     */
    public function deleteSalesOrder($salesOrderNbr, int $websiteId): ?array
    {
        $this->authenticate($websiteId);
        $this->enableLogging($websiteId);

        if (!$this->configEndpoint->getEndpointSalesOrder($websiteId)) {
            throw new \InvalidArgumentException(__('SalesOrder Endpoint is not set.'));
        }

        $response = $this->httpClient->delete(
            $this->configEndpoint->getEndpointSalesOrder($websiteId) . '/SO/' . $salesOrderNbr
        );

        return $this->httpClient->readResponse($response);
    }

    /**
     * @param array $postData
     * @param int $websiteId
     * @return array|null
     * @throws \InvalidArgumentException
     */
    public function createPayment(array $postData, int $websiteId): ?array
    {
        $this->authenticate($websiteId);
        $this->enableLogging($websiteId);

        if (!$this->configEndpoint->getEndpointPayment($websiteId)) {
            throw new \InvalidArgumentException(__('Payment Endpoint is not set.'));
        }

        $response = $this->httpClient->put($this->configEndpoint->getEndpointPayment($websiteId), $postData);

        return $this->httpClient->readResponse($response);
    }

    /**
     * @param array $postData
     * @param int $websiteId
     * @return array|null
     * @throws \InvalidArgumentException
     */
    public function createCustomerLocation(array $postData, int $websiteId): ?array
    {
        $this->authenticate($websiteId);
        $this->enableLogging($websiteId);

        if (!$this->configEndpoint->getEndpointCustomerLocation($websiteId)) {
            throw new \InvalidArgumentException(__('CustomerLocation Endpoint is not set.'));
        }

        $response = $this->httpClient->put($this->configEndpoint->getEndpointCustomerLocation($websiteId), $postData);

        return $this->httpClient->readResponse($response);
    }

    /**
     * @param string $locationId
     * @param string $customerAcumaticaId
     * @param int $websiteId
     * @return array|null
     * @throws \Exception
     */
    public function getCustomerLocation(string $locationId, string $customerAcumaticaId, int $websiteId): ?array
    {
        $this->authenticate($websiteId);
        $this->enableLogging($websiteId);

        $response = $this->httpClient->get(
            $this->getFindCustomerLocationUri($locationId, $customerAcumaticaId, $websiteId)
        );
        $body = $this->httpClient->readResponse($response);

        return $body && is_array($body) ? $body : null;
    }

    /**
     * @param string $locationId
     * @param string $customerAcumaticaId
     * @param int $websiteId
     * @return string
     */
    private function getFindCustomerLocationUri(string $locationId, string $customerAcumaticaId, int $websiteId): string
    {
        if (!$this->configEndpoint->getEndpointCustomerLocation($websiteId)) {
            throw new \InvalidArgumentException(__('CustomerLocation Endpoint is not set.'));
        }

        $uri = $this->configEndpoint->getEndpointCustomerLocation($websiteId);
        $uri = trim($uri, '/');
        $uri .= '/%s/%s';

        return sprintf($uri, $customerAcumaticaId, $locationId);
    }

    /**
     * @param string $sku
     * @param int $websiteId
     * @return array|null
     */
    public function getStockItem(string $sku, int $websiteId): ?array
    {
        $this->authenticate($websiteId);
        $this->enableLogging($websiteId);

        $response = $this->httpClient->get($this->getFindStockItemUri($sku, $websiteId));
        $body = $this->httpClient->readResponse($response);

        return $body && is_array($body) ? $body : null;
    }

    /**
     * @param string $sku
     * @param int $websiteId
     * @return string
     * @throws \InvalidArgumentException
     */
    private function getFindStockItemUri(string $sku, int $websiteId): string
    {
        if (!$this->configEndpoint->getEndpointStockItem($websiteId)) {
            throw new \InvalidArgumentException(__('StockItem Endpoint is not set.'));
        }

        $uri = $this->configEndpoint->getEndpointStockItem($websiteId);
        $restUri = '/' . $sku . '?$expand=WarehouseDetails';

        return $uri . $restUri;
    }

    /**
     * @param string $salesOrderId
     * @param int $websiteId
     * @return array|null
     */
    public function getSalesOrder(string $salesOrderId, int $websiteId): ?array
    {
        $this->authenticate($websiteId);
        $this->enableLogging($websiteId);

        $response = $this->httpClient->get($this->getFindSalesOrderUri($salesOrderId, $websiteId));
        $body = $this->httpClient->readResponse($response);

        return $body && is_array($body) ? $body : null;
    }

    /**
     * @param string $salesOrderId
     * @param int $websiteId
     * @return string
     * @throws \InvalidArgumentException
     */
    private function getFindSalesOrderUri(string $salesOrderId, int $websiteId): string
    {
        if (!$this->configEndpoint->getEndpointSalesOrder($websiteId)) {
            throw new \InvalidArgumentException(__('SalesOrder Endpoint is not set.'));
        }

        $uri = $this->configEndpoint->getEndpointSalesOrder($websiteId);
        $restUri = '/SO/' . $salesOrderId . '?$expand=Shipments';

        return $uri . $restUri;
    }

    /**
     * @param string $shipmentId
     * @param int $websiteId
     * @return array|null
     * @throws \Exception
     */
    public function getShipment(string $shipmentId, int $websiteId): ?array
    {
        $this->authenticate($websiteId);
        $this->enableLogging($websiteId);

        $response = $this->httpClient->get($this->getFindShipmentUri($shipmentId, $websiteId));
        $body = $this->httpClient->readResponse($response);

        return $body && is_array($body) ? $body : null;
    }

    /**
     * @param string $shipmentId
     * @param int $websiteId
     * @return string
     * @throws \InvalidArgumentException
     */
    private function getFindShipmentUri(string $shipmentId, int $websiteId): string
    {
        if (!$this->configEndpoint->getEndpointShipment($websiteId)) {
            throw new \InvalidArgumentException(__('Shipment Endpoint is not set.'));
        }
        return $this->configEndpoint->getEndpointShipment($websiteId) . $shipmentId . '?$expand=Details,Packages';
    }

    /**
     * @param int $websiteId
     * @return void
     * @throws \InvalidArgumentException
     */
    private function authenticate(int $websiteId): void
    {
        if (!$this->configEndpoint->getEndpointLogin($websiteId)) {
            throw new \InvalidArgumentException(__('Login Endpoint is not set.'));
        }

        if (!$this->isAuthorized) {
            $result = $this->httpClient->post(
                $this->configEndpoint->getEndpointLogin($websiteId),
                [
                    'name' => $this->configCredentials->getApiAuthName($websiteId),
                    'password' => $this->configCredentials->getApiAuthPassword($websiteId),
                    'company' => $this->configCredentials->getApiAuthCompany($websiteId)
                ]
            );

            $responseMessage = $result->getBody()->getContents();
            if (preg_match('/Invalid credentials/i', $responseMessage)) {
                $this->isAuthorized = false;
                throw new \Candela\Acumatica\Exception\NotAuthenticated(__('Invalid credentials'));
            }

            $this->isAuthorized = true;
        }
    }

    /**
     * @param int $websiteId
     * @return void
     */
    private function enableLogging(int $websiteId): void
    {
        if (!$this->isLoggingEnabled && $this->configGeneral->isLoggingEnabled($websiteId)) {
            $this->httpClient->addDefaultLogger();
            $this->isLoggingEnabled = true;
        }
    }

    public function logout(int $websiteId = null):void
    {
        $endpoint = $this->configEndpoint->getEndpointLogout($websiteId);
        if (empty($endpoint) || $endpoint === null) {
            throw new \InvalidArgumentException(__('Logout Endpoint is not set.'));
        }

        try {
            $this->httpClient->post($endpoint);
            $this->isAuthorized = false;
        } catch (\Exception $exception) {
            $this->logger->notice($exception->getMessage());
        } finally {
            $this->logger->notice('Logout from acumatica account');
        }
    }
}
