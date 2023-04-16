<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\App\Request\Http as HttpRequest;

class SaveAddress implements ObserverInterface
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
     * @var HttpRequest
     */
    private HttpRequest $httpRequest;

    /**
     * @param \Candela\Acumatica\Model\Config\General $configGeneral
     * @param \Candela\Acumatica\Service\Queue $queue
     * @param \Psr\Log\LoggerInterface $logger
     * @param \Magento\Store\Model\StoreManagerInterface $storeManager
     * @param HttpRequest $httpRequest
     */
    public function __construct(
        \Candela\Acumatica\Model\Config\General $configGeneral,
        \Candela\Acumatica\Service\Queue $queue,
        \Psr\Log\LoggerInterface $logger,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        HttpRequest $httpRequest
    ) {
        $this->configGeneral = $configGeneral;
        $this->queue = $queue;
        $this->logger = $logger;
        $this->storeManager = $storeManager;
        $this->httpRequest = $httpRequest;
    }

    /**
     * @param \Magento\Framework\Event\Observer $observer
     * @return \Candela\Acumatica\Observer\SaveAddress
     */
    public function execute(Observer $observer): \Candela\Acumatica\Observer\SaveAddress
    {
        /** @var \Magento\Customer\Model\Address $customerAddress */
        $customerAddress = $observer->getCustomerAddress();
        /** @var \Magento\Customer\Model\Customer $customer */
        $customer = $customerAddress->getCustomer();
        $websiteId = (int)$this->storeManager->getStore($customer->getStoreId())->getWebsiteId();

        if ($this->configGeneral->isEnabled($websiteId)
            && !$this->queue->isSubmissionExist(['customerId' => $customer->getId()], 'customer', $websiteId)) {
            try {
                $this->queue->add(
                    'customerLocation',
                    ['addressId' => (string)$customerAddress->getId()],
                    $websiteId
                );
            } catch (\Exception $exception) {
                $this->logger->critical($exception->getMessage());
            }
        }

        return $this;
    }

    /**
     * @param \Magento\Customer\Model\Customer $customer
     * @param \Magento\Customer\Model\Address $customerAddress
     * @return array
     */
    private function getCustomerAddressIds(
        \Magento\Customer\Model\Customer $customer,
        \Magento\Customer\Model\Address $customerAddress
    ): array {
        $addressIds = array_map(
            function ($address) {
                return $address->getId();
            },
            $customer->getAddresses()
        );
        $addressIds[] = $customerAddress->getId();

        return array_unique($addressIds);
    }
}
