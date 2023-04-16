<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Service\Console;

use Magento\Framework\Exception\LocalizedException;
use Candela\Acumatica\Service\Queue;

class SyncCustomers
{
    const DEFAULT_PAGE_SIZE = 10;

    /**
     * @var \Magento\Customer\Api\CustomerRepositoryInterface
     */
    private $customerRepository;

    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;

    /**
     * @var \Candela\Acumatica\Service\HandlerProcessor\Customer
     */
    private $customerService;

    /**
     * @var \Magento\Framework\Api\SearchCriteriaBuilder
     */
    private $searchCriteriaBuilder;

    /**
     * @var int|null
     */
    private $pageSize;

    /**
     * @var \Magento\Framework\Serialize\Serializer\Json
     */
    private $jsonSerializer;

    /**
     * @var \Candela\Acumatica\Service\Queue
     */
    private $queue;

    /**
     * @param \Candela\Acumatica\Service\HandlerProcessor\Customer $customerService
     * @param \Candela\Acumatica\Service\Queue $queue
     * @param \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository
     * @param \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder
     * @param \Magento\Framework\Serialize\Serializer\Json $jsonSerializer
     * @param \Psr\Log\LoggerInterface $logger
     */
    public function __construct(
        \Candela\Acumatica\Service\HandlerProcessor\Customer $customerService,
        \Candela\Acumatica\Service\Queue $queue,
        \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository,
        \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder,
        \Magento\Framework\Serialize\Serializer\Json $jsonSerializer,
        \Psr\Log\LoggerInterface $logger
    ) {
        $this->customerRepository = $customerRepository;
        $this->queue = $queue;
        $this->customerService = $customerService;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
        $this->jsonSerializer = $jsonSerializer;
        $this->logger = $logger;
    }

    /**
     * @param int|null $pageSize
     * @return void
     */
    public function setPageSize(?int $pageSize): void
    {
        $this->pageSize = $pageSize;
    }

    /**
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     * @param int|null $customerId
     * @param int|null $storeId
     * @return void
     */
    public function syncQueue(
        \Symfony\Component\Console\Output\OutputInterface $output,
        ?int $customerId,
        ?int $storeId
    ): void {
        if ($customerId !== null) {
            $this->addCustomerQueue($output, $customerId);
        }

        if ($customerId === null) {
            $this->addAllCustomerQueue($output, $storeId);
        }
    }

    /**
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     * @param int|null $customerId
     * @param int|null $storeId
     * @return void
     */
    public function syncImmediately(
        \Symfony\Component\Console\Output\OutputInterface $output,
        ?int $customerId,
        ?int $storeId
    ): void {
        if ($customerId !== null) {
            $this->syncCustomerImmediately($output, $customerId);
        }

        if ($customerId === null) {
            $this->syncAllCustomerImmediately($output, $storeId);
        }
    }

    /**
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     * @param int $customerId
     * @return void
     */
    private function syncCustomerImmediately(
        \Symfony\Component\Console\Output\OutputInterface $output,
        int $customerId
    ): void {
        try {
            $customer = $this->customerRepository->getById($customerId);
            $output->writeln('<info>Synchronize customer with ID: ' . $customer->getId() . '</info>');
            $this->customerService->syncCustomer((int)$customer->getId(), (int)$customer->getWebsiteId());
        } catch (LocalizedException $e) {
            $this->logger->error('Acumatica console tool: ' . $e->getMessage());
        }
    }

    /**
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     * @param int|null $storeId
     * @return void
     */
    private function syncAllCustomerImmediately(
        \Symfony\Component\Console\Output\OutputInterface $output,
        ?int $storeId
    ): void {
        $limit = $this->pageSize ?: self::DEFAULT_PAGE_SIZE;

        $this->searchCriteriaBuilder->addFilter(
            'acumatica_customer_id',
            null,
            'null'
        );

        if ($storeId !== null) {
            $this->searchCriteriaBuilder->addFilter(
                'store_id',
                $storeId
            );
        }

        $output->writeln(
            '<info>To avoid performance degradation system load only ' . $limit . ' items</info>'
        );

        $searchCriteria = $this->searchCriteriaBuilder
            ->setPageSize($limit)
            ->setCurrentPage(1)
            ->create();

        try {
            $customers = $this->customerRepository->getList($searchCriteria);
        } catch (LocalizedException $exception) {
            $this->logger->error('Acumatica console tool: ' . $exception->getMessage());
            $output->writeln('<error>Acumatica ID is: ' . $exception->getMessage() . '</error>');
            return;
        }


        foreach ($customers->getItems() as $customer) {
            $output->writeln('<info>Synchronize customer with ID: ' . $customer->getId() . '</info>');

            try {
                $acumaticaCustomer = $this->customerService->syncCustomer(
                    (int)$customer->getId(),
                    (int)$customer->getWebsiteId()
                );

                $output->writeln('<info>Acumatica ID is: ' . $acumaticaCustomer['CustomerID']['value'] . '</info>');
            } catch (LocalizedException $e) {
                $this->logger->error('Acumatica console tool: ' . $e->getMessage());
                $output->writeln('<info>Acumatica ID is: ' . $acumaticaCustomer['CustomerID']['value'] . '</info>');
            } catch (\Exception $e) {
                $this->logger->error('Acumatica console tool: ' . $e->getMessage());
                $error = $this->parseError($e->getMessage());
                if (is_array($error)) {
                    $output->writeln('<error>' . $error['message'] . '</error>');
                    $output->writeln('<error>' . $error['exceptionMessage'] . '</error>');
                } else {
                    $output->writeln('<error>' . $e->getMessage() . '</error>');
                }
            }
        }
    }

    /**
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     * @param int $customerId
     * @return void
     */
    private function addCustomerQueue(
        \Symfony\Component\Console\Output\OutputInterface $output,
        int $customerId
    ): void {
        try {
            $customer = $this->customerRepository->getById($customerId);
            $output->writeln('<info>Customer with ID: ' . $customer->getId() . ' has been added to queue</info>');

            $this->queue->add(
                'customer',
                ['customerId' => (int)$customer->getId()],
                (int)$customer->getWebsiteId()
            );
        } catch (LocalizedException $e) {
            $this->logger->error('Acumatica console tool: ' . $e->getMessage());
        }
    }

    /**
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     * @param int|null $storeId
     * @return void
     */
    private function addAllCustomerQueue(\Symfony\Component\Console\Output\OutputInterface $output, ?int $storeId): void
    {
        $this->searchCriteriaBuilder->addFilter(
            'acumatica_customer_id',
            null,
            'null'
        );

        if ($storeId !== null) {
            $this->searchCriteriaBuilder->addFilter(
                'store_id',
                $storeId
            );
        }

        $searchCriteria = $this->searchCriteriaBuilder->create();

        try {
            $customers = $this->customerRepository->getList($searchCriteria);
        } catch (LocalizedException $exception) {
            $this->logger->error('Acumatica console tool(Add to Queue): ' . $exception->getMessage());
            $output->writeln('<error>Acumatica ID is: ' . $exception->getMessage() . '</error>');
            return;
        }

        $added = 0;
        foreach ($customers->getItems() as $customer) {
            try {
                $this->queue->add(
                    'customer',
                    ['customerId' => (int)$customer->getId()],
                    (int)$customer->getWebsiteId()
                );
                $added++;
            } catch (LocalizedException $exception) {
                $this->logger->error('Acumatica console tool(Add to Queue): ' . $exception->getMessage());
                $output->writeln('<error> Error: ' . $exception->getMessage() . '</error>');
            }
        }

        $output->writeln('<info>Total added to queue: ' . $added . '</info>');
    }

    /**
     * @param string $error
     * @return array|null
     */
    private function parseError(string $error): ?array
    {
        $error = str_replace('Internal Server Error: 500.', '', $error);
        $error = trim($error);
        try {
            $jsonError = $this->jsonSerializer->unserialize($error);
        } catch (\Exception $exception) {
            return null;
        }

        return $jsonError;
    }
}
