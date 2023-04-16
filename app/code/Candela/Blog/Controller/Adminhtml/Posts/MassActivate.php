<?php


namespace Candela\Blog\Controller\Adminhtml\Posts;

use Candela\Blog\Api\Data\PostInterface;
use Candela\Blog\Model\Source\PostStatus;

class MassActivate extends AbstractMassAction
{
    /**
     * @param $post
     * @return \Magento\Framework\Controller\Result\Redirect
     */
    protected function itemAction($post)
    {
        try {
            $this->getRepository()->changeStatus($post, PostStatus::STATUS_ENABLED);
        } catch (\Exception $e) {
            $this->getMessageManager()->addErrorMessage($e->getMessage());
        }

        return $this->resultRedirectFactory->create()->setPath('*/*/');
    }
}
