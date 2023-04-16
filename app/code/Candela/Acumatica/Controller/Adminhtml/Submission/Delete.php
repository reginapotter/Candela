<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types=1);

namespace Candela\Acumatica\Controller\Adminhtml\Submission;

use Candela\Acumatica\Api\SubmissionRepositoryInterface;
use Magento\Backend\App\Action;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\Result\Redirect;
use Magento\Framework\Controller\ResultInterface;

class Delete extends Action
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

        $submissionId = $this->getRequest()->getParam('submission_id');
        if ($submissionId) {
            try {
                $this->submissionRepository->deleteById($submissionId);

                $this->messageManager->addSuccessMessage(__('You deleted the submission.'));

                return $resultRedirect->setPath('acumatica/publish/queue');
            } catch (\Exception $e) {
                $this->messageManager->addErrorMessage($e->getMessage());

                return $resultRedirect->setPath('*/*/edit', ['submission_id' => $submissionId]);
            }
        }
        $this->messageManager->addErrorMessage(__('We can\'t find a submission to delete.'));

        return $resultRedirect->setPath('acumatica/publish/queue');
    }
}
