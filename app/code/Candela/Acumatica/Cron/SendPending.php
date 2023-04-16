<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Cron;

class SendPending
{
    /**
     * @var \Magento\Store\Model\StoreManagerInterface $storeManager
     */
    private $storeManager;

    /**
     * @var \Candela\Acumatica\Model\Config\General
     */
    private $configGeneral;

    /**
     * @var \Candela\Acumatica\Api\QueueInterface
     */
    private $queue;

    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;

    /**
     * @param \Magento\Store\Model\StoreManagerInterface $storeManager
     * @param \Candela\Acumatica\Model\Config\General $configGeneral
     * @param \Candela\Acumatica\Api\QueueInterface $queue
     * @param \Psr\Log\LoggerInterface $logger
     */
    public function __construct(
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Candela\Acumatica\Model\Config\General $configGeneral,
        \Candela\Acumatica\Api\QueueInterface $queue,
        \Psr\Log\LoggerInterface $logger
    ) {
        $this->storeManager = $storeManager;
        $this->configGeneral = $configGeneral;
        $this->queue = $queue;
        $this->logger = $logger;
    }

    /**
     * @return void
     */
    public function execute(): void
    {
        foreach ($this->storeManager->getWebsites() as $website) {
            if (!$this->configGeneral->isEnabled((int)$website->getId())) {
                continue;
            }

            try {
                $this->queue->sendPending((int)$website->getId());
            } catch (\Exception $e) {
                $this->logger->critical($e);
            }
        }
    }
}
