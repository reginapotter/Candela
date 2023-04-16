<?php
namespace Magento\Checkout\Api\Data;

/**
 * Extension class for @see \Magento\Checkout\Api\Data\ShippingInformationInterface
 */
class ShippingInformationExtension extends \Magento\Framework\Api\AbstractSimpleObject implements ShippingInformationExtensionInterface
{
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
}
