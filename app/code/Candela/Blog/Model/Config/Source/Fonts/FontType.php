<?php

declare(strict_types=1);



namespace Candela\Blog\Model\Config\Source\Fonts;

class FontType
{
    public const DEFAULT = 'default';
    public const GOOGLE = 'google';

    /**
     * @return array
     */
    public function toOptionArray(): array
    {
        $options = [
            ['value' => self::DEFAULT, 'label' => __('Default')],
            ['value' => self::GOOGLE, 'label' => __('Google')],
        ];

        return $options;
    }
}
