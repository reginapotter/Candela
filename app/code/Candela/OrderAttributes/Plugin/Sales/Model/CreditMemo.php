<?php
/**
 *
 */
namespace Candela\OrderAttributes\Plugin\Sales\Model;

use Magento\Sales\Api\CreditmemoRepositoryInterface;

/**
 * Class CreditMemo
 */
class CreditMemo
{
    /**
     * save attributes to credit memo
     * @param CreditmemoRepositoryInterface $subject
     * @param $result
     * @return mixed
     */
    public function afterSave(CreditmemoRepositoryInterface $subject, $result)
    {
        $order = $result->getOrder();
        $invoiceCollection = $order->getInvoiceCollection();
        $areThereChanges = false;

        foreach ($invoiceCollection as $invoice) {
            if ($invoice->getCandelaQuestion() && $invoice->getCandelaOptions()) {
                $result->setCandelaQuestion($invoice->getCandelaQuestion());
                $result->setCandelaOptions($invoice->getCandelaOptions());
                $areThereChanges = true;
            }
            if ($invoice->getCandelaQuestionTwo() && $invoice->getCandelaOptionsTwo()) {
                $result->setCandelaQuestionTwo($invoice->getCandelaQuestionTwo());
                $result->setCandelaOptionsTwo($invoice->getCandelaOptionsTwo());
                $areThereChanges = true;
            }
            if ($invoice->getCandelaQuestionThree() && $invoice->getCandelaOptionsThree()) {
                $result->setCandelaQuestionThree($invoice->getCandelaQuestionThree());
                $result->setCandelaOptionsThree($invoice->getCandelaOptionsThree());
                $areThereChanges = true;
            }
        }
        if ($areThereChanges) {
            $result->save();
        }
        return $result;
    }
}
