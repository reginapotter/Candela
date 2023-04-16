<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Service\HandlerProcessor\CustomerLocation;

use Magento\Customer\Api\Data\AddressInterface;
use Magento\Customer\Api\Data\CustomerInterface;

class Data implements \Candela\Acumatica\Service\HandlerProcessor\CustomerLocation\DataInterface
{
    /**
     * @var \Candela\Acumatica\Model\Config\AddressTypeConfig
     */
    private $addressTypeConfig;

    /**
     * @param \Candela\Acumatica\Model\Config\AddressTypeConfig $addressTypeConfig
     */
    public function __construct(
        \Candela\Acumatica\Model\Config\AddressTypeConfig $addressTypeConfig
    ) {
        $this->addressTypeConfig = $addressTypeConfig;
    }

    /**
     * @param \Magento\Customer\Api\Data\AddressInterface $address
     * @param \Magento\Customer\Api\Data\CustomerInterface $customer
     * @param int $websiteId
     * @return array
     */
    public function prepareCustomerLocationData(
        AddressInterface $address,
        CustomerInterface $customer,
        int $websiteId
    ): array {
        $customerLocationData = $this->getAddress($address);

        $customerLocationId = $address->getCustomAttribute(
            \Candela\Acumatica\Setup\UpgradeData::ACUMATICA_CUSTOMER_LOCATION_ID
        );

        if ($customerLocationId) {
            $customerLocationData['LocationID']['value'] = $customerLocationId->getValue();
        }
        $customerLocationData['Active']['value'] = true;
        $customerLocationData['ShippingRule']['value'] = 'Back Order Allowed';

        $acumaticaCustomerId = $customer->getCustomAttribute(
            \Candela\Acumatica\Setup\InstallData::ACUMATICA_CUSTOMER_ID
        );
        $customerLocationData['Customer']['value'] = $acumaticaCustomerId->getValue();

        $street = $address->getStreet();
        $customerLocationData['LocationName']['value'] = $street[0] ?? '';

        $customerLocationData['AddressSameAsMain']['value'] = false;
        $customerLocationData['ContactSameAsMain']['value'] = false;
        $customerLocationData['LocationContact'] = $this->getLocationContact($address, $customer);

        $customAttributes = $address->getCustomAttributes();
        if ($this->addressTypeConfig->isEnabled($websiteId)) {
            $customerLocationData['AddressType']['value'] = $this->setCustomerLocationAddressType($customAttributes);
        }

        return $customerLocationData;
    }

    /**
     * @param array $customAttributes
     * @return string
     */
    private function setCustomerLocationAddressType(array $customAttributes): string
    {
        if (empty($customAttributes['destination_type'])) {
            return !empty($this->addressTypeConfig->getDefault()) ? $this->addressTypeConfig->getDefault() : 'Commercial';
        }

        return !empty($customAttributes['destination_type']->getValue()) ?
            $customAttributes['destination_type']->getValue() :
            'Commercial';
    }

    /**
     * @param \Magento\Customer\Api\Data\AddressInterface $address
     * @return array
     */
    private function getAddress(AddressInterface $address): array
    {
        $customerLocationData = [];
        $street = $address->getStreet();
        $customerLocationData['AddressLine1']['value'] = $street[0] ?? '';
        $customerLocationData['AddressLine2']['value'] = $street[1] ?? '';
        $customerLocationData['CompanyName']['value'] = $address->getCompany();
        $customerLocationData['City']['value'] = $address->getCity();
        $customerLocationData['Country']['value'] = $address->getCountryId();
        $customerLocationData['PostalCode']['value'] = $address->getPostcode();
        $customerLocationData['State']['value'] = $address->getRegion()->getRegionCode();
        $customerLocationData['Attention']['value'] = $address->getFirstname() . ' ' . $address->getLastname();
        $customerLocationData['Phone']['value'] = $address->getTelephone();

        return $customerLocationData;
    }

    /**
     * @param \Magento\Customer\Api\Data\AddressInterface $address
     * @param \Magento\Customer\Api\Data\CustomerInterface $customer
     * @return array
     */
    private function getLocationContact(AddressInterface $address, CustomerInterface $customer): array
    {
        $locationContactData = [];
        $locationContactData['Active']['value'] = true;
        $locationContactData['Email']['value'] = $customer->getEmail();
        $locationContactData['DisplayName']['value'] = $address->getFirstname() . ' ' . $address->getLastname();
        $locationContactData['CompanyName']['value'] = $address->getCompany();
        $locationContactData['FirstName']['value'] = $address->getFirstname();
        $locationContactData['LastName']['value'] = $address->getLastname();
        $locationContactData['Phone1']['value'] = $address->getTelephone();

        $street = $address->getStreet();
        $locationContactData['Address']['AddressLine1']['value'] = $street[0] ?? '';
        $locationContactData['Address']['AddressLine2']['value'] = $street[1] ?? '';
        $locationContactData['Address']['City']['value'] = $address->getCity();
        $locationContactData['Address']['Country']['value'] = $address->getCountryId();
        $locationContactData['Address']['PostalCode']['value'] = $address->getPostcode();
        $locationContactData['Address']['State']['value'] = $address->getRegion() ?
            $address->getRegion()->getRegionCode() :
            '';

        return $locationContactData;
    }
}
