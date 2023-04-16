<?php
/**
 *
 */
namespace Candela\OrderAttributes\Plugin\Model;

use Magento\Checkout\Api\Data\ShippingInformationInterface;
use Magento\Quote\Model\QuoteRepository;

/**
 * plugin - save to quote table
 * Class ShippingInformationManagement
 * @package Candela\OrderAttributes\Plugin\Checkout\Model
 */
class ShippingInformationManagement
{
    /**
     * @var QuoteRepository
     */
    protected $quoteRepository;

    /**
     * ShippingInformationManagement constructor.
     * @param QuoteRepository $quoteRepository
     */
    public function __construct(
        QuoteRepository $quoteRepository
    ) {
        $this->quoteRepository = $quoteRepository;
    }

    /**
     * @param \Magento\Checkout\Model\ShippingInformationManagement $subject
     * @param $cartId
     * @param ShippingInformationInterface $addressInformation
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function beforeSaveAddressInformation(
        \Magento\Checkout\Model\ShippingInformationManagement $subject,
        $cartId,
        ShippingInformationInterface $addressInformation
    ) {
        $extAttributes = $addressInformation->getExtensionAttributes();
        $candela_question = $extAttributes->getCandelaQuestion();
        $candela_question_two = $extAttributes->getCandelaQuestionTwo();
        $candela_question_three = $extAttributes->getCandelaQuestionThree();
        $candela_options = $extAttributes->getCandelaOptions();
        $candela_options_two = $extAttributes->getCandelaOptionsTwo();
        $candela_options_three = $extAttributes->getCandelaOptionsThree();
        $quote = $this->quoteRepository->getActive($cartId);

        if ($candela_question && $candela_options) {
            $quote->setCandelaQuestion($candela_question);
            $quote->setCandelaOptions($candela_options);
        }
        if ($candela_question_two && $candela_options_two) {
            $quote->setCandelaQuestionTwo($candela_question_two);
            $quote->setCandelaOptionsTwo($candela_options_two);
        }
        if ($candela_question_three && $candela_options_three) {
            $quote->setCandelaQuestionThree($candela_question_three);
            $quote->setCandelaOptionsThree($candela_options_three);
        }
    }
}
