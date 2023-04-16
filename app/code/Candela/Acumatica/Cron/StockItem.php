<?php
/**
 * Copyright ©
 * Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Cron;

class StockItem
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
     * @var \Candela\Acumatica\Service\HandlerProcessor\StockItem
     */
    private $stockItemHandler;

    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;

    /**
     * @var \Candela\Acumatica\Platform\Adapter
     */
    private $adapter;

    /**
     * @param \Magento\Store\Model\StoreManagerInterface $storeManager
     * @param \Candela\Acumatica\Model\Config\General $configGeneral
     * @param \Candela\Acumatica\Service\HandlerProcessor\StockItem $stockItemHandler
     * @param \Psr\Log\LoggerInterface $logger
     * @param \Candela\Acumatica\Platform\Adapter $adapter
     */
    public function __construct(
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Candela\Acumatica\Model\Config\General $configGeneral,
        \Candela\Acumatica\Service\HandlerProcessor\StockItem $stockItemHandler,
        \Psr\Log\LoggerInterface $logger,
        \Candela\Acumatica\Platform\Adapter $adapter
    ) {
        $this->storeManager = $storeManager;
        $this->configGeneral = $configGeneral;
        $this->stockItemHandler = $stockItemHandler;
        $this->logger = $logger;
        $this->adapter = $adapter;
    }

    /**
     * @return void
     */
    public function execute(): void
    {
        foreach ($this->storeManager->getWebsites() as $website) {
            if (!$this->configGeneral->isEnabled((int)$website->getId())
                || !$this->configGeneral->isStockItemEnabled((int)$website->getId())
            ) {
                continue;
            }

            try {
                $this->stockItemHandler->syncStockItems((int)$website->getId());
            } catch (\Exception $e) {
                $this->logger->critical($e);
            } finally {
                $this->adapter->logout((int)$website->getId());
            }
        }
    }
}
