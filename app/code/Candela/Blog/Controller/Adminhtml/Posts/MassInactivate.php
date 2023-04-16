<?php


namespace Candela\Blog\Controller\Adminhtml\Posts;

use Candela\Blog\Api\Data\PostInterface;
use Candela\Blog\Model\Source\PostStatus;
use Magento\Framework\Controller\Result\Redirect;

class MassInactivate extends AbstractMassAction
{
    /**
     * @param PostInterface $post
     * @return Redirect
     */
    protected function itemAction($post)
    {
        try {
            $this->getRepository()->changeStatus($post, PostStatus::STATUS_DISABLED);
        } catch (\Exception $e) {
            $this->getMessageManager()->addErrorMessage($e->getMessage());
        }

        return $this->resultRedirectFactory->create()->setPath('*/*/');
    }
}
