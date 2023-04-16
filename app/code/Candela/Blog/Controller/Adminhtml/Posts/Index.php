<?php


namespace Candela\Blog\Controller\Adminhtml\Posts;

/**
 * Class Index
 */
class Index extends \Candela\Blog\Controller\Adminhtml\Posts
{
    /**
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->getPageFactory()->create();
        $resultPage->setActiveMenu('Candela_Blog::posts');
        $resultPage->getConfig()->getTitle()->prepend(__('Posts'));
        $resultPage->addBreadcrumb(__('Posts'), __('Posts'));

        return $resultPage;
    }
}
