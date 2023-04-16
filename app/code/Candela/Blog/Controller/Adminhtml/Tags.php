<?php


namespace Candela\Blog\Controller\Adminhtml;

use Magento\Framework\App\Request\DataPersistorInterface;

abstract class Tags extends \Magento\Backend\App\Action
{
    /**
     * @var \Candela\Blog\Api\TagRepositoryInterface
     */
    private $tagRepository;

    /**
     * @var DataPersistorInterface
     */
    private $dataPersistor;

    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;

    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    private $resultPageFactory;

    /**
     * @var \Candela\Blog\Model\BlogRegistry
     */
    private $blogRegistry;

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Candela\Blog\Api\TagRepositoryInterface $tagRepository,
        DataPersistorInterface $dataPersistor,
        \Psr\Log\LoggerInterface $logger,
        \Candela\Blog\Model\BlogRegistry $blogRegistry
    ) {
        parent::__construct($context);
        $this->tagRepository = $tagRepository;
        $this->dataPersistor = $dataPersistor;
        $this->logger = $logger;
        $this->resultPageFactory = $resultPageFactory;
        $this->blogRegistry = $blogRegistry;
    }

    /**
     * Determine if authorized to perform group actions.
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Candela_Blog::tags');
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
     * @return \Candela\Blog\Api\TagRepositoryInterface
     */
    public function getTagRepository()
    {
        return $this->tagRepository;
    }

    /**
     * @return \Magento\Framework\View\Result\PageFactory
     */
    public function getPageFactory()
    {
        return $this->resultPageFactory;
    }
}
