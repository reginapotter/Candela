<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Service\HandlerProcessor;

class Payment
{
    /**
     * @var \Candela\Acumatica\Platform\Adapter
     */
    private $platformAdapter;

    /**
     * @var \Candela\Acumatica\Service\HandlerProcessor\Payment\PaymentDataInterface
     */
    private $paymentData;

    /**
     * @param \Candela\Acumatica\Platform\Adapter $platformAdapter
     * @param \Candela\Acumatica\Service\HandlerProcessor\Payment\PaymentDataInterface $paymentData
     */
    public function __construct(
        \Candela\Acumatica\Platform\Adapter $platformAdapter,
        \Candela\Acumatica\Service\HandlerProcessor\Payment\PaymentDataInterface $paymentData
    )
    {
        $this->platformAdapter = $platformAdapter;
        $this->paymentData = $paymentData;
    }

    /**
     * @param array $salesOrder
     * @param int $websiteId
     * @return array
     */
    public function create(array $salesOrder, int $websiteId): array
    {
        $paymentData = $this->paymentData->preparePaymentData($salesOrder);
        return $this->platformAdapter->createPayment($paymentData, $websiteId);
    }
}
