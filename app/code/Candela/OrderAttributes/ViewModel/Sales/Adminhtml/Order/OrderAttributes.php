<?php
/**
 *
 */
namespace Candela\OrderAttributes\ViewModel\Sales\Adminhtml\Order;

use Magento\Framework\Registry;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Sales\Model\Order;

class OrderAttributes implements ArgumentInterface
{
    /** @var Registry */
    protected $_registry;

    /**
     * OrderAttributes constructor.
     *
     * @param Registry $registry
     */
    public function __construct(
        Registry $registry
    ) {
        $this->_registry = $registry;
    }

    /**
     * Retrieve current order model instance
     *
     * @return Order
     */
    private function getOrder()
    {
        return $this->_registry->registry('current_order');
    }

    /**
     * Check if the order has any custom answer
     *
     * @return bool
     */
    public function orderHasCustomAnswers(): bool
    {
        return $this->getAnswerFromFirstQuestion() ||
            $this->getAnswerFromSecondQuestion() ||
            $this->getAnswerFromThirdQuestion();
    }

    /**
     * Get first question title
     *
     * @return mixed
     */
    public function getFirstQuestion()
    {
        return $this->getOrder()->getCandelaQuestion();
    }

    /**
     * Get second question title
     *
     * @return mixed
     */
    public function getSecondQuestion()
    {
        return $this->getOrder()->getCandelaQuestionTwo();
    }

    /**
     * Get third question title
     *
     * @return mixed
     */
    public function getThirdQuestion()
    {
        return $this->getOrder()->getCandelaQuestionThree();
    }

    /**
     * Get answer from first question
     *
     * @return mixed
     */
    public function getAnswerFromFirstQuestion()
    {
        return $this->getOrder()->getCandelaOptions();
    }

    /**
     * Get answer from second question
     *
     * @return mixed
     */
    public function getAnswerFromSecondQuestion()
    {
        return $this->getOrder()->getCandelaOptionsTwo();
    }

    /**
     * Get answer from third question
     *
     * @return mixed
     */
    public function getAnswerFromThirdQuestion()
    {
        return $this->getOrder()->getCandelaOptionsThree();
    }
}
