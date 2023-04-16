<?php
namespace Magento\Sales\Api\Data;

/**
 * Extension class for @see \Magento\Sales\Api\Data\OrderInterface
 */
class OrderExtension extends \Magento\Framework\Api\AbstractSimpleObject implements OrderExtensionInterface
{
    /**
     * @return \Magento\Sales\Api\Data\ShippingAssignmentInterface[]|null
     */
    public function getShippingAssignments()
    {
        return $this->_get('shipping_assignments');
    }

    /**
     * @param \Magento\Sales\Api\Data\ShippingAssignmentInterface[] $shippingAssignments
     * @return $this
     */
    public function setShippingAssignments($shippingAssignments)
    {
        $this->setData('shipping_assignments', $shippingAssignments);
        return $this;
    }

    /**
     * @return \Magento\Payment\Api\Data\PaymentAdditionalInfoInterface[]|null
     */
    public function getPaymentAdditionalInfo()
    {
        return $this->_get('payment_additional_info');
    }

    /**
     * @param \Magento\Payment\Api\Data\PaymentAdditionalInfoInterface[] $paymentAdditionalInfo
     * @return $this
     */
    public function setPaymentAdditionalInfo($paymentAdditionalInfo)
    {
        $this->setData('payment_additional_info', $paymentAdditionalInfo);
        return $this;
    }

    /**
     * @return \Magento\GiftMessage\Api\Data\MessageInterface|null
     */
    public function getGiftMessage()
    {
        return $this->_get('gift_message');
    }

    /**
     * @param \Magento\GiftMessage\Api\Data\MessageInterface $giftMessage
     * @return $this
     */
    public function setGiftMessage(\Magento\GiftMessage\Api\Data\MessageInterface $giftMessage)
    {
        $this->setData('gift_message', $giftMessage);
        return $this;
    }

    /**
     * @return \Magento\Tax\Api\Data\OrderTaxDetailsAppliedTaxInterface[]|null
     */
    public function getAppliedTaxes()
    {
        return $this->_get('applied_taxes');
    }

    /**
     * @param \Magento\Tax\Api\Data\OrderTaxDetailsAppliedTaxInterface[] $appliedTaxes
     * @return $this
     */
    public function setAppliedTaxes($appliedTaxes)
    {
        $this->setData('applied_taxes', $appliedTaxes);
        return $this;
    }

    /**
     * @return \Magento\Tax\Api\Data\OrderTaxDetailsItemInterface[]|null
     */
    public function getItemAppliedTaxes()
    {
        return $this->_get('item_applied_taxes');
    }

    /**
     * @param \Magento\Tax\Api\Data\OrderTaxDetailsItemInterface[] $itemAppliedTaxes
     * @return $this
     */
    public function setItemAppliedTaxes($itemAppliedTaxes)
    {
        $this->setData('item_applied_taxes', $itemAppliedTaxes);
        return $this;
    }

    /**
     * @return boolean|null
     */
    public function getConvertingFromQuote()
    {
        return $this->_get('converting_from_quote');
    }

    /**
     * @param boolean $convertingFromQuote
     * @return $this
     */
    public function setConvertingFromQuote($convertingFromQuote)
    {
        $this->setData('converting_from_quote', $convertingFromQuote);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCandelaQuestion()
    {
        return $this->_get('candela_question');
    }

    /**
     * @param string $candelaQuestion
     * @return $this
     */
    public function setCandelaQuestion($candelaQuestion)
    {
        $this->setData('candela_question', $candelaQuestion);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCandelaOptions()
    {
        return $this->_get('candela_options');
    }

    /**
     * @param string $candelaOptions
     * @return $this
     */
    public function setCandelaOptions($candelaOptions)
    {
        $this->setData('candela_options', $candelaOptions);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCandelaQuestionTwo()
    {
        return $this->_get('candela_question_two');
    }

    /**
     * @param string $candelaQuestionTwo
     * @return $this
     */
    public function setCandelaQuestionTwo($candelaQuestionTwo)
    {
        $this->setData('candela_question_two', $candelaQuestionTwo);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCandelaOptionsTwo()
    {
        return $this->_get('candela_options_two');
    }

    /**
     * @param string $candelaOptionsTwo
     * @return $this
     */
    public function setCandelaOptionsTwo($candelaOptionsTwo)
    {
        $this->setData('candela_options_two', $candelaOptionsTwo);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCandelaQuestionThree()
    {
        return $this->_get('candela_question_three');
    }

    /**
     * @param string $candelaQuestionThree
     * @return $this
     */
    public function setCandelaQuestionThree($candelaQuestionThree)
    {
        $this->setData('candela_question_three', $candelaQuestionThree);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCandelaOptionsThree()
    {
        return $this->_get('candela_options_three');
    }

    /**
     * @param string $candelaOptionsThree
     * @return $this
     */
    public function setCandelaOptionsThree($candelaOptionsThree)
    {
        $this->setData('candela_options_three', $candelaOptionsThree);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCandelaOrderComment()
    {
        return $this->_get('candela_order_comment');
    }

    /**
     * @param string $candelaOrderComment
     * @return $this
     */
    public function setCandelaOrderComment($candelaOrderComment)
    {
        $this->setData('candela_order_comment', $candelaOrderComment);
        return $this;
    }
}
