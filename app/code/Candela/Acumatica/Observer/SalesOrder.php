<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class SalesOrder implements ObserverInterface
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
     * @param \Candela\Acumatica\Model\Config\General $configGeneral
     * @param \Candela\Acumatica\Service\Queue $queue
     * @param \Psr\Log\LoggerInterface $logger
     * @param \Magento\Store\Model\StoreManagerInterface $storeManager
     */
    public function __construct(
        \Candela\Acumatica\Model\Config\General $configGeneral,
        \Candela\Acumatica\Service\Queue $queue,
        \Psr\Log\LoggerInterface $logger,
        \Magento\Store\Model\StoreManagerInterface $storeManager
    ) {
        $this->configGeneral = $configGeneral;
        $this->queue = $queue;
        $this->logger = $logger;
        $this->storeManager = $storeManager;
    }

    /**
     * @param \Magento\Framework\Event\Observer $observer
     * @return \Candela\Acumatica\Observer\SalesOrder
     */
    public function execute(Observer $observer): \Candela\Acumatica\Observer\SalesOrder
    {
        $order = $observer->getEvent()->getOrder();
        $websiteId = (int)$this->storeManager->getStore($order->getStoreId())->getWebsiteId();
        if ($this->configGeneral->isEnabled($websiteId)
            && !$this->queue->isSubmissionExist(['orderId' => $order->getId(), 'magentoOrderId' => $order->getIncrementId()], 'salesOrder', $websiteId)) {
            try {
                $this->queue->add(
                    'salesOrder',
                    ['orderId' => $order->getId(), 'magentoOrderId' => $order->getIncrementId()],
                    $websiteId
                );
            } catch (\Exception $exception) {
                $this->logger->critical($exception->getMessage());
            }
        }

        return $this;
    }
}
