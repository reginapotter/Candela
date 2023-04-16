<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Service\HandlerProcessor\SalesOrder;

interface SalesOrderDataInterface
{
    /**
     * @param \Magento\Sales\Api\Data\OrderInterface $order
     * @param int $websiteId
     * @return array
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function prepareOrderData(\Magento\Sales\Api\Data\OrderInterface $order, int $websiteId): array;

    /**
     * @param array $salesOrder
     * @param array $payment
     * @return array
     */
    public function applyPaymentToOrder(array $salesOrder, array $payment): array;
}
