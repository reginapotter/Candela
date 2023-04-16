<?php
/**
 *
 */
namespace Candela\OrderAttributes\Controller\Adminhtml\Index;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Backend\Model\Session\Quote as AdminSessionQuote;
use Magento\Quote\Model\ResourceModel\Quote as QuoteResource;

/**
 * Class SaveFields
 */
class SaveFields extends Action
{
    const EMPTY_SET ='Please select...';
    /**
     * @var AdminSessionQuote
     */
    private $sessionQuote;

    /**
     * @var QuoteResource
     */
    private $quoteResource;

    /**
     * SaveFields constructor.
     * @param Context $context
     * @param QuoteResource $quoteResource
     * @param AdminSessionQuote $sessionQuote
     */
    public function __construct(
        Context $context,
        QuoteResource $quoteResource,
        AdminSessionQuote $sessionQuote
    ) {
        $this->sessionQuote = $sessionQuote;
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
        $request = $this->getRequest();
        $firstQuestion = $request->getParam('first_question');
        $secondQuestion = $request->getParam('second_question');
        $thirdQuestion = $request->getParam('third_question');
        $firstOption = $request->getParam('first_option');
        $secondOption = $request->getParam('second_option');
        $thirdOption = $request->getParam('third_option');

        $quoteId = $this->sessionQuote->getQuote()->getId();
        $quoteAdmin = $this->sessionQuote->getQuote();

        if (!$quoteId || $quoteId === null) {
            $this->_redirect('sales/order/index');
        } else {
            try {
                if ($firstQuestion && $firstOption != self::EMPTY_SET) {
                    $quoteAdmin->setCandelaQuestion($firstQuestion);
                    $quoteAdmin->setCandelaOptions($firstOption);
                    $areThereChanges = true;
                }
                if ($secondQuestion && $secondOption != self::EMPTY_SET) {
                    $quoteAdmin->setCandelaQuestionTwo($secondQuestion);
                    $quoteAdmin->setCandelaOptionsTwo($secondOption);
                    $areThereChanges = true;
                }
                if ($thirdQuestion && $thirdOption != self::EMPTY_SET) {
                    $quoteAdmin->setCandelaQuestionThree($thirdQuestion);
                    $quoteAdmin->setCandelaOptionsThree($thirdOption);
                    $areThereChanges = true;
                }
                if ($areThereChanges) {
                    $this->quoteResource->save($quoteAdmin);
                }
            } catch (\Exception $e) {
                $this->_redirect('sales/order/index');
            }
            $this->_redirect('sales/order/index');
        }
    }
}
