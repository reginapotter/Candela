<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Service\HandlerProcessor;

use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Sales\Api\Data\OrderAddressInterface;

class CustomerLocation
{
    /**
     * @var \Candela\Acumatica\Platform\Adapter
     */
    private $platformAdapter;

    /**
     * @var \Magento\Customer\Api\AddressRepositoryInterface
     */
    private $addressRepository;

    /**
     * @var \Candela\Acumatica\Service\HandlerProcessor\CustomerLocation\DataInterface
     */
    private $customerLocationData;

    /**
     * @var \Candela\Acumatica\Service\HandlerProcessor\CustomerLocation\OrderDataInterface
     */
    private $customerLocationOrderData;

    /**
     * @var \Magento\Customer\Api\CustomerRepositoryInterface
     */
    private $customerRepository;

    /**
     * @var \Magento\Framework\Event\ManagerInterface
     */
    private $eventManager;


    /**
     * @param \Candela\Acumatica\Platform\Adapter $platformAdapter
     * @param \Magento\Customer\Api\AddressRepositoryInterface $addressRepository
     * @param \Candela\Acumatica\Service\HandlerProcessor\CustomerLocation\DataInterface $customerLocationData
     * @param \Candela\Acumatica\Service\HandlerProcessor\CustomerLocation\OrderDataInterface $customerLocationOrderData
     * @param \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository
     * @param \Magento\Framework\Event\ManagerInterface $eventManager
     */
    public function __construct(
        \Candela\Acumatica\Platform\Adapter $platformAdapter,
        \Magento\Customer\Api\AddressRepositoryInterface $addressRepository,
        \Candela\Acumatica\Service\HandlerProcessor\CustomerLocation\DataInterface $customerLocationData,
        \Candela\Acumatica\Service\HandlerProcessor\CustomerLocation\OrderDataInterface $customerLocationOrderData,
        \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository,
        \Magento\Framework\Event\ManagerInterface $eventManager
    ) {
        $this->platformAdapter = $platformAdapter;
        $this->addressRepository = $addressRepository;
        $this->customerLocationData = $customerLocationData;
        $this->customerLocationOrderData = $customerLocationOrderData;
        $this->customerRepository = $customerRepository;
        $this->eventManager = $eventManager;
    }

    /**
     * @param int $addressId
     * @param int $websiteId
     * @return array
     * @throws \Magento\Framework\Exception\LocalizedException
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Candela\Acumatica\Exception\AcumaticaNoAddressEntityException
     */
    public function syncCustomerLocation(int $addressId, int $websiteId): array
    {
        try {
            $address = $this->addressRepository->getById($addressId);
        } catch (NoSuchEntityException $exception) {
            throw new \Candela\Acumatica\Exception\AcumaticaNoAddressEntityException(__($exception->getMessage()));
        }

        $this->eventManager->dispatch('acumatica_sync_location_before', ['customerId' => $address->getCustomerId()]);

        $customer = $this->customerRepository->getById($address->getCustomerId());
        $customerLocation = [];

        $acumaticaCustomerId = $customer->getCustomAttribute(
            \Candela\Acumatica\Setup\InstallData::ACUMATICA_CUSTOMER_ID
        );

        if ($acumaticaCustomerId) {
            $customerLocationData = $this->customerLocationData->prepareCustomerLocationData(
                $address,
                $customer,
                $websiteId
            );

//            if($customer->getCustomAttribute('is_tax_exempt') &&
//                $customer->getCustomAttribute('is_tax_exempt')->getValue()
//            ) {
//                if($taxExemptNumber = $customer->getCustomAttribute('tax_exempt_id')) {
//                    $customerLocationData['TaxExemptionNumber']['value'] = $taxExemptNumber->getValue();
//                }
//                if($taxExemptCertificate = $customer->getCustomAttribute('tax_certificate')) {
//                    $customerLocationData['TaxExemptCert']['value'] = $this->taxCertificateMediaUrl->getMediaUrl() . $taxExemptCertificate->getValue();
//                }
//                $customerLocationData['TaxZone']['value'] = 'TAX EXEMPT';
//            } else {
//                $customerLocationData['TaxExemptionNumber']['value'] = '';
//                $customerLocationData['TaxExemptCert']['value'] = '';
//                $customerLocationData['TaxZone']['value'] = 'AVALARA';
//            }

            $customerLocation = $this->platformAdapter->createCustomerLocation($customerLocationData, $websiteId);

            $address->setCustomAttribute(
                \Candela\Acumatica\Setup\UpgradeData::ACUMATICA_CUSTOMER_LOCATION_ID,
                $customerLocation['LocationID']['value']
            );
            $this->addressRepository->save($address);
        }

        return $customerLocation;
    }

    /**
     * @param \Magento\Sales\Api\Data\OrderAddressInterface $address
     * @param int $acumaticaCustomerId
     * @param int $websiteId
     * @return array
     */
    public function syncCustomerLocationFromOrder(
        OrderAddressInterface $address,
        int $acumaticaCustomerId,
        int $websiteId
    ): array {
        $customerLocationData = $this->customerLocationOrderData->prepareCustomerLocationData(
            $address,
            $acumaticaCustomerId,
            $websiteId
        );
        $customerLocation = $this->platformAdapter->createCustomerLocation($customerLocationData, $websiteId);

        return $customerLocation;
    }

    /**
     * @param string $locationId
     * @param string $customerAcumaticaId
     * @param int $websiteId
     * @return void
     */
    public function deleteCustomerLocation(string $locationId, string $customerAcumaticaId, int $websiteId): void
    {
        $customerLocation = $this->platformAdapter->getCustomerLocation($locationId, $customerAcumaticaId, $websiteId);

        if ($customerLocation) {
            $customerLocation['Active']['value'] = false;
            $customerLocation['AddressSameAsMain']['value'] = false;
            $customerLocation['ContactSameAsMain']['value'] = false;
            unset($customerLocation['TaxZone']);
            unset($customerLocation['Attention']);
            unset($customerLocation['custom']);
            unset($customerLocation['files']);
            unset($customerLocation['CompanyName']);

            $customerLocation = $this->removeEmptyArrayItems($customerLocation);
            $this->platformAdapter->createCustomerLocation($customerLocation, $websiteId);
        }
    }

    /**
     * @param array $customerLocation
     * @return array
     */
    private function removeEmptyArrayItems(array $customerLocation): array
    {
        return array_filter(
            $customerLocation,
            function ($value) {
                return !(is_array($value) && empty($value));
            }
        );
    }
}
