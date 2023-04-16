<?php
/**
 *
 */
namespace Candela\OrderAttributes\Controller\Adminhtml\Index;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Sales\Api\InvoiceRepositoryInterface;
use Magento\Sales\Api\OrderRepositoryInterface;

/**
 * Class SaveFields
 */
class CreditMemo extends Action
{
    const EMPTY_SET ='Please select...';

    /**
     * @var InvoiceRepositoryInterface
     */
    private $invoiceRepository;

    /**
     * @var OrderRepositoryInterface
     */
    private $orderRepository;

    /**
     * CreditMemo constructor.
     * @param Context $context
     * @param InvoiceRepositoryInterface $invoiceRepository
     * @param OrderRepositoryInterface $orderRepository
     */
    public function __construct(
        Context $context,
        InvoiceRepositoryInterface $invoiceRepository,
        OrderRepositoryInterface $orderRepository
    ) {
        $this->invoiceRepository = $invoiceRepository;
        $this->orderRepository = $orderRepository;
        parent::__construct($context);
    }

    public function execute()
    {
        $request = $this->getRequest();
        $orderId = $request->getParam('order_id');
        $order = $this->orderRepository->get($orderId);
        $invoiceCollection = $order->getInvoiceCollection();

        $firstQuestion = $request->getParam('first_question');
        $secondQuestion = $request->getParam('second_question');
        $thirdQuestion = $request->getParam('third_question');
        $firstOption = $request->getParam('first_option');
        $secondOption = $request->getParam('second_option');
        $thirdOption = $request->getParam('third_option');

        if ($invoiceCollection) {
            try {
                $areThereChanges = false;
                foreach ($invoiceCollection as $invoice) {
                    if ($firstQuestion && $firstOption != self::EMPTY_SET) {
                        $invoice->setCandelaQuestion($firstQuestion);
                        $invoice->setCandelaOptions($firstOption);
                        $areThereChanges = true;
                    }
                    if ($secondQuestion && $secondOption != self::EMPTY_SET) {
                        $invoice->setCandelaQuestionTwo($secondQuestion);
                        $invoice->setCandelaOptionsTwo($secondOption);
                        $areThereChanges = true;
                    }
                    if ($thirdQuestion && $thirdOption != self::EMPTY_SET) {
                        $invoice->setCandelaQuestionThree($thirdQuestion);
                        $invoice->setCandelaOptionsThree($thirdOption);
                        $areThereChanges = true;
                    }
                    if ($areThereChanges) {
                        $this->invoiceRepository->save($invoice);
                    }
                }
            } catch (\Exception $e) {
                $this->_redirect('sales/order/index');
            }
        }
        $this->_redirect('sales/order/index');
    }
}
