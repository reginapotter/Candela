<?php

declare(strict_types=1);



namespace Candela\Blog\Block\Content;

use Candela\Blog\Api\AuthorRepositoryInterface;
use Candela\Blog\Api\CategoryRepositoryInterface;
use Candela\Blog\Api\PostRepositoryInterface;
use Candela\Blog\Api\TagRepositoryInterface;
use Candela\Blog\Block\Content\Search\Section;
use Candela\Blog\Helper\Data;
use Candela\Blog\Helper\Date;
use Candela\Blog\Helper\Settings;
use Candela\Blog\Helper\Url;
use Candela\Blog\Model\Blog\Registry;
use Candela\Blog\Model\ConfigProvider;
use Candela\Blog\Model\ListsFactory;
use Candela\Blog\Model\ResourceModel\Author\CollectionFactory as AuthorCollectionFactory;
use Candela\Blog\Model\ResourceModel\Categories\CollectionFactory as CategoryCollectionFactory;
use Candela\Blog\Model\ResourceModel\Posts\CollectionFactory as PostCollectionFactory;
use Candela\Blog\Model\ResourceModel\Tag\CollectionFactory as TagCollectionFactory;
use Candela\Blog\Model\Source\PostStatus;
use Candela\Blog\Model\UrlResolver;
use Candela\Blog\ViewModel\Author\SmallImage;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Magento\Framework\View\Element\Template\Context;

class Search extends Lists
{
    public const SPECIAL_CHARACTERS = '+~/<>\':*$#@()!,.?`=%&^“';

    /**
     * @var string[]
     */
    private $collectionMapping = [
        'categories' => 'addCategoryFilter',
        'tags' => 'addTagFilter',
    ];

    /**
     * @var array
     */
    private $collectionFactories;

    /**
     * @var PostCollectionFactory
     */
    private $postCollectionFactory;

    public function __construct(
        Context $context,
        Data $dataHelper,
        Settings $settingsHelper,
        Url $urlHelper,
        TagRepositoryInterface $tagRepository,
        AuthorRepositoryInterface $authorRepository,
        CategoryRepositoryInterface $categoryRepository,
        PostRepositoryInterface $postRepository,
        ListsFactory $listsModel,
        Date $helperDate,
        UrlResolver $urlResolver,
        Registry $registry,
        ConfigProvider $configProvider,
        SmallImage $smallImage,
        PostCollectionFactory $postCollectionFactory,
        array $collectionFactories,
        array $data = []
    ) {
        parent::__construct(
            $context,
            $dataHelper,
            $settingsHelper,
            $urlHelper,
            $tagRepository,
            $authorRepository,
            $categoryRepository,
            $postRepository,
            $listsModel,
            $helperDate,
            $urlResolver,
            $registry,
            $configProvider,
            $smallImage,
            $data
        );

        $this->collectionFactories = $collectionFactories;
        $this->postCollectionFactory = $postCollectionFactory;
    }

    /**
     * @throws LocalizedException
     */
    protected function prepareBreadcrumbs(): void
    {
        parent::prepareBreadcrumbs();

        $breadcrumbs = $this->getLayout()->getBlock('breadcrumbs');
        if ($breadcrumbs) {
            $title = __("Search results for '%1'", $this->getQueryText());
            $breadcrumbs->addCrumb(
                'search',
                [
                    'label' => $title,
                    'title' => $title,
                ]
            );
        }
    }

    public function getSearchSectionBlock(AbstractCollection $collection, string $name): Section
    {
        return $this
            ->getLayout()
            ->createBlock(Section::class)
            ->setTemplate(sprintf('Candela_Blog::search/list/%s.phtml', $name))
            ->setData([
                'collection' => $collection,
                'entityName' => $name,
                'parentBlock' => $this
            ]);
    }

    public function getCollections(): array
    {
        $collections = [];
        /** @var PostCollectionFactory|CategoryCollectionFactory|TagCollectionFactory|AuthorCollectionFactory $collectionFactory */
        foreach ($this->collectionFactories as $key => $collectionFactory) {
            $collection = $collectionFactory->create();
            if (!$this->getQueryText()) {
                $collection->getSelect()->where('0 = 1');
            } else {
                $collection->setQueryText($this->getQueryText());
                $storeId = (int)$this->_storeManager->getStore()->getId();
                if (isset($this->collectionMapping[$key])) {
                    $collection->addStoreWithDefault($storeId);
                    $collection->load();
                    $postCollection = $this->postCollectionFactory->create();
                    $entityFilterMethod = $this->collectionMapping[$key];
                    if (method_exists($postCollection, $entityFilterMethod)) {
                        $postCollection->$entityFilterMethod($collection->getAllIds());
                    }

                    $collection = $postCollection;
                }

                if (method_exists($collection, 'addFilterByStatus')) {
                    $collection->addFilterByStatus([PostStatus::STATUS_ENABLED]);
                }
                $collection->addStoreWithDefault($storeId);
            }

            $collections[$key] = $collection;
        }

        return $collections;
    }

    /**
     * @return string
     */
    private function getQueryText()
    {
        $replaceSymbols = str_split(self::SPECIAL_CHARACTERS);
        $query = $this->getRequest()->getParam('query', '');

        return str_replace($replaceSymbols, '', trim($query));
    }
}
