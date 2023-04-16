<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Service\HandlerProcessor;

class Shipment
{
    /**
     * @var \Candela\Acumatica\Platform\Adapter
     */
    private $platformAdapter;

    /**
     * @var \Magento\Sales\Api\ShipmentRepositoryInterface
     */
    private $shipmentRepository;

    /**
     * @var \Magento\Sales\Api\OrderRepositoryInterface
     */
    private $orderRepository;

    /**
     * @var \Magento\Sales\Model\ResourceModel\Order\CollectionFactory
     */
    private $orderCollectionFactory;

    /**
     * @var \Magento\Sales\Model\Convert\Order
     */
    private $convertOrder;

    /**
     * @var \Magento\Shipping\Model\ShipmentNotifier
     */
    private $shipmentNotifier;

    /**
     * @var \Magento\Store\Model\StoreManagerInterface
     */
    private $storeManager;

    /**
     * @var \Magento\Sales\Model\Order\Shipment\TrackFactory
     */
    private $trackFactory;

    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;

    /**
     * @param \Candela\Acumatica\Platform\Adapter $platformAdapter
     * @param \Magento\Sales\Api\ShipmentRepositoryInterface $shipmentRepository
     * @param \Magento\Sales\Api\OrderRepositoryInterface $orderRepository
     * @param \Magento\Sales\Model\ResourceModel\Order\CollectionFactory $orderCollectionFactory
     * @param \Magento\Sales\Model\Convert\Order $convertOrder
     * @param \Magento\Shipping\Model\ShipmentNotifier $shipmentNotifier
     * @param \Magento\Store\Model\StoreManagerInterface $storeManager
     * @param \Magento\Sales\Model\Order\Shipment\TrackFactory $trackFactory
     * @param \Psr\Log\LoggerInterface $logger
     */
    public function __construct(
        \Candela\Acumatica\Platform\Adapter $platformAdapter,
        \Magento\Sales\Api\ShipmentRepositoryInterface $shipmentRepository,
        \Magento\Sales\Api\OrderRepositoryInterface $orderRepository,
        \Magento\Sales\Model\ResourceModel\Order\CollectionFactory $orderCollectionFactory,
        \Magento\Sales\Model\Convert\Order $convertOrder,
        \Magento\Shipping\Model\ShipmentNotifier $shipmentNotifier,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Sales\Model\Order\Shipment\TrackFactory $trackFactory,
        \Psr\Log\LoggerInterface $logger
    ) {
        $this->platformAdapter = $platformAdapter;
        $this->shipmentRepository = $shipmentRepository;
        $this->orderRepository = $orderRepository;
        $this->orderCollectionFactory = $orderCollectionFactory;
        $this->convertOrder = $convertOrder;
        $this->shipmentNotifier = $shipmentNotifier;
        $this->storeManager = $storeManager;
        $this->trackFactory = $trackFactory;
        $this->logger = $logger;
    }

   /**
     * @param int $websiteId
     * @return void
     */
    public function syncShipments(int $websiteId): void
    {
        $orderCollection = $this->getOrderCollection($websiteId);

        $this->logger->info("Syncing shipments for " . $orderCollection->count() . " order(s)");

        /** @var \Magento\Sales\Api\Data\OrderInterface $order */
        foreach ($orderCollection as $order) {
            try {
                // Only attempt to sync shipments for Acumatica orders for the current website that still have items to ship
                if ($order->getAcumaticaSalesOrderId() &&
                    (int)$this->storeManager->getStore($order->getStoreId())->getWebsiteId() === $websiteId &&
                    $order->canShip()) {

                    $this->syncShipment($order, $websiteId);
                }
            } catch (\Exception $e) {
                $this->logger->notice(
                    __('Shipment data for Order #%1 was not updated.', $order->getIncrementId()),
                    ['exception' => $e]
                );
            }
        }
    }

    /**
     * @param \Magento\Sales\Api\Data\OrderInterface $order
     * @param int $websiteId
     * @return void
     */
    private function syncShipment(\Magento\Sales\Api\Data\OrderInterface $order, int $websiteId): void
    {

        $this->logger->info("Synching shipments for order: " . $order->getAcumaticaSalesOrderId() . " / " . $order->getIncrementId());
        $salesOrder = $this->platformAdapter->getSalesOrder($order->getAcumaticaSalesOrderId(), $websiteId);

        if (!empty($salesOrder['Shipments'])) {

            foreach ($salesOrder['Shipments'] as $acumaticaShipment) {

                try {
                    $shipment = $this->platformAdapter->getShipment($acumaticaShipment['ShipmentNbr']['value'], $websiteId);
                    $this->createShipment($order, $shipment);
                }
                catch (\Exception $e) {
                    $this->logger->notice(
                        __('Unable to load shipment %1 for order %2', $acumaticaShipment['ShipmentNbr']['value'], $order->getAcumaticaSalesOrderId()),
                        ['exception' => $e]
                    );
                }
            }
        }
        else {
            $this->logger->info("No shipments found for order: " . $order->getAcumaticaSalesOrderId() . " / " . $order->getIncrementId());
        }
    }

    /**
     * @param \Magento\Sales\Api\Data\OrderInterface $order
     * @param array $shipment
     * @return void
     */
    private function createShipment(\Magento\Sales\Api\Data\OrderInterface $order, array $shipment): void
    {
        $orderShipment = $this->convertOrder->toShipment($order);

        $canProceed = false;

        // First loop through the order items and see what we can ship
        $processedShipmentItems = array();

        $this->logger->info("Checking items to ship...");
        foreach ($order->getAllVisibleItems() as $orderItem) {

            // Skip virtual items or items that can't be shipped
            if (!$orderItem->getQtyToShip() || $orderItem->getIsVirtual()) {
                continue;
            }

            $skusToMatch = array($orderItem->getSku());
            $isBundleOrConfigurable = false;

            if ($orderItem->getProductType() == 'bundle' ||
                $orderItem->getProductType() == 'configurable') {

                $isBundleOrConfigurable = true;

                foreach ($orderItem->getChildrenItems() as $childOrderItem) {

                    //$this->logger->info("    Child Item: " . $childOrderItem->getSku());
                    $skusToMatch[] = $childOrderItem->getSku();
                }
            }

            // Find the quantity of this item on the shipment
            $qtyToShip = 0;
            foreach ($shipment['Details'] as $shipmentItem) {

                if (!in_array($shipmentItem['id'], $processedShipmentItems) &&
                    in_array($shipmentItem['InventoryID']['value'], $skusToMatch)) {

                    // If this order item is a bundle or configurable, we'll ship the order quantity if any child item is on this shipment
                    // This is necessary because bundle/configurable parents are not tracked in acumatica and are not on shipments
                    if ($isBundleOrConfigurable) {
                        $qtyToShip = $orderItem->getQtyToShip();
                    }
                    // Otherwise, just set the quantity to ship to the amount on the shipment
                    else {
                        $qtyToShip = $shipmentItem['ShippedQty']['value'];
                    }

                    //$this->logger->info("Matched " . $orderItem->getSku() . " with shipment qty: " . $qtyToShip);

                    $processedShipmentItems[] = $shipmentItem['id'];
                    break;
                }
            }

            // If we found this item on this shipment, ship the specified quantity
            if ($qtyToShip > 0) {

                $qtyRemainingToShip = $orderItem->getQtyToShip();
                if ($qtyToShip > $qtyRemainingToShip) {
                    $qtyToShip = $qtyRemainingToShip;
                }

                $this->logger->info(
                    __("%1, qtyToShip: %2, qtyRemainingToShip: %3", $orderItem->getSku(), $qtyToShip, $orderItem->getQtyToShip())
                );

                $shipmentItem = $this->convertOrder->itemToShipmentItem($orderItem)->setQty($qtyToShip);
                $orderShipment->addItem($shipmentItem);
                $canProceed = true;
            }
            else {
                $this->logger->info(
                    __("Item %1 not found on this shipment", $orderItem->getSku())
                );
            }
        }

        if ($canProceed) {

            $this->logger->info("Creating shipment");

            $orderShipment->register();
            $order->setIsInProcess(true);

            try {

                // Add tracking numbers for each package to shipment
                $tracks = $this->createShipmentTracks($shipment);
                foreach ($tracks as $track) {
                    $orderShipment->addTrack($track);
                }

                $this->shipmentRepository->save($orderShipment);

                // TO DO: Create an 'acumatica_shipment_id' attribute on the Shipment entity in Magento rather than on the order
                $order->setAcumaticaShipmentId($shipment['ShipmentNbr']['value']);
                $this->orderRepository->save($order);

                $this->shipmentNotifier->notify($orderShipment);
                $this->shipmentRepository->save($orderShipment);
            } catch (\Exception $e) {
                $this->logger->critical($e->getMessage());
            }
        }
        else {
            $this->logger->info("Not creating shipment for order " . $order->getAcumaticaSalesOrderId() . " / " . $order->getIncrementId());
        }
    }

    /**
     * @param array $shipment
     * @return array
     */
    private function createShipmentTracks(array $shipment): array
    {
        $tracks = array();

        foreach($shipment['Packages'] as $package) {

            if (isset($package['TrackingNbr']) && isset($package['TrackingNbr']['value'])) {

                $this->logger->info("Creating tracking record for shipment package, package: " . $package['id']);

                $track = $this->trackFactory->create();

                $track->setCarrierCode($this->getCarrierCodeForShipVia($shipment['ShipVia']['value']));
                $track->setTitle($shipment['ShipVia']['value']);
                $track->setTrackNumber($package['TrackingNbr']['value']);

                $this->logger->info("    Carrier: " . $track->getCarrierCode());
                $this->logger->info("    Title: "  . $track->getTitle());
                $this->logger->info("    Tracking Number: " . $track->getTrackNumber());

                $tracks[] = $track;
            }
            else {
                $this->logger->info("No tracking number for package. Not adding tracking to shipment, package: " . $package['id']);
            }
        }

        return $tracks;
    }

    /**
     * @param string $shipVia
     * @return string
     */
    private function getCarrierCodeForShipVia(string $shipVia): string
    {
        $shipVia = strtolower($shipVia);
        $carrierCode = 'custom';

        if (strpos($shipVia, 'fedex') !== false) {
            $carrierCode = 'fedex';
        }
        else if (strpos($shipVia, 'ups') !== false) {
            $carrierCode = 'ups';
        }
        else if (strpos($shipVia, 'dhl') !== false) {
            $carrierCode = 'dhl';
        }
        else if (strpos($shipVia, 'usps') !== false) {
            $carrierCode = 'usps';
        }

        return $carrierCode;
    }

    /**
     * @return \Magento\Sales\Model\ResourceModel\Order\Collection
     */
    private function getOrderCollection(): \Magento\Sales\Model\ResourceModel\Order\Collection
    {
        $statusFilter = ['processing'];

        $collection = $this->orderCollectionFactory->create();
        $collection->addAttributeToSelect('*');
        $collection->addFieldToFilter('status', ['in' => $statusFilter]);

        /*
        $collection->addFieldToFilter(
            \Candela\Acumatica\Setup\UpgradeData::ACUMATICA_SHIPMENT_ID,
            ['null' => true]
        );
        */

        // Fetch orders that are up to 90 days old to ensure we sync orders that took longer to fulfill (i.e. backorders)
        $createdAt = new \DateTime('-90 days');
        $collection->addFieldToFilter('created_at', ['gteq' => $createdAt->format('Y-m-d H:i:s')]);

        return $collection;
    }
}
