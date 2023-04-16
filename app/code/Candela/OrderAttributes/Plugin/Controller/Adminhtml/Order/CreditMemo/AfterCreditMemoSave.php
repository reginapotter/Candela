<?php
/**
 *
 */
namespace Candela\OrderAttributes\Plugin\Controller\Adminhtml\Order\CreditMemo;

use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Message\ManagerInterface;
use Magento\Sales\Api\CreditmemoRepositoryInterface;
use Magento\Sales\Controller\Adminhtml\Order\Creditmemo\Save;
use Magento\Sales\Model\OrderRepository;
use Candela\OrderAttributes\Model\ConfigProvider as OrderAttributesConfigProvider;

class AfterCreditMemoSave
{
    /** @var OrderAttributesConfigProvider */
    private $configProvider;

    /** @var OrderRepository */
    private $orderRepository;

    /** @var ManagerInterface */
    private $messageManager;

    /** @var CreditmemoRepositoryInterface */
    private $creditMemoRepository;

    public function __construct(
        OrderAttributesConfigProvider $configProvider,
        OrderRepository $orderRepository,
        ManagerInterface $messageManager,
        CreditmemoRepositoryInterface $creditMemoRepository
    ) {
        $this->configProvider = $configProvider;
        $this->orderRepository = $orderRepository;
        $this->messageManager = $messageManager;
        $this->creditMemoRepository = $creditMemoRepository;
    }


    /**
     * Save order attributes answers in credit memo
     *
     * @param Save $subject
     * @param $result
     * @return mixed
     */
    public function afterExecute(Save $subject, $result)
    {
        if ($orderId = $subject->getRequest()->getParam('order_id')) {
            try {
                $order = $this->orderRepository->get($orderId);

                if ($creditMemo = $order->getCreditmemosCollection()->getLastItem()) {
                    $areThereChanges = false;

                    if ($firstQuestionAnswer = $subject->getRequest()->getParam('candela_question_0')) {
                        $firstQuestionOptions = $this->configProvider->getOptions('first_options');

                        if (isset($firstQuestionOptions[$firstQuestionAnswer])) {
                            $creditMemo->setCandelaQuestion($this->configProvider->getQuestion('first_question'));
                            $creditMemo->setCandelaOptions($firstQuestionOptions[$firstQuestionAnswer]);
                            $areThereChanges = true;
                        }
                    }

                    if ($secondQuestionAnswer = $subject->getRequest()->getParam('candela_question_1')) {
                        $secondQuestionOptions = $this->configProvider->getOptions('second_options');

                        if (isset($secondQuestionOptions[$secondQuestionAnswer])) {
                            $creditMemo->setCandelaQuestionTwo($this->configProvider->getQuestion('second_question'));
                            $creditMemo->setCandelaOptionsTwo($secondQuestionOptions[$secondQuestionAnswer]);
                            $areThereChanges = true;
                        }
                    }

                    if ($thirdQuestionAnswer = $subject->getRequest()->getParam('candela_question_2')) {
                        $thirdQuestionOptions = $this->configProvider->getOptions('third_options');

                        if (isset($thirdQuestionOptions[$thirdQuestionAnswer])) {
                            $creditMemo->setCandelaQuestionThree($this->configProvider->getQuestion('third_question'));
                            $creditMemo->setCandelaOptionsThree($thirdQuestionOptions[$thirdQuestionAnswer]);
                            $areThereChanges = true;
                        }
                    }

                    if ($areThereChanges) {
                        $this->creditMemoRepository->save($creditMemo);
                    }
                }
            } catch (LocalizedException $exception) {
                $this->messageManager->addErrorMessage($exception->getMessage());
            } catch (\Exception $exception) {
                $this->messageManager->addExceptionMessage($exception, 'Cannot load this order.');
            }
        }

        return $result;
    }
}
