<?php

declare(strict_types=1);



namespace Candela\Blog\ViewModel\Posts\Head;

use Candela\Blog\Model\Config\Source\Fonts\FontType;
use Candela\Blog\Model\ConfigProvider;
use Candela\Blog\Model\FontManager;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class Font implements ArgumentInterface
{
    /**
     * @var ConfigProvider
     */
    private $configProvider;

    /**
     * @var FontManager
     */
    private $fontManager;

    public function __construct(ConfigProvider $configProvider, FontManager $fontManager)
    {
        $this->configProvider = $configProvider;
        $this->fontManager = $fontManager;
    }

    /**
     * @return bool
     */
    public function hasGoogleFont(): bool
    {
        return $this->configProvider->getFontType() === FontType::GOOGLE;
    }

    /**
     * @return string|null
     */
    public function getGoogleFont(): ?string
    {
        $value = strtok(trim($this->configProvider->getGoogleFontSetting()), ':');

        return $value;
    }

    /**
     * @return string|null
     */
    public function getGoogleFontStyle(): ?string
    {
        return $this->configProvider->getGoogleFontStyle();
    }

    /**
     * @return string|null
     */
    public function getGoogleFontUrl(): ?string
    {
        $googleFontSetting = $this->configProvider->getGoogleFontSetting();

        return $this->fontManager->getFontUrl($googleFontSetting);
    }
}
