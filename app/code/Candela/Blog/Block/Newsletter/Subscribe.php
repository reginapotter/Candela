<?php

declare(strict_types=1);



namespace Candela\Blog\Block\Newsletter;

use Magento\Framework\View\Element\BlockInterface;
use Magento\Framework\View\Element\Template;

class Subscribe extends Template implements BlockInterface
{
    /**
     * @var string
     */
    protected $_template = 'Candela_Blog::newsletter/subscribe.phtml';

    public function getFormActionUrl(): string
    {
        return $this->getUrl('newsletter/subscriber/new', ['_secure' => true]);
    }
}
