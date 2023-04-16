<?php
/**
 *
 */
namespace Candela\OrderAttributes\Controller\Index;

use Magento\Checkout\Model\Session;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Quote\Model\QuoteFactory;
use Magento\Quote\Model\ResourceModel\Quote as QuoteResource;

/**
 * Class SaveFields
 * @package Candela\OrderAttributes\Controller\Index
 */
class SaveFields extends Action
{
    const EMPTY_SET ='Please select...';
    /**
     * @var Session
     */
    protected $checkoutSession;
    /**
     * @var QuoteFactory
     */
    protected $quoteFactory;
    /**
     * @var QuoteResource
     */
    protected $quoteResource;

    /**
     * SaveFields constructor.
     * @param Context $context
     * @param Session $checkoutSession
     * @param QuoteFactory $quoteFactory
     * @param QuoteResource $quoteResource
     */
    public function __construct(
        Context $context,
        Session $checkoutSession,
        QuoteFactory $quoteFactory,
        QuoteResource $quoteResource
    ) {
        $this->checkoutSession = $checkoutSession;
        $this->quoteFactory = $quoteFactory;
        $this->quoteResource = $quoteResource;
        parent::__construct($context);
    }

    /**
     * save to quote
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|void
     */
    public function execute()
    {
        $areThereChanges = false;
        $firstQuestion = $this->getRequest()->getParam('first_question');
        $secondQuestion = $this->getRequest()->getParam('second_question');
        $thirdQuestion = $this->getRequest()->getParam('third_question');
        $firstOption = $this->getRequest()->getParam('first_option');
        $secondOption = $this->getRequest()->getParam('second_option');
        $thirdOption = $this->getRequest()->getParam('third_option');

        $quoteId = $this->checkoutSession->getQuoteId();
        $quote = $this->quoteFactory->create()->load($quoteId);

        if (!$quoteId || $quoteId === null) {
            $this->_redirect('paypal/payflowexpress/review');
        } else {
            try {
                if ($firstQuestion && $firstOption != self::EMPTY_SET) {
                    $quote->setCandelaQuestion($firstQuestion);
                    $quote->setCandelaOptions($firstOption);
                    $areThereChanges = true;
                }
                if ($secondQuestion && $secondOption != self::EMPTY_SET) {
                    $quote->setCandelaQuestionTwo($secondQuestion);
                    $quote->setCandelaOptionsTwo($secondOption);
                    $areThereChanges = true;
                }
                if ($thirdQuestion && $thirdOption != self::EMPTY_SET) {
                    $quote->setCandelaQuestionThree($thirdQuestion);
                    $quote->setCandelaOptionsThree($thirdOption);
                    $areThereChanges = true;
                }
                if ($areThereChanges) {
                    $this->quoteResource->save($quote);
                }
            } catch (\Exception $e) {
                $this->_redirect('paypal/payflowexpress/review');
            }
        }
        $this->_redirect('paypal/payflowexpress/review');
    }
}
