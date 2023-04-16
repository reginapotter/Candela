<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Service\HandlerProcessor\Customer;

use Magento\Customer\Api\AddressRepositoryInterface;
use Magento\Customer\Api\Data\AddressInterface;
use Magento\Customer\Api\Data\CustomerInterface;
use Magento\Customer\Api\GroupRepositoryInterface;
use Candela\Acumatica\Model\Config\AddressTypeConfig;
use Candela\Acumatica\Model\Config\CustomerClass;
use Magento\Framework\Exception\LocalizedException;

class Data implements \Candela\Acumatica\Service\HandlerProcessor\Customer\CustomerDataInterface
{
    /**
     * @var AddressRepositoryInterface
     */
    private AddressRepositoryInterface $customerAddressRepository;

    /**
     * @var GroupRepositoryInterface
     */
    protected GroupRepositoryInterface $groupRepository;

    /**
     * @var array
     */
    private $defaultCustomerData = [
        'Status' => [
            'value' => 'Active'
        ],
        'Terms' => [
            'value' => 'PREPAID'
        ]
    ];

    /**
     * @var AddressTypeConfig
     */
    private AddressTypeConfig $addressTypeConfig;

    /** @var CustomerClass  */
    private CustomerClass $customerClass;



    /**
     * Data constructor.
     * @param AddressRepositoryInterface $customerAddressRepository
     * @param AddressTypeConfig $addressTypeConfig
     * @param GroupRepositoryInterface $groupRepository
     * @param CustomerClass $customerClass
     */
    public function __construct(
        AddressRepositoryInterface $customerAddressRepository,
        AddressTypeConfig $addressTypeConfig,
        GroupRepositoryInterface $groupRepository,
        CustomerClass $customerClass
    ) {
        $this->customerAddressRepository = $customerAddressRepository;
        $this->addressTypeConfig = $addressTypeConfig;
        $this->groupRepository = $groupRepository;
        $this->customerClass = $customerClass;
    }


    /**
     * @param $groupId
     * @return string
     */
    public function getGroupName($groupId): string
    {
        try {
            $group = $this->groupRepository->getById($groupId);
        } catch (LocalizedException $e) {
        }

        return $group->getCode();
    }

    /**
     * @param CustomerInterface $customer
     * @return array
     */
    public function prepareCustomerData(CustomerInterface $customer): array
    {
        $customerData = [];
        $customerData['isGuest'] = false;
        $customerData['AddressType']['value'] = $this->addressTypeConfig->getDefault((int)$customer->getWebsiteId());

        $billingAddress = false;
        $shippingAddress = false;
        try {
            $billingAddress = $this->customerAddressRepository->getById($customer->getDefaultBilling());
            $shippingAddress = $this->customerAddressRepository->getById($customer->getDefaultShipping());
        } catch (\Magento\Framework\Exception\LocalizedException $exception) {
        }

        /**
         * Candela Team - Push the customer group to a corresponding Customer Class on Acumatica
         * during Customer sync
         * related Jira task: TT-55
         */

        //set DEFAULT as a default class
        $customerData['CustomerClass']['value'] = "DEFAULT";
        $customerGroupId = $customer->getGroupId();
        $customerGroupCode = $this->getGroupName($customerGroupId);

        $customerGroupSync = $this->customerClass->getCustomerClass();
        if ($customerGroupSync) {
            foreach ($customerGroupSync as $value) {
                $group = $value['customerGroup'];
                $class = $value['classAcumatica'];

                // if the customer group is configured to be sync, add the corresponding customer class
                if ($customerGroupCode === $group) {
                    $customerData['CustomerClass']['value'] = $class;
                    break;
                }
            }
        }

        /**
         * Candela - Push tax-exempt data to Acumatica, if the customer is tax-exempt
         * Tax-exempt attributes are created in Tormach_TaxExempt module
         * Ticket: TT-191


        if($customer->getCustomAttribute('is_tax_exempt') &&
            $customer->getCustomAttribute('is_tax_exempt')->getValue()
        ) {
            if($taxExemptNumber = $customer->getCustomAttribute('tax_exempt_id')) {
                $customerData['TaxExemptionNumber']['value'] = $taxExemptNumber->getValue();
            }
            if($taxExemptCertificate = $customer->getCustomAttribute('tax_certificate')) {
                $customerData['TaxExemptCert']['value'] = $this->taxCertificateMediaUrl->getMediaUrl() . $taxExemptCertificate->getValue();
            }
            $customerData['TaxZone']['value'] = 'TAX EXEMPT';
        } else {
            $customerData['TaxExemptionNumber']['value'] = '';
            $customerData['TaxExemptCert']['value'] = '';
            $customerData['TaxZone']['value'] = 'AVALARA';
        }

         * */

        /**
         * Candela - Push customer industry attribute to Acumatica
         * Ticket: TT-198
         */
        if($customer->getCustomAttribute('industry') && $customer->getCustomAttribute('industry')->getValue()) {
            $customerData['CustomerID']['value'] = $customer->getId();
            $customerData['Attributes'][0]['Attribute']['value'] = 'INDUSTRY';
            $customerData['Attributes'][0]['Value']['value'] = $customer->getCustomAttribute('industry')->getValue();
        }

        if (!$billingAddress && !$shippingAddress) {
            $customerData['MainContact']['Email']['value'] = $customer->getEmail();
            $customerData['CustomerName']['value'] = $customer->getFirstname() . ' ' . $customer->getLastname();
            return $customerData;
        }

        if (!$billingAddress && $shippingAddress) {
            $billingAddress = $shippingAddress;
        } elseif ($billingAddress && !$shippingAddress) {
            $shippingAddress = $billingAddress;
        }

        $street = $shippingAddress->getStreet();
        $customerData['CustomerName']['value'] = $this->setCustomerName($customer, $billingAddress);
        $customerData['LocationName']['value'] = $street[0];

        if ($this->addressTypeConfig->getDefault((int)$customer->getWebsiteId())) {
            $customAttributes = $shippingAddress->getCustomAttributes();
            $customerData['AddressType']['value'] = isset($customAttributes['destination_type'])
                ? $customAttributes['destination_type']->getValue()
                : $this->addressTypeConfig->getDefault((int)$customer->getWebsiteId());
        }
        // Set the Main Contact information to the default Billing Address
        $customerData['MainContact'] = $this->getContact($billingAddress, $customer->getEmail());

        // The Billing Contact and Billing Address are always the same as Main Contact
        $customerData['BillingContactSameAsMain']['value'] = true;
        $customerData['BillingAddressSameAsMain']['value'] = true;

        // If the default Shipping Address is different from the default Billing Address,
        // override the Shipping Contact and Shipping Address the Acumatica Customer record
        if ($customer->getDefaultBilling() != $customer->getDefaultShipping() && $shippingAddress) {
            $customerData['ShippingContactSameAsMain']['value'] = false;
            $customerData['ShippingAddressSameAsMain']['value'] = false;
            $customerData['ShippingContact'] = $this->getContact($shippingAddress, $customer->getEmail());
        }


        return array_merge($customerData, $this->defaultCustomerData);
    }




    /**
     * @param CustomerInterface $customer
     * @param \Magento\Customer\Api\Data\AddressInterface $address
     * @return string|null
     */
    private function setCustomerName(
        CustomerInterface $customer,
        AddressInterface $address
    ): string {
        return !empty($address->getCompany()) ?
            $address->getCompany() :
            $customer->getFirstname() . ' ' . $customer->getLastname();
    }

    /**
     * @param \Magento\Customer\Api\Data\AddressInterface $address
     * @param string $email
     * @return array
     */
    private function getContact(AddressInterface $address, string $email): array
    {
        $contactData = [];
        $street = $address->getStreet();
        $contactData['Address']['Attention']['value'] = $address->getFirstname() . ' ' . $address->getLastname();
        $contactData['Address']['AddressLine1']['value'] = $street[0] ?? '';
        $contactData['Address']['AddressLine2']['value'] = $street[1] ?? '';
        $contactData['Address']['City']['value'] = $address->getCity();
        $contactData['Address']['Country']['value'] = $address->getCountryId();
        $contactData['Address']['PostalCode']['value'] = $address->getPostcode();
        $contactData['Address']['State']['value'] = $address->getRegion()->getRegionCode();


        if ($address->getCompany()) {
            $contactData['DisplayName']['value'] = $address->getCompany();
            $contactData['CustomerName']['value'] = $address->getCompany();
            $contactData['JobTitle']['value'] = $address->getFirstname() . ' ' . $address->getLastname();
            $contactData['Attention']['value'] = $address->getFirstname() . ' ' . $address->getLastname();
        } else {
            $contactData['DisplayName']['value'] = $address->getFirstname() . ' ' . $address->getLastname();
            $contactData['CustomerName']['value'] = $address->getFirstname() . ' ' . $address->getLastname();
        }

        $contactData['CompanyName']['value'] = $address->getCompany();
        $contactData['Email']['value'] = $email;
        $contactData['FirstName']['value'] = $address->getFirstname();
        $contactData['LastName']['value'] = $address->getLastname();
        $contactData['MiddleName']['value'] = $address->getMiddlename();
        $contactData['Phone1']['value'] = $address->getTelephone();

        return $contactData;
    }

}
