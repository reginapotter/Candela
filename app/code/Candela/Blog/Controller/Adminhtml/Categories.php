<?php


namespace Candela\Blog\Controller\Adminhtml;

use Magento\Framework\App\Request\DataPersistorInterface;

abstract class Categories extends \Magento\Backend\App\Action
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    private $resultPageFactory;

    /**
     * @var \Candela\Blog\Api\CategoryRepositoryInterface
     */
    private $categoryRepository;

    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;

    /**
     * @var \Candela\Blog\Helper\Url
     */
    private $urlHelper;

    /**
     * @var DataPersistorInterface
     */
    private $dataPersistor;

    /**
     * @var \Candela\Blog\Model\BlogRegistry
     */
    private $blogRegistry;

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Candela\Blog\Api\CategoryRepositoryInterface $categoryRepository,
        \Psr\Log\LoggerInterface $logger,
        \Candela\Blog\Helper\Url $urlHelper,
        \Candela\Blog\Model\BlogRegistry $blogRegistry,
        DataPersistorInterface $dataPersistor
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
        $this->categoryRepository = $categoryRepository;
        $this->logger = $logger;
        $this->urlHelper = $urlHelper;
        $this->dataPersistor = $dataPersistor;
        $this->blogRegistry = $blogRegistry;
    }

    /**
     * Determine if authorized to perform group actions.
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Candela_Blog::categories');
    }

     /**
      * @return \Psr\Log\LoggerInterface
      */
    public function getLogger()
    {
        return $this->logger;
    }

    /**
     * @return DataPersistorInterface
     */
    public function getDataPersistor()
    {
        return $this->dataPersistor;
    }

    /**
     * @return \Candela\Blog\Model\BlogRegistry
     */
    public function getRegistry()
    {
        return $this->blogRegistry;
    }

    /**
     * @return \Candela\Blog\Helper\Url
     */
    public function getUrlHelper()
    {
        return $this->urlHelper;
    }

    /**
     * @return \Candela\Blog\Api\CategoryRepositoryInterface
     */
    public function getCategoryRepository()
    {
        return $this->categoryRepository;
    }

    /**
     * @return \Magento\Framework\View\Result\PageFactory
     */
    public function getPageFactory()
    {
        return $this->resultPageFactory;
    }
}
