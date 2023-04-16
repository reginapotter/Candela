<?php


namespace Candela\Blog\Controller\Adminhtml\Posts;

use Candela\Blog\Controller\Adminhtml\Posts;
use Candela\Blog\Model\DataProvider\AbstractModifier;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;

class Edit extends Posts
{
    public const CURRENT_CANDELA_BLOG_POST = 'current_candela_blog_post';

    public function execute(): ResultInterface
    {
        $id = $this->getRequest()->getParam('id');
        $storeId = (int)$this->getRequest()->getParam('store');
        $model = $this->getPostRepository()->getPost();
        if ($id) {
            try {
                $model = $this->getPostRepository()->getById($id);
            } catch (\Exception $e) {
                $this->getMessageManager()->addErrorMessage($e->getMessage());
                $resultPage = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
                $resultPage->setPath('*/*/');

                return $resultPage;
            }
        }

        // set entered data if was error when we do save
        $data = $this->_getSession()->getPageData(true);
        if (!empty($data)) {
            $model->addData($data);
        }

        $this->getRegistry()->register(self::CURRENT_CANDELA_BLOG_POST, $model);
        $this->getRegistry()->register(AbstractModifier::CURRENT_STORE_ID, $storeId);
        $resultPage = $this->getPageFactory()->create();
        $resultPage->addBreadcrumb(__('Candela Blog Posts'), __('Candela Blog Posts'));
        $resultPage->setActiveMenu('Candela_Blog::posts');
        $resultPage
            ->getConfig()
            ->getTitle()
            ->prepend($model->getId() ? __('Edit Post `%1`', $model->getTitle()) : __('Add New Post'));

        return $resultPage;
    }
}
