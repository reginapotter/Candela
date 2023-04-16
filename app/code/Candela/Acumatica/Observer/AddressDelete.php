<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class AddressDelete implements ObserverInterface
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
     * @var \Magento\Store\Model\StoreManagerInterface
     */
    private $storeManager;

    /**
     * @var \Magento\Customer\Api\AddressRepositoryInterface
     */
    private $addressRepository;

    /**
     * @var \Magento\Customer\Api\CustomerRepositoryInterface
     */
    private $customerRepository;

    /**
     * @param \Candela\Acumatica\Model\Config\General $configGeneral
     * @param \Candela\Acumatica\Service\Queue $queue
     * @param \Psr\Log\LoggerInterface $logger
     * @param \Magento\Store\Model\StoreManagerInterface $storeManager
     * @param \Magento\Customer\Api\AddressRepositoryInterface $addressRepository
     * @param \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository
     */
    public function __construct(
        \Candela\Acumatica\Model\Config\General $configGeneral,
        \Candela\Acumatica\Service\Queue $queue,
        \Psr\Log\LoggerInterface $logger,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Customer\Api\AddressRepositoryInterface $addressRepository,
        \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository
    ) {
        $this->configGeneral = $configGeneral;
        $this->queue = $queue;
        $this->logger = $logger;
        $this->storeManager = $storeManager;
        $this->addressRepository = $addressRepository;
        $this->customerRepository = $customerRepository;
    }

    /**
     * @param \Magento\Framework\Event\Observer $observer
     * @return \Candela\Acumatica\Observer\AddressDelete
     */
    public function execute(Observer $observer): \Candela\Acumatica\Observer\AddressDelete
    {
        /** @var \Magento\Customer\Model\Address $customerAddress */
        $customerAddress = $observer->getCustomerAddress();
        /** @var \Magento\Customer\Model\Customer $customer */
        $customer = $this->customerRepository->getById($customerAddress->getCustomer()->getId());
        $websiteId = (int)$this->storeManager->getStore($customer->getStoreId())->getWebsiteId();

        $address = $this->addressRepository->getById($customerAddress->getId(), $websiteId);
        $customerLocationId = $address->getCustomAttribute(
            \Candela\Acumatica\Setup\UpgradeData::ACUMATICA_CUSTOMER_LOCATION_ID
        );

        $acumaticaCustomerId = $customer->getCustomAttribute(
            \Candela\Acumatica\Setup\InstallData::ACUMATICA_CUSTOMER_ID
        );

        if ($customerLocationId
            && $this->configGeneral->isEnabled($websiteId)
            && !$this->queue->isSubmissionExist(
                ['locationId' => $customerAddress->getId()],
                'deleteCustomerLocation',
                $websiteId
            )
        ) {
            try {
                $this->queue->add(
                    'deleteCustomerLocation',
                    [
                        'locationId' => $customerLocationId->getValue(),
                        'customerAcumaticaId' => $acumaticaCustomerId->getValue()
                    ],
                    $websiteId
                );
            } catch (\Exception $exception) {
                $this->logger->critical($exception->getMessage());
            }
        }

        return $this;
    }
}
