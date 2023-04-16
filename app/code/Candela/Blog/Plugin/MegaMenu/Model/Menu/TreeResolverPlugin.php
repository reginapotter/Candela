<?php


namespace Candela\Blog\Plugin\MegaMenu\Model\Menu;

use Candela\Blog\Block\Link;
use Candela\Blog\Model\UrlResolver;

class TreeResolverPlugin
{
    /**
     * @var \Candela\Blog\Helper\Settings
     */
    private $settings;

    /**
     * @var \Magento\Framework\UrlInterface
     */
    private $url;

    /**
     * @var Link
     */
    private $link;

    /**
     * @var UrlResolver
     */
    private $urlResolver;

    public function __construct(
        \Candela\Blog\Helper\Settings $settings,
        \Magento\Framework\UrlInterface $url,
        Link $link,
        UrlResolver $urlResolver
    ) {
        $this->settings = $settings;
        $this->url = $url;
        $this->link = $link;
        $this->urlResolver = $urlResolver;
    }

    /**
     * @phpstan-ignore-next-line
     *
     * @param \Candela\MegaMenuLite\Model\Menu\TreeResolver $subject
     * @param $items
     * @return string
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function afterGetAdditionalLinks(
        \Candela\MegaMenuLite\Model\Menu\TreeResolver $subject,
        $items
    ) {
        if (!$this->settings->showInNavMenu()) {
            return $items;
        }

        $url = $this->urlResolver->getBlogUrl();
        $items[] = [
            'name' => $this->link->getLabel(),
            'id' => 'candela_blog',
            'url' => $url,
            'has_active' => false,
            'content' => '',
            'width' => 1,
            'is_active' => $url == $this->url->getCurrentUrl()
        ];

        return $items;
    }
}
