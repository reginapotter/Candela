<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Service\HandlerProcessor\CustomerLocation;

use Magento\Sales\Api\Data\OrderAddressInterface;

interface OrderDataInterface
{
    /**
     * @param \Magento\Sales\Api\Data\OrderAddressInterface $address
     * @param int $acumaticaCustomerId
     * @param int $websiteId
     * @return array
     */
    public function prepareCustomerLocationData(
        OrderAddressInterface $address,
        int $acumaticaCustomerId,
        int $websiteId
    ): array;
}
