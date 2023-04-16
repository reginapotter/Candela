<?php


namespace Candela\Blog\Controller\Adminhtml\Categories;

/**
 * Class Index
 */
class Index extends \Candela\Blog\Controller\Adminhtml\Categories
{
    /**
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->getPageFactory()->create();
        $resultPage->setActiveMenu('Candela_Blog::categories');
        $resultPage->getConfig()->getTitle()->prepend(__('Categories'));
        $resultPage->addBreadcrumb(__('Categories'), __('Categories'));

        return $resultPage;
    }
}
