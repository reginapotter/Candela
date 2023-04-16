<?php


namespace Candela\Blog\Controller\Adminhtml\Categories;

use Magento\Framework\App\ResponseInterface;

/**
 * Class
 */
class NewAction extends \Candela\Blog\Controller\Adminhtml\Categories
{
    /**
     * Dispatch request
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        $this->_forward('edit');
    }
}
