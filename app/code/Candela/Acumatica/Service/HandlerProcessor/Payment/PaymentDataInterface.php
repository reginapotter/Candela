<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Service\HandlerProcessor\Payment;

interface PaymentDataInterface
{
    /**
     * @param array $salesOrder
     * @return array
     */
    public function preparePaymentData(array $salesOrder): array;

    /**
     * @param array $salesOrder
     * @param array $payment
     * @return array
     */
    public function getPaymentsData(array $salesOrder, array $payment): array;
}
