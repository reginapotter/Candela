<?php


namespace Candela\Blog\Controller\Adminhtml\Authors;

use Candela\Blog\Model\DataProvider\AbstractModifier;

class Edit extends \Candela\Blog\Controller\Adminhtml\Authors
{
    const CURRENT_CANDELA_BLOG_AUTHOR = 'current_candela_blog_author';

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|void
     */
    public function execute()
    {
        $id = (int)$this->getRequest()->getParam('id');
        $storeId = (int)$this->getRequest()->getParam('store');
        $model = $this->getAuthorRepository()->getAuthorModel();

        if ($id) {
            try {
                $model = $this->getAuthorRepository()->getById($id);
            } catch (\Exception $e) {
                $this->getMessageManager()->addErrorMessage($e->getMessage());
                $this->_redirect('*/*');

                return;
            }
        }

        // set entered data if was error when we do save
        $data = $this->_getSession()->getPageData(true);
        if (!empty($data)) {
            $model->addData($data);
        }

        $this->getRegistry()->register(self::CURRENT_CANDELA_BLOG_AUTHOR, $model);
        $this->getRegistry()->register(AbstractModifier::CURRENT_STORE_ID, $storeId);
        $this->initAction();
        if ($model->getId()) {
            $title = __('Edit Author `%1`', $model->getName());
        } else {
            $title = __("Add New Author");
        }
        $this->_view->getPage()->getConfig()->getTitle()->prepend($title);
        $this->_view->renderLayout();
    }

    /**
     * @return $this
     */
    private function initAction()
    {
        $this->_view->loadLayout();
        $this->_setActiveMenu('Candela_Blog::authors')->_addBreadcrumb(
            __('Candela Blog Authors'),
            __('Candela Blog Authors')
        );

        return $this;
    }
}
