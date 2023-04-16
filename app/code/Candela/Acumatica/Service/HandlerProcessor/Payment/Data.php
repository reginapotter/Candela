<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Service\HandlerProcessor\Payment;

class Data implements \Candela\Acumatica\Service\HandlerProcessor\Payment\PaymentDataInterface
{
    /**
     * @param array $salesOrder
     * @return array
     */
    public function preparePaymentData(array $salesOrder): array
    {
        $paymentData = [];
        $paymentData['CustomerID']['value'] = $salesOrder['CustomerID']['value'];
        $paymentData['PaymentAmount']['value'] = $salesOrder['OrderTotal']['value'];
        $paymentData['Hold']['value'] = false;
        $paymentData['PaymentMethod']['value'] = $salesOrder['PaymentMethod']['value'];
        $paymentData['PaymentRef']['value'] = $salesOrder['PaymentRef']['value'];
        $paymentData['CurrencyID']['value'] = 'USD';
        $paymentData['Type']['value'] = 'Payment';

        return $paymentData;
    }

    /**
     * @param array $salesOrder
     * @param array $payment
     * @return array
     */
    public function getPaymentsData(array $salesOrder, array $payment): array
    {
        return [
            'AppliedToOrder' => [
                'value' => $payment['PaymentAmount']['value']
            ],
            'Balance' => [
                'value' => $payment['PaymentAmount']['value']
            ],
            'CurrencyID' => [
                'value' => 'USD'
            ],
            'DocType' => [
                'value' => 'Payment'
            ],
            'OrderNbr' => [
                'value' => $salesOrder['OrderNbr']['value']
            ],
            'OrderType' => [
                'value' => $salesOrder['OrderType']['value']
            ],
            'PaymentAmount' => [
                'value' => $payment['PaymentAmount']['value']
            ],
            'PaymentMethod' => [
                'value' => $payment['PaymentMethod']['value']
            ],
            'PaymentRef' => [
                'value' => $payment['PaymentRef']['value']
            ],
            'ReferenceNbr' => [
                'value' => $payment['ReferenceNbr']['value']
            ],
            'Status' => [
                'value' => 'Balanced'
            ],
            'TransferredToInvoice' => [
                'value' => 0
            ]
        ];
    }
}
