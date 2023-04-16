<?php
/**
 *
 */
namespace Candela\OrderAttributes\Plugin\Sales\Model\AdminOrder;

use Magento\Sales\Model\AdminOrder\Create;

/**
 * Class CreatePlugin
 */
class CreatePlugin
{
    /**
     * @param Create $subject
     * @param $result
     * @return mixed
     */
    public function afterCreateOrder(Create $subject, $result)
    {
        $quote = $subject->getQuote();
        $areThereChanges = false;

        if ($quote->getCandelaQuestion() && $quote->getCandelaOptions()) {
            $result->setCandelaQuestion($quote->getCandelaQuestion());
            $result->setCandelaOptions($quote->getCandelaOptions());
            $areThereChanges = true;
        }
        if ($quote->getCandelaQuestionTwo() && $quote->getCandelaOptionsTwo()) {
            $result->setCandelaQuestionTwo($quote->getCandelaQuestionTwo());
            $result->setCandelaOptionsTwo($quote->getCandelaOptionsTwo());
            $areThereChanges = true;
        }
        if ($quote->getCandelaQuestionThree() && $quote->getCandelaOptionsThree()) {
            $result->setCandelaQuestionThree($quote->getCandelaQuestionThree());
            $result->setCandelaOptionsThree($quote->getCandelaOptionsThree());
            $areThereChanges = true;
        }
        if ($areThereChanges) {
            $result->save();
        }
        return $result;
    }
}
