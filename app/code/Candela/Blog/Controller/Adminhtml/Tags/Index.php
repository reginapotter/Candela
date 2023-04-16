<?php


namespace Candela\Blog\Controller\Adminhtml\Tags;

/**
 * Class Index
 */
class Index extends \Candela\Blog\Controller\Adminhtml\Tags
{
    /**
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->getPageFactory()->create();
        $resultPage->setActiveMenu('Candela_Blog::tags');
        $resultPage->getConfig()->getTitle()->prepend(__('Tags'));
        $resultPage->addBreadcrumb(__('Tags'), __('Tags'));

        return $resultPage;
    }
}
