<?php

declare(strict_types=1);



namespace Candela\Blog\Plugin\Framework\View\Element\Html\Select;

use Magento\Framework\View\Element\Html\Select;

class AddBlogSectionToWidgetRenderPlaces
{
    const WIDGET_WHERE_DISPLAY_SELECT = 'widget_instance[<%- data.id %>][page_group]';
    const BLOG_LISTINGS = 'candela_blog_listings';
    const BLOG_POST = 'candela_blog_post';

    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     *
     * @param Select $select
     * @param array $options
     * @return array
     *
     * @see \Magento\Framework\View\Element\Html\Select::setOptions
     */
    public function beforeSetOptions(Select $select, $options): array
    {
        if ($select->getId() === self::WIDGET_WHERE_DISPLAY_SELECT) {
            $options[] = [
                'label' => __('Candela Blog'),
                'value' => [
                    ['value' => self::BLOG_LISTINGS, 'label' => __('Posts Listing Page')],
                    ['value' => self::BLOG_POST, 'label' => __('Post Page')],
                ],
            ];
        }

        return [$options];
    }
}
