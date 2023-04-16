<?php

declare(strict_types=1);



namespace Candela\Blog\Block\Link;

use Magento\Framework\View\Element\Html\Link\Current;

class BlogPostsLink extends Current implements \Magento\Customer\Block\Account\SortLinkInterface
{

    /**
     * @return string
     */
    protected function _toHtml()
    {
        return $this->isAllowed() ? parent::_toHtml() : '';
    }

    /**
     * {@inheritdoc}
     */
    public function getSortOrder()
    {
        return $this->getData(self::SORT_ORDER);
    }

    /**
     * @return bool
     */
    protected function isAllowed()
    {
        return true;
    }
}
