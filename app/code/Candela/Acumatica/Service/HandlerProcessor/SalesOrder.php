<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Service\HandlerProcessor;

class SalesOrder
{
    /**
     * @var \Candela\Acumatica\Service\HandlerProcessor\Customer
     */
    private $customerHandler;

    /**
     * @var \Candela\Acumatica\Service\HandlerProcessor\Payment
     */
    private $paymentHandler;

    /**
     * @var \Candela\Acumatica\Platform\Adapter
     */
    private $platformAdapter;

    /**
     * @var \Candela\Acumatica\Service\HandlerProcessor\SalesOrder\SalesOrderDataInterface
     */
    private $salesOrderData;

    /**
     * @var \Magento\Sales\Api\OrderRepositoryInterface
     */
    private $orderRepository;

    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;

    /**
     * @var \Magento\Framework\Event\ManagerInterface
     */
    private $eventManager;

    /**
     * @param \Candela\Acumatica\Service\HandlerProcessor\Customer $customerHandler
     * @param \Candela\Acumatica\Service\HandlerProcessor\Payment $paymentHandler
     * @param \Candela\Acumatica\Platform\Adapter $platformAdapter
     * @param \Candela\Acumatica\Service\HandlerProcessor\SalesOrder\SalesOrderDataInterface $salesOrderData
     * @param \Magento\Sales\Api\OrderRepositoryInterface $orderRepository
     */
    public function __construct(
        \Candela\Acumatica\Service\HandlerProcessor\Customer $customerHandler,
        \Candela\Acumatica\Service\HandlerProcessor\Payment $paymentHandler,
        \Candela\Acumatica\Platform\Adapter $platformAdapter,
        \Candela\Acumatica\Service\HandlerProcessor\SalesOrder\SalesOrderDataInterface $salesOrderData,
        \Magento\Sales\Api\OrderRepositoryInterface $orderRepository,
        \Psr\Log\LoggerInterface $logger,
        \Magento\Framework\Event\ManagerInterface $eventManager
    ) {
        $this->customerHandler = $customerHandler;
        $this->paymentHandler = $paymentHandler;
        $this->platformAdapter = $platformAdapter;
        $this->salesOrderData = $salesOrderData;
        $this->orderRepository = $orderRepository;
        $this->logger = $logger;
        $this->eventManager = $eventManager;
    }

    /**
     * @param int $orderId
     * @param int $websiteId
     * @return array
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function create(int $orderId, int $websiteId): array
    {
        $order = $this->orderRepository->get($orderId);
        $acumaticaCustomer = $this->customerHandler->syncCustomerFromOrder($order, $websiteId);

        $orderData = $this->salesOrderData->prepareOrderData($order, $websiteId);
        $orderData['CustomerID']['value'] = $acumaticaCustomer['CustomerID']['value'];
        $orderData['LocationID']['value'] = $acumaticaCustomer['LocationID']['value'];

        $this->eventManager->dispatch('acumatica_before_sales_order_create', [
            'acumatica_order_data' => $orderData,
            'order' => $order
        ]);

        $salesOrder = $this->platformAdapter->createSalesOrder($orderData, $websiteId);
        $order->setAcumaticaSalesOrderId($salesOrder['OrderNbr']['value']);
        $this->orderRepository->save($order);

        if ($salesOrder['OrderType']['value'] === 'SO') {
            try {
                $salesOrder['PaymentRef']['value'] = $order->getPayment() ? $order->getPayment()->getLastTransId() : '';
                $payment = $this->paymentHandler->create($salesOrder, $websiteId);
                $orderData = $this->salesOrderData->applyPaymentToOrder($salesOrder, $payment);
                $salesOrder = $this->platformAdapter->updateSalesOrder($orderData, $websiteId);
            } catch (\Exception $exception) {
                $this->platformAdapter->deleteSalesOrder($salesOrder['OrderNbr']['value'], $websiteId);
                throw new \Exception($exception->getMessage());
            }
        }

        return $salesOrder;
    }
}
