<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Service\HandlerProcessor\CustomerLocation;

use Magento\Customer\Api\Data\AddressInterface;
use Magento\Customer\Api\Data\CustomerInterface;

interface DataInterface
{
    /**
     * @param \Magento\Customer\Api\Data\AddressInterface $address
     * @param \Magento\Customer\Api\Data\CustomerInterface $customer
     * @param int $websiteId
     * @return array
     */
    public function prepareCustomerLocationData(AddressInterface $address, CustomerInterface $customer, int $websiteId): array;
}
