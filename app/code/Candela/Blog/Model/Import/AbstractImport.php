<?php


namespace Candela\Blog\Model\Import;

use Candela\Blog\Api\AuthorRepositoryInterface;
use Candela\Blog\Api\CategoryRepositoryInterface;
use Candela\Blog\Api\CommentRepositoryInterface;
use Candela\Blog\Api\PostRepositoryInterface;
use Candela\Blog\Api\TagRepositoryInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Serialize\Serializer\Serialize;
use Magento\Framework\Stdlib\DateTime\DateTime;
use Magento\Store\Model\StoreManagerInterface;

class AbstractImport extends \Magento\Framework\Model\AbstractModel
{
    /**
     * @var PostRepositoryInterface
     */
    protected $postRepository;

    /**
     * @var TagRepositoryInterface
     */
    protected $tagRepository;

    /**
     * @var CategoryRepositoryInterface
     */
    protected $categoryRepository;

    /**
     * @var AuthorRepositoryInterface
     */
    protected $authorRepository;

    /**
     * @var CommentRepositoryInterface
     */
    protected $commentRepository;

    /**
     * @var \Magento\Catalog\Model\Product\Media\Config
     */
    protected $mediaConfig;

    /**
     * @var \Candela\Blog\Helper\Url
     */
    protected $urlHelper;

    /**
     * @var DateTime
     */
    protected $dateTime;

    /**
     * @var Serialize
     */
    protected $serializer;

    /**
     * @var StoreManagerInterface
     */
    protected $storeManager;

    /**
     * @var ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * @var \Psr\Log\LoggerInterface
     */
    protected $logger;

    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        PostRepositoryInterface $postRepository,
        TagRepositoryInterface $tagRepository,
        CategoryRepositoryInterface $categoryRepository,
        AuthorRepositoryInterface $authorRepository,
        CommentRepositoryInterface $commentRepository,
        \Magento\Catalog\Model\Product\Media\Config $mediaConfig,
        \Candela\Blog\Helper\Url $urlHelper,
        DateTime $dateTime,
        Serialize $serializer,
        StoreManagerInterface $storeManager,
        ScopeConfigInterface $scopeConfig,
        \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null,
        \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null,
        array $data = []
    ) {
        $this->postRepository = $postRepository;
        $this->tagRepository = $tagRepository;
        $this->categoryRepository = $categoryRepository;
        $this->authorRepository = $authorRepository;
        $this->commentRepository = $commentRepository;
        $this->mediaConfig = $mediaConfig;
        $this->urlHelper = $urlHelper;
        $this->dateTime = $dateTime;
        $this->serializer = $serializer;
        $this->storeManager = $storeManager;
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
        $this->scopeConfig = $scopeConfig;
        $this->logger = $context->getLogger();
    }
}
