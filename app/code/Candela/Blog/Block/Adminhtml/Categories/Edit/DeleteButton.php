<?php


namespace Candela\Blog\Block\Adminhtml\Categories\Edit;

use Candela\Blog\Controller\Adminhtml\Categories\Edit;
use Candela\Blog\Model\Categories;

class DeleteButton extends \Candela\Blog\Block\Adminhtml\DeleteButton
{
    /**
     * @return int
     */
    public function getItemId()
    {
        return (int)$this->getCurrentCategory()->getCategoryId();
    }

    /**
     * @return \Magento\Framework\Phrase
     */
    public function getConfirmText()
    {
        if ($this->getCurrentCategory()->hasChildren()) {
            return __('This category has children categories. Are you sure you want to delete this?');
        }

        return parent::getConfirmText();
    }

    /**
     * @return Categories
     */
    public function getCurrentCategory()
    {
        return $this->getRegistry()->registry(Edit::CURRENT_CANDELA_BLOG_CATEGORY);
    }
}
