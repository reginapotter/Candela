<?php
namespace Magento\Checkout\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\Checkout\Api\Data\ShippingInformationInterface
 */
interface ShippingInformationExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
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
}
