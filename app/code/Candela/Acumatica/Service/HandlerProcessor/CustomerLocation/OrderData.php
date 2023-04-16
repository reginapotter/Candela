<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Service\HandlerProcessor\CustomerLocation;

use Magento\Sales\Api\Data\OrderAddressInterface;

class OrderData implements \Candela\Acumatica\Service\HandlerProcessor\CustomerLocation\OrderDataInterface
{
    /**
     * @param \Magento\Sales\Api\Data\OrderAddressInterface $address
     * @param int $acumaticaCustomerId
     * @param int $websiteId
     * @return array
     */
    public function prepareCustomerLocationData(OrderAddressInterface $address, int $acumaticaCustomerId, int $websiteId): array
    {
        $customerLocationData = $this->getAddress($address);

        $customerLocationData['Active']['value'] = true;
        $customerLocationData['ShippingRule']['value'] = 'Back Order Allowed';
        $customerLocationData['Customer']['value'] = $acumaticaCustomerId;

        $street = $address->getStreet();
        $customerLocationData['LocationName']['value'] = $street[0] ?? '';

        $customerLocationData['AddressSameAsMain']['value'] = false;
        $customerLocationData['ContactSameAsMain']['value'] = false;



        return $customerLocationData;
    }

    /**
     * @param \Magento\Sales\Api\Data\OrderAddressInterface $address
     * @return array
     */
    private function getAddress(OrderAddressInterface $address): array
    {
        $customerLocationData = [];
        $street = $address->getStreet();
        $customerLocationData['AddressLine1']['value'] = $street[0] ?? '';
        $customerLocationData['AddressLine2']['value'] = $street[1] ?? '';
        $customerLocationData['CompanyName']['value'] = $address->getCompany();
        $customerLocationData['City']['value'] = $address->getCity();
        $customerLocationData['Country']['value'] = $address->getCountryId();
        $customerLocationData['PostalCode']['value'] = $address->getPostcode();
        $customerLocationData['State']['value'] = $address->getRegionCode();
        $customerLocationData['Attention']['value'] = $address->getFirstname() . ' ' . $address->getLastname();
        $customerLocationData['Phone']['value'] = $address->getTelephone();

        return $customerLocationData;
    }
}
