<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Service\HandlerProcessor\SalesOrder;

class Data implements \Candela\Acumatica\Service\HandlerProcessor\SalesOrder\SalesOrderDataInterface
{
    /**
     * @var \Candela\Acumatica\Service\HandlerProcessor\Payment\PaymentDataInterface
     */
    private $paymentData;

    /**
     * @var \Candela\Acumatica\Model\Config\General
     */
    private $configGeneral;

    /**
     * @param \Candela\Acumatica\Service\HandlerProcessor\Payment\PaymentDataInterface $paymentData
     * @param \Candela\Acumatica\Model\Config\General $configGeneral
     */
    public function __construct(
        \Candela\Acumatica\Service\HandlerProcessor\Payment\PaymentDataInterface $paymentData,
        \Candela\Acumatica\Model\Config\General $configGeneral
    ) {
        $this->paymentData = $paymentData;
        $this->configGeneral = $configGeneral;
    }

    /**
     * @param \Magento\Sales\Api\Data\OrderInterface $order
     * @param int $websiteId
     * @return array
     */
    public function prepareOrderData(\Magento\Sales\Api\Data\OrderInterface $order, int $websiteId): array
    {
        $orderData = [];
        $orderData['Details'] = $this->getItemsDetails($order->getItems());
        $orderData['ExternalReference']['value'] = $order->getIncrementId();
        $orderData['Hold']['value'] = false;
        $orderData['IsTaxValid']['value'] = false;
        $orderData['OrderedQty']['value'] = $order->getTotalQtyOrdered();
        $orderData['OrderTotal']['value'] = $order->getGrandTotal();
        $orderData['OrderType']['value'] = 'SO';

        // Explicitly set the billing address on the sales order
        $orderData['BillToAddressOverride']['value'] = true;
        $orderData['BillToAddress'] = $this->getAddress($order->getBillingAddress());

        $orderData['BillToContactOverride']['value'] = true;
        $orderData['BillToContact'] = $this->getContact($order->getBillingAddress(), $order->getCustomerEmail());

        if ($order->getShippingAddress()) {

            $orderData['ShipToAddressOverride']['value'] = true;
            $orderData['ShipToAddress'] = $this->getAddress($order->getShippingAddress());

            $orderData['ShipToContactOverride']['value'] = true;
            $orderData['ShipToContact'] = $this->getContact($order->getShippingAddress(), $order->getCustomerEmail());

            $orderData['ShipVia']['value'] = $this->getShippingCarrier($order->getShippingDescription(), $websiteId);
        }
        else {
            $orderData['ShipToAddressOverride']['value'] = false;
            $orderData['ShipToContactOverride']['value'] = false;
        }

        $orderData['TaxTotal']['value'] = $order->getTaxAmount();
        $orderData['CurrencyID']['value'] = $this->configGeneral->getCurrency($websiteId);
        $orderData['PaymentRef']['value'] = $order->getPayment() ? $order->getPayment()->getLastTransId() : '';
        $orderData['PaymentMethod']['value'] = $order->getPayment()
            ? $this->getPaymentMethod($order->getPayment(), $websiteId)
            : $this->configGeneral->getDefaultPaymentMethod($websiteId);

        return $orderData;
    }

    /**
     * @param \Magento\Sales\Api\Data\OrderPaymentInterface $payment
     * @param int $websiteId
     * @return string
     */
    private function getPaymentMethod(\Magento\Sales\Api\Data\OrderPaymentInterface $payment, int $websiteId): string
    {
        $paymentMapping = $this->configGeneral->getPaymentMethodsMapping($websiteId);
        $paymentMethod = $this->configGeneral->getDefaultPaymentMethod($websiteId);

        if (array_key_exists($payment->getMethod(), $paymentMapping)) {
            $paymentMethod = $paymentMapping[$payment->getMethod()];
        } elseif (array_key_exists($payment->getCcType(), $paymentMapping)) {
            $paymentMethod = $paymentMapping[$payment->getCcType()];
        }

        return $paymentMethod;
    }

    /**
     * @param string $shippingDescription
     * @param int $websiteId
     * @return string
     */
    private function getShippingCarrier(string $shippingDescription, int $websiteId): string
    {
        $shippingMapping = $this->configGeneral->getShippingMethodsMapping($websiteId);
        $shipVia = $this->configGeneral->getDefaultShippingMethod($websiteId);

        if (array_key_exists($shippingDescription, $shippingMapping)) {
            $shipVia = $shippingMapping[$shippingDescription];
        }

        return $shipVia;
    }

    /**
     * @param \Magento\Sales\Api\Data\OrderItemInterface[] $items
     * @return array
     */
    private function getItemsDetails(array $items): array
    {
        $itemsData = [];
        foreach ($items as $item) {
            $itemArray = [
                'InventoryID' => [
                    'value' => $item->getSku()
                ],
                'LineDescription' => [
                    'value' => $item->getName()
                ],
                'ManualDiscount' => [
                    'value' => false
                ],
                'Quantity' => [
                    'value' => $item->getQtyOrdered()
                ],
                'UnitPrice' => [
                    'value' => $item->getPrice()
                ],
                'UOM' => [
                    'value' => 'EA'
                ]
            ];
            $itemsData[] = $itemArray;
        }

        return $itemsData;
    }

    /**
     * @param array $salesOrder
     * @param array $payment
     * @return array
     */
    public function applyPaymentToOrder(array $salesOrder, array $payment): array
    {
        $orderData = [];
        $orderData['id'] = $salesOrder['id'];
        $orderData['OrderNbr']['value'] = $salesOrder['OrderNbr']['value'];
        $orderData['PaymentRef']['value'] = $payment['PaymentRef']['value'];
        $orderData['Payments'] = [$this->paymentData->getPaymentsData($salesOrder, $payment)];

        return $orderData;
    }

    /**
     * @param \Magento\Sales\Api\Data\OrderAddressInterface $address
     * @return array
     */
    private function getAddress(\Magento\Sales\Api\Data\OrderAddressInterface $address): array
    {
        $addressData = [];
        $street = $address->getStreet();
        $addressData['AddressLine1']['value'] = $street[0] ?? '';
        $addressData['AddressLine2']['value'] = $street[1] ?? '';
        $addressData['City']['value'] = $address->getCity();
        $addressData['Country']['value'] = $address->getCountryId();
        $addressData['PostalCode']['value'] = $address->getPostcode();
        $addressData['State']['value'] = $address->getRegionCode();

        return $addressData;
    }

    /**
     * @param \Magento\Sales\Api\Data\OrderAddressInterface $address
     * @param string $email
     * @return array
     */
    private function getContact(\Magento\Sales\Api\Data\OrderAddressInterface $address, string $email): array
    {
        $contactData = [];
        $contactData['Attention']['value'] = $address->getFirstname() . ' ' . $address->getLastname();
        $contactData['BusinessName']['value'] = $address->getCompany();
        $contactData['Email']['value'] = $email;
        $contactData['Phone1']['value'] = $address->getTelephone();

        return $contactData;
    }
}
