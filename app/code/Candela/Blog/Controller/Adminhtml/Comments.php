<?php


namespace Candela\Blog\Controller\Adminhtml;

use Magento\Framework\App\Request\DataPersistorInterface;

abstract class Comments extends \Magento\Backend\App\Action
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    private $resultPageFactory;

    /**
     * @var \Candela\Blog\Api\CommentRepositoryInterface
     */
    private $commentRepository;

    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;

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
        \Candela\Blog\Api\CommentRepositoryInterface $commentRepository,
        \Psr\Log\LoggerInterface $logger,
        DataPersistorInterface $dataPersistor,
        \Candela\Blog\Model\BlogRegistry $blogRegistry
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
        $this->commentRepository = $commentRepository;
        $this->logger = $logger;
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
        return $this->_authorization->isAllowed('Candela_Blog::comments');
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
     * @return \Candela\Blog\Api\CommentRepositoryInterface
     */
    public function getCommentRepository()
    {
        return $this->commentRepository;
    }

    /**
     * @return \Magento\Framework\View\Result\PageFactory
     */
    public function getPageFactory()
    {
        return $this->resultPageFactory;
    }
}
