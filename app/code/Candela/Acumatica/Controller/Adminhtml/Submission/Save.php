<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types=1);

namespace Candela\Acumatica\Controller\Adminhtml\Submission;

use Magento\Framework\Exception\LocalizedException;
use Candela\Acumatica\Api\SubmissionRepositoryInterface;
use Magento\Backend\App\Action;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\Result\Redirect;
use Magento\Framework\Controller\ResultInterface;

class Save extends Action
{
    /**
     * @var \Candela\Acumatica\Api\SubmissionRepositoryInterface
     */
    private $submissionRepository;

    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Candela\Acumatica\Api\SubmissionRepositoryInterface $submissionRepository
     */
    public function __construct(
        Action\Context $context,
        SubmissionRepositoryInterface $submissionRepository
    ) {
        $this->submissionRepository = $submissionRepository;

        parent::__construct($context);
    }

    /**
     * @return ResponseInterface|Redirect|ResultInterface
     */
    public function execute()
    {
        $resultRedirect = $this->resultRedirectFactory->create();
        $data = $this->getRequest()->getPostValue();
        if ($data && $this->getRequest()->getParam('submission_id')) {
            $submissionId = $this->getRequest()->getParam('submission_id');

            try {
                $submission = $this->submissionRepository->getById($submissionId);
            } catch (LocalizedException $e) {
                $this->messageManager->addErrorMessage(__('This submission no longer exists.'));
                return $resultRedirect->setPath('*/*/');
            }

            $submission->setData($data);

            try {
                $this->submissionRepository->save($submission);
                $this->messageManager->addSuccessMessage(__('You saved the submission.'));

                return $resultRedirect->setPath('*/*/edit', ['submission_id' => $submissionId]);
            } catch (LocalizedException $e) {
                $this->messageManager->addErrorMessage($e->getMessage());
            } catch (\Exception $e) {
                $this->messageManager->addExceptionMessage($e, __('Something went wrong while saving the submission.'));
            }

            return $resultRedirect->setPath('*/*/edit', ['submission_id' => $submissionId]);
        }
        return $resultRedirect->setPath('*/*/');
    }
}
