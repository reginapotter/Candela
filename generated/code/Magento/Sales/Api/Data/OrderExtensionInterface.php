<?php
namespace Magento\Sales\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\Sales\Api\Data\OrderInterface
 */
interface OrderExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return \Magento\Sales\Api\Data\ShippingAssignmentInterface[]|null
     */
    public function getShippingAssignments();

    /**
     * @param \Magento\Sales\Api\Data\ShippingAssignmentInterface[] $shippingAssignments
     * @return $this
     */
    public function setShippingAssignments($shippingAssignments);

    /**
     * @return \Magento\Payment\Api\Data\PaymentAdditionalInfoInterface[]|null
     */
    public function getPaymentAdditionalInfo();

    /**
     * @param \Magento\Payment\Api\Data\PaymentAdditionalInfoInterface[] $paymentAdditionalInfo
     * @return $this
     */
    public function setPaymentAdditionalInfo($paymentAdditionalInfo);

    /**
     * @return \Magento\GiftMessage\Api\Data\MessageInterface|null
     */
    public function getGiftMessage();

    /**
     * @param \Magento\GiftMessage\Api\Data\MessageInterface $giftMessage
     * @return $this
     */
    public function setGiftMessage(\Magento\GiftMessage\Api\Data\MessageInterface $giftMessage);

    /**
     * @return \Magento\Tax\Api\Data\OrderTaxDetailsAppliedTaxInterface[]|null
     */
    public function getAppliedTaxes();

    /**
     * @param \Magento\Tax\Api\Data\OrderTaxDetailsAppliedTaxInterface[] $appliedTaxes
     * @return $this
     */
    public function setAppliedTaxes($appliedTaxes);

    /**
     * @return \Magento\Tax\Api\Data\OrderTaxDetailsItemInterface[]|null
     */
    public function getItemAppliedTaxes();

    /**
     * @param \Magento\Tax\Api\Data\OrderTaxDetailsItemInterface[] $itemAppliedTaxes
     * @return $this
     */
    public function setItemAppliedTaxes($itemAppliedTaxes);

    /**
     * @return boolean|null
     */
    public function getConvertingFromQuote();

    /**
     * @param boolean $convertingFromQuote
     * @return $this
     */
    public function setConvertingFromQuote($convertingFromQuote);

    /**
     * @return string|null
     */
    public function getCandelaQuestion();

    /**
     * @param string $candelaQuestion
     * @return $this
     */
    public function setCandelaQuestion($candelaQuestion);

    /**
     * @return string|null
     */
    public function getCandelaOptions();

    /**
     * @param string $candelaOptions
     * @return $this
     */
    public function setCandelaOptions($candelaOptions);

    /**
     * @return string|null
     */
    public function getCandelaQuestionTwo();

    /**
     * @param string $candelaQuestionTwo
     * @return $this
     */
    public function setCandelaQuestionTwo($candelaQuestionTwo);

    /**
     * @return string|null
     */
    public function getCandelaOptionsTwo();

    /**
     * @param string $candelaOptionsTwo
     * @return $this
     */
    public function setCandelaOptionsTwo($candelaOptionsTwo);

    /**
     * @return string|null
     */
    public function getCandelaQuestionThree();

    /**
     * @param string $candelaQuestionThree
     * @return $this
     */
    public function setCandelaQuestionThree($candelaQuestionThree);

    /**
     * @return string|null
     */
    public function getCandelaOptionsThree();

    /**
     * @param string $candelaOptionsThree
     * @return $this
     */
    public function setCandelaOptionsThree($candelaOptionsThree);

    /**
     * @return string|null
     */
    public function getCandelaOrderComment();

    /**
     * @param string $candelaOrderComment
     * @return $this
     */
    public function setCandelaOrderComment($candelaOrderComment);
}
