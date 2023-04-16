<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Helper;

class Error
{
    /**
     * @var \Magento\Framework\Serialize\Serializer\Json
     */
    private $jsonSerializer;

    /**
     * @var \Magento\Customer\Api\CustomerRepositoryInterface
     */
    private $customerRepository;

    /**
     * @var \Magento\Customer\Api\AddressRepositoryInterface
     */
    private $addressRepository;

    /**
     * @var \Magento\Framework\UrlInterface
     */
    private $urlInterface;

    /**
     * @param \Magento\Framework\Serialize\Serializer\Json $jsonSerializer
     * @param \Magento\Framework\UrlInterface $urlInterface
     * @param \Magento\Customer\Api\AddressRepositoryInterface $addressRepository
     * @param \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository
     */
    public function __construct(
        \Magento\Framework\Serialize\Serializer\Json $jsonSerializer,
        \Magento\Framework\UrlInterface $urlInterface,
        \Magento\Customer\Api\AddressRepositoryInterface $addressRepository,
        \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository
    ) {
        $this->jsonSerializer = $jsonSerializer;
        $this->urlInterface = $urlInterface;
        $this->addressRepository = $addressRepository;
        $this->customerRepository = $customerRepository;
    }

    /**
     * @param string|null $jsonValue
     * @return string
     */
    public function formatError(?string $jsonValue, bool $email = false): string
    {
        $message = [];
        $jsonValue = str_replace('Internal Server Error: 500. ', '', $jsonValue);
        try {
            $error = $this->jsonSerializer->unserialize($jsonValue);
        } catch (\InvalidArgumentException $argumentException) {
            return __('Magento Exception: ') . $jsonValue;
        }

        if (!$email) {
            $message[] = __('Acumatica Message: ') . $error['message'];
            $message[] = __('Acumatica Exception: ') . $error['exceptionMessage'];
        } else {
            $message[] = __('<b>Acumatica Message:</b>') . $error['message'];
            $message[] = __('<b>Acumatica Exception:</b> ') . $error['exceptionMessage'];
        }


        return implode('<br />', $message);
    }

    /**
     * @param string|null $jsonValue
     * @return string
     */
    public function formatData(?string $jsonValue): string
    {
        try {
            $data = $this->jsonSerializer->unserialize($jsonValue);
        } catch (\InvalidArgumentException $argumentException) {
            return $jsonValue;
        }

        $cellValue = [];
        if (isset($data['orderId'])) {
            $incrementOrderId = isset($data['magentoOrderId']) ? $data['magentoOrderId'] : null;
            $cellValue[] = $this->getViewOrderUrl((int)$data['orderId'], $incrementOrderId);
        }

        if (isset($data['customerId'])) {
            $email = isset($data['customerEmail']) ? $data['customerEmail'] : null;
            $cellValue[] = $this->getViewCustomerUrl((int)$data['customerId'], $email);
        }

        if (isset($data['addressId'])) {
            $cellValue[] = $this->getViewCustomerUrlByAddress((int)$data['addressId']);
        }


        return implode('<br />', $cellValue);
    }

    /**
     * @param string|null $jsonValue
     * @return string
     */
    public function formatEmailData(?string $jsonValue): string
    {
        try {
            $data = $this->jsonSerializer->unserialize($jsonValue);
        } catch (\InvalidArgumentException $argumentException) {
            return $jsonValue;
        }

        $cellValue = [];
        if (isset($data['orderId'])) {
            $incrementOrderId = isset($data['magentoOrderId']) ? $data['magentoOrderId'] : null;
            $cellValue[] = $this->getViewOrder((int)$data['orderId'], $incrementOrderId);
        }

        if (isset($data['customerId'])) {
            $email = isset($data['customerEmail']) ? $data['customerEmail'] : null;
            $cellValue[] = $this->getViewCustomer((int)$data['customerId'], $email);
        }

        if (isset($data['addressId'])) {
            $cellValue[] = $this->getViewCustomerUrlByAddress((int)$data['addressId']);
        }


        return implode('<br />', $cellValue);
    }

    /**
     * @param int $orderId
     * @param string|null $incrementOrderId
     * @return string
     */
    private function getViewOrderUrl(int $orderId, ?string $incrementOrderId): string
    {
        $label = !empty($incrementOrderId) ? $incrementOrderId : __('View Order');
        $url = $this->urlInterface->getUrl('sales/order/view/', ['order_id' => $orderId, '_secure' => true]);
        return sprintf('Order: <a href="%s" target="_blank">%s</a>', $url, $label);
    }

    /**
     * @param int $orderId
     * @param string|null $incrementOrderId
     * @return string
     */
    private function getViewOrder(int $orderId, ?string $incrementOrderId): string
    {
        $label = !empty($incrementOrderId) ? $incrementOrderId : __('N/A');
        return sprintf('Order Number: %s; Order ID: %s', $label, $orderId);
    }

    /**
     * @param int $customerId
     * @param string|null $customerEmail
     * @return string
     */
    private function getViewCustomerUrl(int $customerId, ?string $customerEmail): string
    {
        $label = !empty($customerEmail) ? $customerEmail : __('View Customer');
        $url = $this->urlInterface->getUrl('customer/index/edit/id', ['id' => $customerId, '_secure' => true]);
        return sprintf('Customer: <a href="%s" target="_blank">%s</a>', $url, $label);
    }

    /**
     * @param int $customerId
     * @param string|null $customerEmail
     * @return string
     */
    private function getViewCustomer(int $customerId, ?string $customerEmail): string
    {
        $label = !empty($customerEmail) ? $customerEmail : __('N/A');
        return sprintf('Customer Email: %s; Customer ID: %s', $label, $customerId);
    }

    /**
     * @param int $customerAddressId
     * @return string
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    private function getViewCustomerUrlByAddress(int $customerAddressId): string
    {
        try {
            $address = $this->addressRepository->getById($customerAddressId);
        } catch (\Magento\Framework\Exception\LocalizedException $localizedException) {
            return sprintf('Customer Address ID: %s', $customerAddressId);
        }

        try {
            $customer = $this->customerRepository->getById($address->getCustomerId());
        } catch (\Magento\Framework\Exception\NoSuchEntityException $localizedException) {
            return sprintf('Customer Address ID: %s', $customerAddressId);
        }


        $url = $this->urlInterface->getUrl(
            'customer/index/edit/id',
            ['id' => $address->getCustomerId(), '_secure' => true]
        );
        return sprintf('Customer: <a href="%s" target="_blank">%s</a>', $url, $customer->getEmail());
    }
}
