<?php


namespace Candela\Blog\Controller\Adminhtml\Categories;

use Magento\Framework\App\ResponseInterface;
use Candela\Blog\Model\DataProvider\AbstractModifier;

class Edit extends \Candela\Blog\Controller\Adminhtml\Categories
{
    const CURRENT_CANDELA_BLOG_CATEGORY = 'current_candela_blog_category';

    /**
     * Dispatch request
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface|void
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        $id = $this->getRequest()->getParam('id');
        $storeId = $this->getRequest()->getParam('store');
        $model = $this->getCategoryRepository()->getCategory();

        if ($id) {
            try {
                $model = $this->getCategoryRepository()->getById($id);
            } catch (\Exception $e) {
                $this->getMessageManager()->addErrorMessage($e->getMessage());

                return $this->_redirect('*/*');
            }
        }

        $data = $this->_getSession()->getPageData(true);
        if (!empty($data)) {
            $model->addData($data);
        }

        $this->getRegistry()->register(self::CURRENT_CANDELA_BLOG_CATEGORY, $model);
        $this->getRegistry()->register(AbstractModifier::CURRENT_STORE_ID, $storeId);
        $this->initAction();
        if ($model->getId()) {
            $title = __('Edit Category `%1`', $model->getName());
        } else {
            $title = __('Add New Category');
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
        $this->_setActiveMenu('Candela_Blog::categories')->_addBreadcrumb(
            __('Candela Blog Categories'),
            __('Candela Blog Categories')
        );

        return $this;
    }
}
