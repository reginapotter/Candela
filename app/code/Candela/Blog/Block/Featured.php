<?php

declare(strict_types=1);



namespace Candela\Blog\Block;

use Candela\Blog\Api\PostRepositoryInterface;
use Candela\Blog\Block\Sidebar\AbstractClass;
use Candela\Blog\Helper\Data;
use Candela\Blog\Helper\Date;
use Candela\Blog\Helper\Settings;
use Candela\Blog\Model\ConfigProvider;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Magento\Framework\View\Element\Template\Context;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Widget\Block\BlockInterface;

class Featured extends AbstractClass implements BlockInterface
{
    /**
     * @var AbstractCollection
     */
    private $collection;

    /**
     * @var PostRepositoryInterface
     */
    private $postRepository;

    /**
     * @var StoreManagerInterface
     */
    private $storeManager;

    /**
     * @var string
     */
    protected $_template = 'Candela_Blog::featured.phtml';

    public function __construct(
        Context $context,
        Settings $settingsHelper,
        Date $dateHelper,
        Data $dataHelper,
        ConfigProvider $configProvider,
        PostRepositoryInterface $postRepository,
        array $data = []
    ) {
        $this->postRepository = $postRepository;
        $this->storeManager = $context->getStoreManager();
        parent::__construct($context, $settingsHelper, $dateHelper, $dataHelper, $configProvider, $data);
    }

    /**
     * @return string
     */
    public function toHtml()
    {
        return strpos($this->getRequest()->getPathInfo(), '/amp/') === false ? parent::toHtml() : '';
    }

    /**
     * @return AbstractCollection
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getCollection()
    {
        if (!$this->collection) {
            $collection = $this->postRepository->getFeaturedPosts((int)$this->storeManager->getStore()->getId());
            if ($this->hasData('posts_limit')) {
                $collection->setLimit((int)$this->getData('posts_limit'));
            }

            $this->collection = $collection;
        }

        return $this->collection;
    }

    public function getHeaderText(): string
    {
        return (string)$this->getData('header_text');
    }

    public function isShowShortContent(): bool
    {
        return (bool)$this->getData('display_short');
    }

    public function isShowDate(): bool
    {
        return (bool)$this->getData('display_date');
    }

    protected function getShortContentLimit(): int
    {
        return $this->getData('short_limit') ? (int)$this->getData('short_limit') : 10000;
    }

    public function isHumanized(): bool
    {
        return $this->getData('date_manner') === Date::DATE_TIME_PASSED;
    }
}
