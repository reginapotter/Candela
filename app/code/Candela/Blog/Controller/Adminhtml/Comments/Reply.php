<?php


namespace Candela\Blog\Controller\Adminhtml\Comments;

/**
 * Class Reply
 */
class Reply extends \Candela\Blog\Controller\Adminhtml\Comments
{
    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        return $this->_redirect('*/*/edit', ['reply_to_id' => $this->getRequest()->getParam('id')]);
    }
}
