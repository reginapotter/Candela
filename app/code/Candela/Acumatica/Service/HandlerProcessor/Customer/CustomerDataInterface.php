<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Service\HandlerProcessor\Customer;

interface CustomerDataInterface
{
    /**
     * @param \Magento\Customer\Api\Data\CustomerInterface $customer
     * @return array
     */
    public function prepareCustomerData(\Magento\Customer\Api\Data\CustomerInterface $customer): array;
}
