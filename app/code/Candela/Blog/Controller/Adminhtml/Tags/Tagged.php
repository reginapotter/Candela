<?php


namespace Candela\Blog\Controller\Adminhtml\Tags;

use Magento\Backend\App\Action;

/**
 * Class
 */
class Tagged extends Action
{
    /**
     * @var \Magento\Framework\View\Result\LayoutFactory
     */
    private $resultLayoutFactory;

    /**
     * Core registry
     *
     * @var \Magento\Framework\Registry
     */
    private $coreRegistry;

    /**
     * @var \Candela\Blog\Api\PostRepositoryInterface
     */
    private $postRepository;

    public function __construct(
        Action\Context $context,
        \Magento\Framework\View\Result\LayoutFactory $resultLayoutFactory,
        \Magento\Framework\Registry $registry,
        \Candela\Blog\Api\PostRepositoryInterface $postRepository
    ) {
        parent::__construct($context);

        $this->resultLayoutFactory = $resultLayoutFactory;
        $this->coreRegistry = $registry;
        $this->postRepository = $postRepository;
    }

    public function execute()
    {
        $tagId = (int)$this->_request->getParam('id');
        if ($tagId) {
            $postsCollection = $this->postRepository->getTaggedPosts($tagId);
            $this->coreRegistry->register('candela_blog_current_posts', $postsCollection);
        }

        return $this->resultLayoutFactory->create();
    }

    /**
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Candela_Blog::tags');
    }
}
