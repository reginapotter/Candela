<?php


namespace Candela\Blog\Controller\Adminhtml\Comments;

use Candela\Blog\Api\Data\CommentInterface;
use Candela\Blog\Model\Source\CommentStatus;

/**
 * Class MassInactivate
 */
class MassInactivate extends AbstractMassAction
{
    /**
     * @param CommentInterface $comment
     * @return \Magento\Framework\Controller\Result\Redirect
     */
    protected function itemAction($comment)
    {
        try {
            $comment->setStatus(CommentStatus::STATUS_REJECTED);
            $this->getRepository()->save($comment);
        } catch (\Exception $e) {
            $this->getMessageManager()->addErrorMessage($e->getMessage());
        }

        return $this->resultRedirectFactory->create()->setPath('*/*/');
    }
}
