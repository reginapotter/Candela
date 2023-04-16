<?php


namespace Candela\Blog\Controller\Adminhtml;

/**
 * Class Comments
 */
abstract class Import extends \Magento\Backend\App\Action
{
    /**
     * Determine if authorized to perform group actions.
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Candela_Blog::import');
    }
}
