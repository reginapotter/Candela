<?php


namespace Candela\Blog\Block\Sidebar;

use Candela\Blog\Helper\Data;
use Candela\Blog\Helper\Date;
use Candela\Blog\Helper\Settings;
use Candela\Blog\Model\ConfigProvider;
use Candela\Blog\Model\UrlResolver;
use Magento\Framework\View\Element\Template\Context;

class Search extends AbstractClass
{
    /**
     * @var UrlResolver
     */
    private $urlResolver;

    /**
     * @var ConfigProvider
     */
    private $configProvider;

    public function __construct(
        Context $context,
        Settings $settingsHelper,
        Date $dateHelper,
        Data $dataHelper,
        UrlResolver $urlResolver,
        ConfigProvider $configProvider,
        array $data = []
    ) {
        parent::__construct($context, $settingsHelper, $dateHelper, $dataHelper, $configProvider, $data);
        $this->urlResolver = $urlResolver;
        $this->configProvider = $configProvider;
    }

    protected function _construct()
    {
        parent::_construct();
        $this->setRoute('display_search');
    }

    /**
     * @return \Magento\Framework\Phrase
     */
    public function getBlockHeader()
    {
        return __('Search the blog');
    }

    /**
     * @return string
     */
    public function getSearchUrl()
    {
        return $this->urlResolver->getSearchPageUrl();
    }

    /**
     * @return string
     */
    public function getQuery()
    {
        return $this->stripTags($this->getRequest()->getParam('query', ''));
    }

    /**
     * @return string
     */
    public function getAmpSearchUrl()
    {
        return str_replace(['https:', 'http:'], '', $this->getSearchUrl());
    }

    public function getMinCharactersLength(): int
    {
        return $this->configProvider->getMinCharacterLength();
    }

    public function getLiveSearchUrl(): string
    {
        return $this->_urlBuilder->getUrl('amblog/ajax/liveSearch');
    }
}
