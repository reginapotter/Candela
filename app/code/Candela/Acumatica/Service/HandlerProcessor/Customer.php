<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Service\HandlerProcessor;

use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Sales\Api\Data\OrderInterface;

class Customer
{
    /**
     * @var \Candela\Acumatica\Platform\Adapter
     */
    private $platformAdapter;

    /**
     * @var \Magento\Customer\Api\CustomerRepositoryInterface
     */
    private $customerRepository;

    /**
     * @var \Candela\Acumatica\Service\HandlerProcessor\Customer\CustomerDataInterface
     */
    private $customerData;

    /**
     * @var \Candela\Acumatica\Service\HandlerProcessor\Customer\CustomerOrderDataInterface
     */
    private $customerOrderData;

    /**
     * @var \Candela\Acumatica\Service\HandlerProcessor\CustomerLocation
     */
    private $customerLocationHandler;

    /**
     * @var \Magento\Customer\Api\AddressRepositoryInterface
     */
    private $addressRepository;

    /**
     * @param \Candela\Acumatica\Platform\Adapter $platformAdapter
     * @param \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository
     * @param \Candela\Acumatica\Service\HandlerProcessor\Customer\CustomerDataInterface $customerData
     * @param \Candela\Acumatica\Service\HandlerProcessor\Customer\CustomerOrderDataInterface $customerOrderData
     * @param \Candela\Acumatica\Service\HandlerProcessor\CustomerLocation $customerLocationHandler
     * @param \Magento\Customer\Api\AddressRepositoryInterface $addressRepository
     */
    public function __construct(
        \Candela\Acumatica\Platform\Adapter $platformAdapter,
        \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository,
        \Candela\Acumatica\Service\HandlerProcessor\Customer\CustomerDataInterface $customerData,
        \Candela\Acumatica\Service\HandlerProcessor\Customer\CustomerOrderDataInterface $customerOrderData,
        \Candela\Acumatica\Service\HandlerProcessor\CustomerLocation $customerLocationHandler,
        \Magento\Customer\Api\AddressRepositoryInterface $addressRepository
    ) {
        $this->platformAdapter = $platformAdapter;
        $this->customerRepository = $customerRepository;
        $this->customerData = $customerData;
        $this->customerOrderData = $customerOrderData;
        $this->customerLocationHandler = $customerLocationHandler;
        $this->addressRepository = $addressRepository;
    }

    /**
     * @param \Magento\Sales\Api\Data\OrderInterface $order
     * @param int $websiteId
     * @return array
     * @throws \Magento\Framework\Exception\LocalizedException
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function syncCustomerFromOrder(\Magento\Sales\Api\Data\OrderInterface $order, int $websiteId): array
    {
        $customerData = $this->customerOrderData->prepareCustomerData($order);
        $customerData['order'] = $order;

        // First try to sync locations from the order that are part of the customer addressbook
        // If this is either a guest order, or if the addresses on the order are not in the customer
        // address book, the order addresses will be synced within submitCustomer as guest addresses.
        if ($order->getCustomerId()) {
            $locations = $this->syncLocationsFromOrder($order, $websiteId);
            $customerData['locationId'] = $locations['shipping'] ?? null;
        }

        $customerId = !empty($order->getCustomerId()) ? (int)$order->getCustomerId() : null;
        return $this->submitCustomer($customerData, $websiteId, $customerId);
    }

    /**
     * @param int $customerId
     * @param int $websiteId
     * @return array
     * @throws \Magento\Framework\Exception\LocalizedException
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function syncCustomer(int $customerId, int $websiteId): array
    {
        $customer = $this->customerRepository->getById($customerId);
        $customerData = $this->customerData->prepareCustomerData($customer);

        return $this->submitCustomer($customerData, $websiteId, $customerId);
    }

    /**
     * @param array $customerData
     * @param int $websiteId
     * @return array
     * @throws \Magento\Framework\Exception\LocalizedException
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    private function submitCustomer(array $customerData, int $websiteId, ?int $customerId = null): array
    {
        $locationId = $customerData['locationId'] ?? null;
        unset($customerData['locationId']);

        $order = $customerData['order'] ?? null;
        unset($customerData['order']);

        $customerData = $this->setCustomerIfExist($customerData, $websiteId, $customerId);
        $acumaticaCustomer = $this->platformAdapter->createCustomer($customerData, $websiteId);

        if (!isset($acumaticaCustomer['CustomerID']['value'])) {
            throw new NoSuchEntityException(__('Customer does not exist and was not created in Acumatica.'));
        }

        if (empty($locationId) && $order) {
            $locations = $this->syncGuestLocationsFromOrder(
                $order,
                (int)$acumaticaCustomer['CustomerID']['value'],
                $websiteId
            );
            $acumaticaCustomer['LocationID']['value'] = $locations['shipping']['LocationID']['value'];
        } else {
            $acumaticaCustomer['LocationID']['value'] = $locationId;
        }

        if (!$customerData['isGuest']) {
            $this->saveCustomerId($acumaticaCustomer['CustomerID']['value'], $customerId);
        }

        return $acumaticaCustomer;
    }

    /**
     * @param \Magento\Sales\Api\Data\OrderInterface $order
     * @param int $acumaticaCustomerId
     * @param int $websiteId
     * @return array
     */
    private function syncGuestLocationsFromOrder(OrderInterface $order, int $acumaticaCustomerId, int $websiteId): array
    {
        $locations = [];
        $locations['shipping'] = $this->customerLocationHandler->syncCustomerLocationFromOrder(
            $order->getShippingAddress() ? $order->getShippingAddress() : $order->getBillingAddress(),
            $acumaticaCustomerId,
            $websiteId
        );
        $locations['billing'] = $this->customerLocationHandler->syncCustomerLocationFromOrder(
            $order->getBillingAddress(),
            $acumaticaCustomerId,
            $websiteId
        );

        return $locations;
    }

    /**
     * @param \Magento\Sales\Api\Data\OrderInterface $order
     * @param int $websiteId
     * @return array
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    private function syncLocationsFromOrder(\Magento\Sales\Api\Data\OrderInterface $order, int $websiteId): array
    {
        $locations = [];

        $orderShippingAddressId = $order->getShippingAddress()
            ? (int)$order->getShippingAddress()->getCustomerAddressId()
            : null;
        $orderBillingAddressId = $order->getBillingAddress()
            ? (int)$order->getBillingAddress()->getCustomerAddressId()
            : null;

        if ($orderShippingAddressId && !$orderBillingAddressId) {
            $orderBillingAddressId = $orderShippingAddressId;
        }

        if ($orderBillingAddressId && !$orderShippingAddressId) {
            $orderShippingAddressId = $orderBillingAddressId;
        }

        if ($orderShippingAddressId) {
            $shippingAddress = $this->addressRepository->getById($orderShippingAddressId);
            $customerLocationId = $shippingAddress->getCustomAttribute(
                \Candela\Acumatica\Setup\UpgradeData::ACUMATICA_CUSTOMER_LOCATION_ID
            );

            if ($customerLocationId) {
                $locations['shipping'] = $customerLocationId->getValue();
            } else {
                $customerLocation = $this->customerLocationHandler->syncCustomerLocation(
                    $orderShippingAddressId,
                    $websiteId
                );

                if (!isset($customerLocation['LocationID'])) {
                    throw  new LocalizedException(
                        __('Error during synchronization order/customer address. Address ID: ' . $orderBillingAddressId)
                    );
                }
                $locations['shipping'] = $customerLocation['LocationID']['value'];
            }

            $billingAddress = $this->addressRepository->getById($orderBillingAddressId);
            $customerLocationId = $billingAddress->getCustomAttribute(
                \Candela\Acumatica\Setup\UpgradeData::ACUMATICA_CUSTOMER_LOCATION_ID
            );

            if ($customerLocationId) {
                $locations['billing'] = $customerLocationId->getValue();
            } else {
                $customerLocation = $this->customerLocationHandler->syncCustomerLocation(
                    $orderBillingAddressId,
                    $websiteId
                );
                if (!isset($customerLocation['LocationID'])) {
                    throw  new LocalizedException(
                        __('Error during synchronization order/customer address. Address ID: ' . $orderBillingAddressId)
                    );
                }
                $locations['billing'] = $customerLocation['LocationID']['value'];
            }
        }

        return $locations;
    }

    /**
     * @param array $customerData
     * @param int $websiteId
     * @param int|null $customerId
     * @return array
     * @throws \Magento\Framework\Exception\LocalizedException
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    private function setCustomerIfExist(array $customerData, int $websiteId, ?int $customerId): array
    {
        if (!$customerData['isGuest']) {
            $customerData = $this->setCustomerIdIfExist($customerData, $websiteId, $customerId);
        }

        if (!isset($customerData['CustomerID']['value'])) {
            $customerData = $this->setAcumaticaEntityIdIfExist($customerData, $websiteId);
        }

        return $customerData;
    }

    /**
     * @param array $customerData
     * @param int $websiteId
     * @param int|null $customerId
     * @return array
     * @throws \Magento\Framework\Exception\LocalizedException
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    private function setCustomerIdIfExist(array $customerData, int $websiteId, ?int $customerId): array
    {
        try {
            $customer = $this->customerRepository->get($customerData['MainContact']['Email']['value'], $websiteId);
        } catch (\Magento\Framework\Exception\NoSuchEntityException $exception) {
            if ($customerId) {
                $customer = $this->customerRepository->getById($customerId);
            } else {
                throw new NoSuchEntityException(__($exception->getMessage()));
            }
        }

        $acumaticaCustomerId = $customer->getCustomAttribute(
            \Candela\Acumatica\Setup\InstallData::ACUMATICA_CUSTOMER_ID
        );
        if ($acumaticaCustomerId && $acumaticaCustomerId->getValue()) {
            $customerData['CustomerID']['value'] = $acumaticaCustomerId->getValue();
        }

        return $customerData;
    }

    /**
     * @param array $customerData
     * @param int $websiteId
     * @return array
     */
    private function setAcumaticaEntityIdIfExist(array $customerData, int $websiteId): array
    {
        $existingAcumaticaCustomer = $this->platformAdapter->findCustomer(
            $customerData['MainContact']['Email']['value'],
            $websiteId
        );

        if (isset($existingAcumaticaCustomer['id'])) {
            $customerData['id'] = $existingAcumaticaCustomer['id'];
        }

        return $customerData;
    }

    /**
     * @param string $acumaticaCustomerId
     * @param int $customerId
     * @return void
     * @throws \Magento\Framework\Exception\InputException
     * @throws \Magento\Framework\Exception\LocalizedException
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\State\InputMismatchException
     */
    private function saveCustomerId(string $acumaticaCustomerId, int $customerId): void
    {
        $customer = $this->customerRepository->getById($customerId);
        $customer->setCustomAttribute(
            \Candela\Acumatica\Setup\InstallData::ACUMATICA_CUSTOMER_ID,
            $acumaticaCustomerId
        );
        $this->customerRepository->save($customer);
    }
}
