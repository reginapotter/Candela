<?php

declare(strict_types=1);



namespace Candela\Blog\Model\Source;

use Magento\Framework\Data\OptionSourceInterface;

class OpenGraphTypes implements OptionSourceInterface
{
    const TYPE_DISABLED = 0;

    const TYPE_ARTICLE = 'article';

    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => self::TYPE_DISABLED, 'label' => __('Please Select Type')],
            ['value' => self::TYPE_ARTICLE, 'label' => __('Article')]
        ];
    }
}
