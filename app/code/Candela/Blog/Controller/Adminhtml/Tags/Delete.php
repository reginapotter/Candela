<?php


namespace Candela\Blog\Controller\Adminhtml\Tags;

/**
 * Class Delete
 */
class Delete extends \Candela\Blog\Controller\Adminhtml\Tags
{
    /**
     * @return \Magento\Backend\Model\View\Result\Redirect
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();

        $id = (int)$this->getRequest()->getParam('id');
        if ($id) {
            try {
                $this->getTagRepository()->deleteById($id);
                $this->getMessageManager()->addSuccessMessage(__('You deleted tag.'));

                return $resultRedirect->setPath('*/*/');
            } catch (\Exception $e) {
                $this->getMessageManager()->addErrorMessage($e->getMessage());

                return $resultRedirect->setPath('*/*/edit', ['id' => $id]);
            }
        }
        $this->getMessageManager()->addErrorMessage(__('We can\'t find a tag to delete.'));

        return $resultRedirect->setPath('*/*/');
    }
}
