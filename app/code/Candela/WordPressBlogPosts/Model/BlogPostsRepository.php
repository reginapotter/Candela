<?php
/**
 *
 */
namespace Candela\WordPressBlogPosts\Model;

use Magento\Framework\Api\DataObjectHelper;
use Magento\Framework\Api\ExtensibleDataObjectConverter;
use Magento\Framework\Api\ExtensionAttribute\JoinProcessorInterface;
use Magento\Framework\Api\FilterBuilder;
use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Api\SearchCriteriaBuilder;
use Magento\Framework\Api\SortOrderBuilder;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Reflection\DataObjectProcessor;
use Magento\Store\Model\StoreManagerInterface;
use Candela\WordPressBlogPosts\Api\BlogPostsRepositoryInterface;
use Candela\WordPressBlogPosts\Api\Data\BlogPostsInterface;
use Candela\WordPressBlogPosts\Api\Data\BlogPostsInterfaceFactory;
use Candela\WordPressBlogPosts\Api\Data\BlogPostsSearchResultsInterfaceFactory;
use Candela\WordPressBlogPosts\Model\ResourceModel\BlogPosts as ResourceBlogPosts;
use Candela\WordPressBlogPosts\Model\ResourceModel\BlogPosts\CollectionFactory as BlogPostsCollectionFactory;

class BlogPostsRepository implements BlogPostsRepositoryInterface
{
    protected $resource;

    protected $blogPostsFactory;

    protected $blogPostsCollectionFactory;

    protected $searchResultsFactory;

    protected $dataObjectHelper;

    protected $dataObjectProcessor;

    protected $dataBlogPostsFactory;

    protected $extensionAttributesJoinProcessor;

    private $storeManager;

    private $collectionProcessor;

    protected $extensibleDataObjectConverter;
    /**
     * @var FilterBuilder
     */
    protected $filterBuilder;
    /**
     * @var SortOrderBuilder
     */
    protected $sortOrderBuilder;
    /**
     * @var SearchCriteriaBuilder
     */
    protected $searchCriteriaBuilder;

    /**
     * @param ResourceBlogPosts $resource
     * @param BlogPostsFactory $blogPostsFactory
     * @param BlogPostsInterfaceFactory $dataBlogPostsFactory
     * @param BlogPostsCollectionFactory $blogPostsCollectionFactory
     * @param BlogPostsSearchResultsInterfaceFactory $searchResultsFactory
     * @param DataObjectHelper $dataObjectHelper
     * @param DataObjectProcessor $dataObjectProcessor
     * @param StoreManagerInterface $storeManager
     * @param CollectionProcessorInterface $collectionProcessor
     * @param JoinProcessorInterface $extensionAttributesJoinProcessor
     * @param ExtensibleDataObjectConverter $extensibleDataObjectConverter
     * @param FilterBuilder $filterBuilder
     * @param SortOrderBuilder $sortOrderBuilder
     * @param SearchCriteriaBuilder $searchCriteriaBuilder
     */
    public function __construct(
        ResourceBlogPosts $resource,
        BlogPostsFactory $blogPostsFactory,
        BlogPostsInterfaceFactory $dataBlogPostsFactory,
        BlogPostsCollectionFactory $blogPostsCollectionFactory,
        BlogPostsSearchResultsInterfaceFactory $searchResultsFactory,
        DataObjectHelper $dataObjectHelper,
        DataObjectProcessor $dataObjectProcessor,
        StoreManagerInterface $storeManager,
        CollectionProcessorInterface $collectionProcessor,
        JoinProcessorInterface $extensionAttributesJoinProcessor,
        ExtensibleDataObjectConverter $extensibleDataObjectConverter,
        FilterBuilder $filterBuilder,
        SortOrderBuilder $sortOrderBuilder,
        SearchCriteriaBuilder $searchCriteriaBuilder
    ) {
        $this->resource = $resource;
        $this->blogPostsFactory = $blogPostsFactory;
        $this->blogPostsCollectionFactory = $blogPostsCollectionFactory;
        $this->searchResultsFactory = $searchResultsFactory;
        $this->dataObjectHelper = $dataObjectHelper;
        $this->dataBlogPostsFactory = $dataBlogPostsFactory;
        $this->dataObjectProcessor = $dataObjectProcessor;
        $this->storeManager = $storeManager;
        $this->collectionProcessor = $collectionProcessor;
        $this->extensionAttributesJoinProcessor = $extensionAttributesJoinProcessor;
        $this->extensibleDataObjectConverter = $extensibleDataObjectConverter;
        $this->filterBuilder = $filterBuilder;
        $this->sortOrderBuilder = $sortOrderBuilder;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
    }

    /**
     * {@inheritdoc}
     */
    public function save(
        BlogPostsInterface $blogPosts
    ) {
        $blogPostsData = $this->extensibleDataObjectConverter->toNestedArray(
            $blogPosts,
            [],
            BlogPostsInterface::class
        );

        $blogPostsModel = $this->blogPostsFactory->create()->setData($blogPostsData);

        try {
            $this->resource->save($blogPostsModel);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__(
                'Could not save the blogPosts: %1',
                $exception->getMessage()
            ));
        }
        return $blogPostsModel->getDataModel();
    }

    /**
     * {@inheritdoc}
     */
    public function initBlogPosts()
    {
        return $this->dataBlogPostsFactory->create();
    }

    /**
     * {@inheritdoc}
     */
    public function getById($blogPostsId)
    {
        $blogPosts = $this->blogPostsFactory->create();
        $this->resource->load($blogPosts, $blogPostsId);
        if (!$blogPosts->getId()) {
            throw new NoSuchEntityException(__('BlogPosts with id "%1" does not exist.', $blogPostsId));
        }
        return $blogPosts->getDataModel();
    }

    /**
     * {@inheritdoc}
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $criteria
    ) {
        $collection = $this->blogPostsCollectionFactory->create();

        $this->extensionAttributesJoinProcessor->process(
            $collection,
            BlogPostsInterface::class
        );

        $this->collectionProcessor->process($criteria, $collection);

        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setSearchCriteria($criteria);

        $items = [];
        foreach ($collection as $model) {
            $items[] = $model->getDataModel();
        }

        $searchResults->setItems($items);
        $searchResults->setTotalCount($collection->getSize());
        return $searchResults;
    }

    /**
     * {@inheritdoc}
     */
    public function delete(
        BlogPostsInterface $blogPosts
    ) {
        try {
            $blogPostsModel = $this->blogPostsFactory->create();
            $this->resource->load($blogPostsModel, $blogPosts->getBlogpostsId());
            $this->resource->delete($blogPostsModel);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__(
                'Could not delete the BlogPosts: %1',
                $exception->getMessage()
            ));
        }
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function deleteById($blogPostsId)
    {
        return $this->delete($this->getById($blogPostsId));
    }

    /**
     * {@inheritdoc}
     * @throws LocalizedException
     */
    public function getLastBlogPosts()
    {
        $sortOrder = $this->sortOrderBuilder
            ->setField(BlogPostsInterface::CREATED_AT)
            ->setDirection('DESC')
            ->create();
        $filter = $this->filterBuilder
            ->setField(BlogPostsInterface::IS_SUCCESS)
            ->setConditionType('eq')
            ->setValue(1)
            ->create();

        $searchCriteria = $this->searchCriteriaBuilder
            ->addFilters([$filter])
            ->setSortOrders([$sortOrder])
            ->create();

        $searchCriteria->setPageSize(1)
            ->setCurrentPage(1);

        $postList = $this->getList($searchCriteria);
        $searchResult = current($postList->getItems());

        if ($searchResult) {
            return $searchResult->getBlogPosts();
        }

        return false;
    }

    /**
     * {@inheritdoc}
     * @throws LocalizedException
     */
    public function getBlogPosts($isSuccess)
    {
        $itemIds = [];
        $sortOrder = $this->sortOrderBuilder
            ->setField(BlogPostsInterface::CREATED_AT)
            ->setDirection('ASC')
            ->create();
        $filter = $this->filterBuilder
            ->setField(BlogPostsInterface::IS_SUCCESS)
            ->setConditionType('eq')
            ->setValue($isSuccess)
            ->create();

        $searchCriteria = $this->searchCriteriaBuilder
            ->addFilters([$filter])
            ->setSortOrders([$sortOrder])
            ->create();

        $postList = $this->getList($searchCriteria);

        foreach ($postList->getItems() as $item) {
            $itemIds[] = $item->getBlogpostsId();
        }

        return $itemIds;
    }
}
