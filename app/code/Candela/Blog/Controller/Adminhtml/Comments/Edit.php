<?php


namespace Candela\Blog\Controller\Adminhtml\Comments;

class Edit extends \Candela\Blog\Controller\Adminhtml\Comments
{
    const CURRENT_CANDELA_BLOG_COMMENT = 'current_candela_blog_comment';
    const AMBLOG_COMMENT_REPLY_TO = 'amblog_comment_reply_to';

    protected $_publicActions = ['edit'];

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|void
     */
    public function execute()
    {
        $id = (int)$this->getRequest()->getParam('id');
        $replyTo = (int)$this->getRequest()->getParam('reply_to_id');
        $model = $this->getCommentRepository()->getComment();

        if ($id) {
            try {
                $model = $this->getCommentRepository()->getById($id);
            } catch (\Exception $e) {
                $this->getMessageManager()->addErrorMessage($e->getMessage());
                $this->_redirect('*/*');

                return;
            }
        }

        if ($replyTo) {
            $model->setData('reply_to', $replyTo);
            $this->getRegistry()->register(self::AMBLOG_COMMENT_REPLY_TO, $replyTo);
        }

        // set entered data if was error when we do save
        $data = $this->_getSession()->getPageData(true);
        if (!empty($data)) {
            $model->addData($data);
        }

        $this->getRegistry()->register(self::CURRENT_CANDELA_BLOG_COMMENT, $model);
        $this->initAction();

        $title = '';
        if ($model->getCommentId()) {
            $title = __('Edit Comment `%1`', $model->getCommentId());
        } elseif ($replyTo) {
            $title = __("Reply to Comment `%1`", $replyTo);
        }

        if ($title) {
            $this->_view->getPage()->getConfig()->getTitle()->prepend($title);
        }

        $this->_view->renderLayout();
    }

    /**
     * @return $this
     */
    private function initAction()
    {
        $this->_view->loadLayout();
        $this->_setActiveMenu('Candela_Blog::comments')->_addBreadcrumb(
            __('Candela Blog Comments'),
            __('Candela Blog Comments')
        );

        return $this;
    }
}
