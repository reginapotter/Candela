<?php


namespace Candela\Blog\Block\Adminhtml\System\Config\Field\Layout;

class Mobile extends \Candela\Blog\Block\Adminhtml\System\Config\Field\Layout
{
    protected function getLayouts(): array
    {
        return $this->layoutOptions->getMobileOptions();
    }
}
