<?php

declare(strict_types=1);



namespace Candela\Blog\Plugin\Widget\Model\Widget\Instance;

use Candela\Blog\Observer\ApplyBlogLayout;
use Candela\Blog\Plugin\Framework\View\Element\Html\Select\AddBlogSectionToWidgetRenderPlaces;
use Magento\Widget\Model\Widget\Instance as WidgetInstance;

class AddBlogLayoutHandles
{
    public function beforeBeforeSave(WidgetInstance $widgetInstance): void
    {
        $variableAccessor = function (): void {
            if (!empty($this->_layoutHandles)) {
                $this->_layoutHandles = array_merge(
                    $this->_layoutHandles,
                    [
                        AddBlogSectionToWidgetRenderPlaces::BLOG_LISTINGS => ApplyBlogLayout::LISTING_UPDATE,
                        AddBlogSectionToWidgetRenderPlaces::BLOG_POST => ApplyBlogLayout::POST_UPDATE
                    ]
                );
            }
        };
        $variableAccessor = \Closure::bind($variableAccessor, $widgetInstance, $widgetInstance);
        $variableAccessor();
    }
}
