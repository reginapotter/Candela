<?php
/**
 *
 */
namespace Candela\OrderAttributes\Plugin\Model;

use Magento\Checkout\Model\Session;
use Magento\Sales\Api\Data\OrderInterface;
use Magento\Sales\Api\OrderManagementInterface;

/**
 * Class OrderManagement
 * @package Candela\OrderAttributes\Plugin\Model
 */
class OrderManagement
{
    /**
     * @var Session
     */
    protected $checkoutSession;

    /**
     * OrderManagement constructor.
     * @param Session $checkoutSession
     */
    public function __construct(
        Session $checkoutSession
    ) {
        $this->checkoutSession = $checkoutSession;
    }

    /**
     * @param OrderManagementInterface $subject
     * @param OrderInterface $order
     * @return OrderInterface
     */
    public function afterPlace(OrderManagementInterface $subject, OrderInterface $order)
    {
        $quote = $this->checkoutSession->getQuote();
        $areThereChanges = false;

        if ($quote->getCandelaQuestion() && $quote->getCandelaOptions()) {
            $order->setCandelaQuestion($quote->getCandelaQuestion());
            $order->setCandelaOptions($quote->getCandelaOptions());
            $areThereChanges = true;
        }
        if ($quote->getCandelaQuestionTwo() && $quote->getCandelaOptionsTwo()) {
            $order->setCandelaQuestionTwo($quote->getCandelaQuestionTwo());
            $order->setCandelaOptionsTwo($quote->getCandelaOptionsTwo());
            $areThereChanges = true;
        }
        if ($quote->getCandelaQuestionThree() && $quote->getCandelaOptionsThree()) {
            $order->setCandelaQuestionThree($quote->getCandelaQuestionThree());
            $order->setCandelaOptionsThree($quote->getCandelaOptionsThree());
            $areThereChanges = true;
        }
        if ($areThereChanges) {
            $order->save();
        }
        return $order;
    }
}
