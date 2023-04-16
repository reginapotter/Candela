<?php


namespace Candela\Blog\Controller\Adminhtml\Comments;

use Candela\Blog\Model\Source\CommentStatus;

/**
 * Class
 */
class Approve extends \Candela\Blog\Controller\Adminhtml\Comments
{
    /**
     * @return \Magento\Backend\Model\View\Result\Redirect
     */
    public function execute()
    {
        $id = (int)$this->getRequest()->getParam('id');

        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();

        try {
            /** @var \Candela\Blog\Model\Comments $model */
            $model = $this->getCommentRepository()->getById($id);
            $model->setData('status', CommentStatus::STATUS_APPROVED);
            $this->getCommentRepository()->save($model);
        } catch (\Exception $e) {
            $this->getMessageManager()->addErrorMessage($e->getMessage());
        }

        return $resultRedirect->setPath('*/*/');
    }
}
