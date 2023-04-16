<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class CustomerUpdate implements ObserverInterface
{
    /**
     * @var \Candela\Acumatica\Model\Config\General
     */
    private $configGeneral;

    /**
     * @var \Candela\Acumatica\Service\Queue
     */
    private $queue;

    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;

    /**
     * @param \Candela\Acumatica\Model\Config\General $configGeneral
     * @param \Candela\Acumatica\Service\Queue $queue
     * @param \Psr\Log\LoggerInterface $logger
     * @param \Magento\Store\Model\StoreManagerInterface $storeManager
     */
    public function __construct(
        \Candela\Acumatica\Model\Config\General $configGeneral,
        \Candela\Acumatica\Service\Queue $queue,
        \Psr\Log\LoggerInterface $logger
    ) {
        $this->configGeneral = $configGeneral;
        $this->queue = $queue;
        $this->logger = $logger;
    }

    /**
     * @param \Magento\Framework\Event\Observer $observer
     * @return \Candela\Acumatica\Observer\CustomerUpdate
     */
    public function execute(Observer $observer): \Candela\Acumatica\Observer\CustomerUpdate
    {
        /** @var \Magento\Customer\Api\Data\CustomerInterface $customer */
        $customer = $observer->getEvent()->getCustomerDataObject();

        /** @var \Magento\Customer\Api\Data\AddressInterface $addresses */
        $addresses = $customer->getAddresses();

        /** @var \Magento\Customer\Api\Data\CustomerInterface $originCustomer */
        $originCustomer = $observer->getEvent()->getOrigCustomerDataObject();
        $websiteId = (int)$customer->getWebsiteId();

        if ($customer !== null
            && $originCustomer !== null
            && $this->configGeneral->isEnabled($websiteId)
            && !$this->queue->isSubmissionExist(['customerId' => $customer->getId()], 'customer', $websiteId)
        ) {
            try {
                $this->queue->add(
                    'customer',
                    ['customerId' => $customer->getId(), 'customerEmail' => $customer->getEmail()],
                    $websiteId
                );

                /** @var \Magento\Customer\Api\Data\AddressInterface $address */

                foreach ($addresses as $address) {
                    $this->queue->add(
                        'customerLocation',
                        ['addressId' => (string)$address->getId()],
                        $websiteId
                    );
                }
            } catch (\Exception $exception) {
                $this->logger->critical($exception->getMessage());
            }
        }

        return $this;
    }
}

