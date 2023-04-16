<?php
/**
 *
 */
namespace Candela\WordPressBlogPosts\Model;

use Magento\Framework\Api\DataObjectHelper;
use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Model\Context;
use Magento\Framework\Registry;
use Candela\WordPressBlogPosts\Api\Data\BlogPostsInterface;
use Candela\WordPressBlogPosts\Api\Data\BlogPostsInterfaceFactory;
use Candela\WordPressBlogPosts\Model\ResourceModel\BlogPosts\Collection;

class BlogPosts extends AbstractModel
{
    protected $blogpostsDataFactory;

    protected $dataObjectHelper;

    protected $_eventPrefix = BlogPostsInterface::Candela_BLOGPOSTS_BLOGPOSTS_TABLE;

    /**
     * @param Context $context
     * @param Registry $registry
     * @param BlogPostsInterfaceFactory $blogpostsDataFactory
     * @param DataObjectHelper $dataObjectHelper
     * @param ResourceModel\BlogPosts $resource
     * @param Collection $resourceCollection
     * @param array $data
     */
    public function __construct(
        Context $context,
        Registry $registry,
        BlogPostsInterfaceFactory $blogpostsDataFactory,
        DataObjectHelper $dataObjectHelper,
        ResourceModel\BlogPosts $resource,
        Collection $resourceCollection,
        array $data = []
    ) {
        $this->blogpostsDataFactory = $blogpostsDataFactory;
        $this->dataObjectHelper = $dataObjectHelper;
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    /**
     * Retrieve blogposts model with blogposts data
     * @return BlogPostsInterface
     */
    public function getDataModel()
    {
        $blogpostsData = $this->getData();

        $blogpostsDataObject = $this->blogpostsDataFactory->create();
        $this->dataObjectHelper->populateWithArray(
            $blogpostsDataObject,
            $blogpostsData,
            BlogPostsInterface::class
        );

        return $blogpostsDataObject;
    }
}
