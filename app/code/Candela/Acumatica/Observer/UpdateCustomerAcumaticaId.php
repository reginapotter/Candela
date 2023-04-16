<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Observer;

use Magento\Framework\Exception\LocalizedException;

class UpdateCustomerAcumaticaId implements \Magento\Framework\Event\ObserverInterface
{
    /**
     * @var \Candela\Acumatica\Service\HandlerProcessor\Customer
     */
    private $customerService;

    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;

    /**
     * @var \Magento\Customer\Api\CustomerRepositoryInterface
     */
    private $customerRepository;

    /**
     * @var \Candela\Acumatica\Platform\Adapter
     */
    private $adapter;

    /**
     * @param \Candela\Acumatica\Service\HandlerProcessor\Customer $customerService
     * @param \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository
     * @param \Psr\Log\LoggerInterface $logger
     * @param \Candela\Acumatica\Platform\Adapter $adapter
     */
    public function __construct(
        \Candela\Acumatica\Service\HandlerProcessor\Customer $customerService,
        \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository,
        \Psr\Log\LoggerInterface $logger,
        \Candela\Acumatica\Platform\Adapter $adapter
    ) {
        $this->customerService = $customerService;
        $this->logger = $logger;
        $this->customerRepository = $customerRepository;
        $this->adapter = $adapter;
    }

    /**
     * @param \Magento\Framework\Event\Observer $observer
     * @return void
     */
    public function execute(\Magento\Framework\Event\Observer $observer): void
    {
        /** @var \Magento\Customer\Api\Data\CustomerInterface $customer */
        $customerId = $observer->getData('customerId');
        try {
            $customer = $this->customerRepository->getById($customerId);
        } catch (LocalizedException $exception) {
            $this->logger->error('Acumatica sync: event:' . $observer->getEventName() . ':' . $exception->getMessage());
            return;
        } finally {
            $this->adapter->logout((int)$customer->getWebsiteId());
        }

        $acumaticaCustomerId = $customer->getCustomAttribute(
            \Candela\Acumatica\Setup\InstallData::ACUMATICA_CUSTOMER_ID
        );
        if ($acumaticaCustomerId) {
            return;
        }

        try {
            $this->customerService->syncCustomer((int)$customer->getId(), (int)$customer->getWebsiteId());
        } catch (\Exception $exception) {
            $this->logger->error('Acumatica sync: event:' . $observer->getEventName() . ':' . $exception->getMessage());
        } finally {
            $this->adapter->logout((int)$customer->getWebsiteId());
        }
    }
}
