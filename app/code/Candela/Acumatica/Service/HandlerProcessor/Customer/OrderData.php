<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Service\HandlerProcessor\Customer;
use Magento\Customer\Api\AddressRepositoryInterface;
use Magento\Customer\Api\GroupRepositoryInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Quote\Api\CartRepositoryInterface;
use Magento\Sales\Api\Data\OrderAddressInterface;
use Magento\Sales\Api\Data\OrderInterface;
use Magento\Store\Model\StoreManagerInterface;
use Candela\Acumatica\Model\Config\AddressTypeConfig;
use Candela\Acumatica\Model\Config\CustomerClass;
use Magento\Customer\Api\CustomerRepositoryInterface;

class OrderData implements \Candela\Acumatica\Service\HandlerProcessor\Customer\CustomerOrderDataInterface
{
    /**
     * @var CartRepositoryInterface
     */
    private CartRepositoryInterface $quoteRepository;

    /**
     * @var AddressRepositoryInterface
     */
    private AddressRepositoryInterface $customerAddressRepository;
    /**
     * @var CustomerClass
     */
    private CustomerClass $customerClass;

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

    /**
     * @var StoreManagerInterface
     */
    private StoreManagerInterface $storeManager;

    /**
     * @var GroupRepositoryInterface
     */
    protected GroupRepositoryInterface $groupRepository;

    /** @var CustomerRepositoryInterface  */
    private CustomerRepositoryInterface $customerRepository;

    /**
     * OrderData constructor.
     * @param CartRepositoryInterface $quoteRepository
     * @param AddressRepositoryInterface $customerAddressRepository
     * @param AddressTypeConfig $addressTypeConfig
     * @param StoreManagerInterface $storeManager
     * @param GroupRepositoryInterface $groupRepository
     * @param CustomerClass $customerClass
     * @param CustomerRepositoryInterface $customerRepository
     */
    public function __construct(
        CartRepositoryInterface $quoteRepository,
        AddressRepositoryInterface $customerAddressRepository,
        AddressTypeConfig $addressTypeConfig,
        StoreManagerInterface $storeManager,
        GroupRepositoryInterface $groupRepository,
        CustomerClass $customerClass,
        CustomerRepositoryInterface $customerRepository
    ) {
        $this->quoteRepository = $quoteRepository;
        $this->customerAddressRepository = $customerAddressRepository;
        $this->addressTypeConfig = $addressTypeConfig;
        $this->storeManager = $storeManager;
        $this->groupRepository = $groupRepository;
        $this->customerClass = $customerClass;
        $this->customerRepository = $customerRepository;
    }

    /**
     * @param \Magento\Sales\Api\Data\OrderInterface $order
     * @return array
     * @throws \Magento\Framework\Exception\LocalizedException
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function prepareCustomerData(
        OrderInterface $order
    ): array {
        $websiteId = (int)$this->storeManager->getStore($order->getStoreId())->getWebsiteId();
        $billingAddress = $order->getBillingAddress();
        $shippingAddress = $order->getShippingAddress();

        if ($shippingAddress === null) {
            $shippingAddress = $billingAddress;
        }

        $customerData = [];
        $customerData['isGuest'] = $order->getCustomerIsGuest();
        $customerData['MainContact'] = $this->getAddress($billingAddress, $order->getCustomerEmail());
        if ($order->getCustomerFirstname()) {
            $customerData['CustomerName']['value'] = $order->getCustomerFirstname() . ' ' . $order->getCustomerLastname();
        } else {
            $customerData['CustomerName']['value'] = $billingAddress->getFirstname() . ' ' . $billingAddress->getLastname();
        }


        if ($this->addressTypeConfig->isEnabled($websiteId)) {
            $extensionAttributes = $shippingAddress->getExtensionAttributes();
            $customerData['AddressType']['value'] = 'Commercial';
        }

        if ($order->getCustomerIsGuest()) {
            $customerData['LocationName']['value'] = $shippingAddress->getStreetLine(1);

            $customerData['ShippingContact'] = $this->getAddress($shippingAddress, $order->getCustomerEmail());
            $customerData['Contact'] = $this->getAddress($shippingAddress, $order->getCustomerEmail());
        }

        if ($billingAddress->getCustomerAddressId()) {
            $address = $this->customerAddressRepository->getById($billingAddress->getCustomerAddressId());
            $address->setIsDefaultBilling(true);
            $this->customerAddressRepository->save($address);
        }

        try {
            $quote = $this->quoteRepository->get($order->getQuoteId());
        } catch (\Magento\Framework\Exception\NoSuchEntityException $e) {
            $quote = null;
        }

        if ($quote !== null && $quote->getId() && $quote->getShippingAddress()) {
            $customerData['ShippingContactSameAsMain']['value'] = $quote->getShippingAddress()->getSameAsBilling();
        }

        /**
         * Candela Team - Push the customer group to a corresponding Customer Class on Acumatica
         * during Order sync
         * related Jira task: TT-55
         */

        //set DEFAULT as a default class
        $customerData['CustomerClass']['value'] = "DEFAULT";
//        $customerGroupId = $order->getCustomerGroupId();
//        $customerGroupCode = $this->getGroupName($customerGroupId);
//
//        $customerGroupSync = $this->customerClass->getCustomerClass();
//        if ($customerGroupSync) {
//            foreach ($customerGroupSync as $value) {
//                $group = $value['customerGroup'];
//                $class = $value['classAcumatica'];
//
//                // if the customer group is configured to be sync, add the corresponding customer class
//                if ($customerGroupCode === $group) {
//                    $customerData['CustomerClass']['value'] = $class;
//                    break;
//                }
//            }
//        }

        /**
         * Candela - Push tax-exempt data to Acumatica, if the customer is tax-exempt
         * Tax-exempt attributes are created in Tormach_TaxExempt module
         * Ticket: TT-191


        $customer = $this->customerRepository->getById($order->getCustomerId());
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
         */
        return array_merge($customerData, $this->defaultCustomerData);
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
     * @param \Magento\Sales\Api\Data\OrderAddressInterface $address
     * @param string $email
     * @return array
     */
    private function getAddress(OrderAddressInterface $address, string $email): array
    {
        $customerData = [];
        $customerData['Address']['AddressLine1']['value'] = $address->getStreetLine(1);
        $customerData['Address']['AddressLine2']['value'] = $address->getStreetLine(2);
        $customerData['Address']['City']['value'] = $address->getCity();
        $customerData['Address']['Country']['value'] = $address->getCountryId();
        $customerData['Address']['PostalCode']['value'] = $address->getPostcode();
        $customerData['Address']['State']['value'] = $address->getRegionCode();
        $customerData['DisplayName']['value'] = $address->getFirstname() . ' ' . $address->getLastname();
        $customerData['Attention']['value'] = $address->getFirstname() . ' ' . $address->getLastname();
        $customerData['CompanyName']['value'] = $address->getCompany();
        $customerData['Email']['value'] = $email;
        $customerData['FirstName']['value'] = $address->getFirstname();
        $customerData['LastName']['value'] = $address->getLastname();
        $customerData['MiddleName']['value'] = $address->getMiddlename();
        $customerData['Phone1']['value'] = $address->getTelephone();
        $customerData['Position']['value'] = $address->getFirstname() . ' ' . $address->getLastname();

        return $customerData;
    }
}
