<?php


namespace Candela\Blog\Block\Adminhtml\Comments\Edit;

use Candela\Blog\Controller\Adminhtml\Comments\Edit;

class DeleteButton extends \Candela\Blog\Block\Adminhtml\DeleteButton
{
    /**
     * @return int
     */
    public function getItemId()
    {
        return (int)$this->getRegistry()->registry(Edit::CURRENT_CANDELA_BLOG_COMMENT)->getCommentId();
    }
}
