<?php


namespace Candela\Blog\Controller\Adminhtml\Authors;

/**
 * Class
 */
class NewAction extends \Candela\Blog\Controller\Adminhtml\Posts
{
    public function execute()
    {
        $this->_forward('edit');
    }
}
