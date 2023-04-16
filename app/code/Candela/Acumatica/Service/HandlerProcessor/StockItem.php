<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Service\HandlerProcessor;

use Magento\Catalog\Api\Data\ProductInterface;
use Magento\Framework\Exception\LocalizedException;

class StockItem
{
    /**
     * @var \Candela\Acumatica\Platform\Adapter
     */
    private $platformAdapter;

    /**
     * @var \Magento\Catalog\Api\ProductRepositoryInterface
     */
    private $productRepository;

    /**
     * @var \Magento\Framework\Api\SearchCriteriaBuilder
     */
    private $searchCriteriaBuilder;

    /**
     * @var \Magento\CatalogInventory\Api\StockRegistryInterface
     */
    private $stockRegistry;

    /**
     * @var \Candela\Acumatica\Helper\Notification
     */
    private $notificationHelper;

    /**
     * @param \Candela\Acumatica\Platform\Adapter $platformAdapter
     * @param \Magento\Catalog\Api\ProductRepositoryInterface $productRepository
     * @param \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder
     * @param \Magento\CatalogInventory\Api\StockRegistryInterface $stockRegistry
     * @param \Candela\Acumatica\Helper\Notification $notificationHelper
     */
    public function __construct(
        \Candela\Acumatica\Platform\Adapter $platformAdapter,
        \Magento\Catalog\Api\ProductRepositoryInterface $productRepository,
        \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder,
        \Magento\CatalogInventory\Api\StockRegistryInterface $stockRegistry,
        \Candela\Acumatica\Helper\Notification $notificationHelper
    ) {
        $this->platformAdapter = $platformAdapter;
        $this->productRepository = $productRepository;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
        $this->stockRegistry = $stockRegistry;
        $this->notificationHelper = $notificationHelper;
    }

    /**
     * @param int $websiteId
     * @return void
     */
    public function syncStockItems(int $websiteId): void
    {
        $searchCriteria = $this->searchCriteriaBuilder
            ->addFilter('website_id', $websiteId, 'eq')
            ->create();
        $productItems = $this->productRepository->getList($searchCriteria)->getItems();
        $stockItemUpdate = ['success' => [], 'fail' => []];

        /** @var \Magento\Catalog\Api\Data\ProductInterface $productItem */
        foreach ($productItems as $productItem) {
            if (!$productItem->isComposite()) {
                try {
                    $this->syncStockItem($productItem, $websiteId);
                    $stockItemUpdate['success'][] = $productItem->getSku();
                } catch (\Exception $e) {
                    $this->disableProduct($productItem);
                    $stockItemUpdate['fail'][] = $productItem->getSku();
                }
            }
        }

        $this->notificationHelper->sendStockItemReport($stockItemUpdate, $websiteId);
    }

    /**
     * @param \Magento\Catalog\Api\Data\ProductInterface $productItem
     * @return void
     * @throws \Magento\Framework\Exception\CouldNotSaveException
     * @throws \Magento\Framework\Exception\InputException
     * @throws \Magento\Framework\Exception\StateException
     */
    private function disableProduct(\Magento\Catalog\Api\Data\ProductInterface $productItem): void
    {
        $productItem->setStatus(\Magento\Catalog\Model\Product\Attribute\Source\Status::STATUS_DISABLED);
        $this->productRepository->save($productItem);
    }

    /**
     * @param \Magento\Catalog\Api\Data\ProductInterface $productItem
     * @param int $websiteId
     * @return void
     */
    private function syncStockItem(\Magento\Catalog\Api\Data\ProductInterface $productItem, int $websiteId): void
    {
        $acumaticaStockItem = $this->platformAdapter->getStockItem($productItem->getSku(), $websiteId);

        if (!$acumaticaStockItem || !isset($acumaticaStockItem['WarehouseDetails'])) {
            throw new LocalizedException(__('Insufficient Stock data from Acumatica'));
        }

        $this->updateProductStock($productItem, $acumaticaStockItem['WarehouseDetails']);
    }

    /**
     * @param \Magento\Catalog\Api\Data\ProductInterface $productItem
     * @param array $warehouseDetails
     * @return void
     */
    private function updateProductStock(ProductInterface $productItem, array $warehouseDetails): void
    {
        $compoundStockQty = $this->getCompoundStockQty($warehouseDetails);
        $stockItem = $this->stockRegistry->getStockItemBySku($productItem->getSku());
        $stockItem->setQty($compoundStockQty);
        $this->stockRegistry->updateStockItemBySku($productItem->getSku(), $stockItem);
    }

    /**
     * @param array $warehouseDetails
     * @return int
     */
    private function getCompoundStockQty(array $warehouseDetails): int
    {
        $compoundQty = 0;
        foreach ($warehouseDetails as $warehouse) {
            $compoundQty += (int)$warehouse['QtyOnHand']['value'];
        }

        return $compoundQty;
    }
}
