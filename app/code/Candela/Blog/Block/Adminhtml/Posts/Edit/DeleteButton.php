<?php


namespace Candela\Blog\Block\Adminhtml\Posts\Edit;

use Candela\Blog\Controller\Adminhtml\Posts\Edit;

class DeleteButton extends \Candela\Blog\Block\Adminhtml\DeleteButton
{
    /**
     * @return int
     */
    public function getItemId()
    {
        return (int)$this->getRegistry()->registry(Edit::CURRENT_CANDELA_BLOG_POST)->getPostId();
    }
}
