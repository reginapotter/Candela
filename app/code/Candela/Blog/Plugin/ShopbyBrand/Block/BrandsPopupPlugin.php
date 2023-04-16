<?php


namespace Candela\Blog\Plugin\ShopbyBrand\Block;

use Candela\Blog\Helper\Data;

class BrandsPopupPlugin
{
    /**
     * @var Data
     */
    private $helper;

    public function __construct(
        Data $helper
    ) {
        $this->helper = $helper;
    }

    /**
     * @phpstan-ignore-next-line
     *
     * @param \Candela\ShopbyBrand\Block\BrandsPopup $subject
     */
    public function beforeToHtml(\Candela\ShopbyBrand\Block\BrandsPopup $subject)
    {
        if ($this->helper->isCurrentPageAmp()) {
            $subject->setTemplate('Candela_Blog::amp/brands_popup.phtml');
        }
    }
}
