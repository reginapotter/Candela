<?php
namespace Candela\OrderComment\Plugin\Model\Order;

use Magento\Sales\Api\OrderRepositoryInterface;
use Magento\Sales\Api\Data\OrderInterface;
use Magento\Sales\Model\OrderFactory;
use Magento\Sales\Api\Data\OrderExtensionFactory;

class LoadOrderComment
{
    private $orderFactory;

    private $orderExtensionFactory;

    public function __construct(
        OrderFactory $orderFactory,
        OrderExtensionFactory $extensionFactory
    ) {
        $this->orderFactory = $orderFactory;
        $this->orderExtensionFactory = $extensionFactory;
    }

    public function afterGet(
        OrderRepositoryInterface $subject,
        OrderInterface $resultOrder
    ) {
        $this->setOrderComment($resultOrder);
        return $resultOrder;
    }

    public function afterGetList(
        OrderRepositoryInterface $subject,
        \Magento\Sales\Api\Data\OrderSearchResultInterface $orderSearchResult
    ) {
        foreach ($orderSearchResult->getItems() as $order) {
            $this->setOrderComment($order);
        }
        return $orderSearchResult;
    }

    public function setOrderComment(OrderInterface $order)
    {
        if ($order instanceof \Magento\Sales\Model\Order) {
            $value = $order->getCandelaOrderComment();
        } else {
            $temp = $this->getOrderFactory()->create();
            $temp->load($order->getId());
            $value = $temp->getCandelaOrderComment();
        }

        $extensionAttributes = $order->getExtensionAttributes();
        $orderExtension = $extensionAttributes ? $extensionAttributes : $this->getOrderExtensionFactory()->create();
        $orderExtension->setCandelaOrderComment($value);
        $order->setExtensionAttributes($orderExtension);
    }

    public function getOrderFactory()
    {
        return $this->orderFactory;
    }

    public function getOrderExtensionFactory()
    {
        return $this->orderExtensionFactory;
    }
}
