<?php


namespace Candela\Blog\Controller\Adminhtml\Authors;

/**
 * Class
 */
class Index extends \Candela\Blog\Controller\Adminhtml\Authors
{
    /**
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->getPageFactory()->create();
        $resultPage->setActiveMenu('Candela_Blog::authors');
        $resultPage->getConfig()->getTitle()->prepend(__('Authors'));
        $resultPage->addBreadcrumb(__('Authors'), __('Authors'));

        return $resultPage;
    }
}
