<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Service\HandlerProcessor\Customer;

use Magento\Sales\Api\Data\OrderInterface;

interface CustomerOrderDataInterface
{
    /**
     * @param \Magento\Sales\Api\Data\OrderInterface $order
     * @return array
     */
    public function prepareCustomerData(
        OrderInterface $order
    ): array;
}
