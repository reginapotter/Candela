<?php


namespace Candela\Blog\Controller\Index;

use Amasty\Base\Model\Serializer;
use Candela\Blog\Api\CommentRepositoryInterface;
use Candela\Blog\Api\PostRepositoryInterface;
use Magento\Framework\App\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ObjectManager;

class Form extends Action\Action
{
    /**
     * @var PostRepositoryInterface
     */
    private $postRepository;

    /**
     * @var CommentRepositoryInterface
     */
    private $commentRepository;

    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct(
        Context $context,
        PostRepositoryInterface $postRepository,
        CommentRepositoryInterface $commentRepository,
        Serializer $serializer = null // TODO move to not optional
    ) {
        parent::__construct($context);

        $this->postRepository = $postRepository;
        $this->commentRepository = $commentRepository;
        $this->serializer = $serializer ?? ObjectManager::getInstance()->get(Serializer::class);
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|void
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function execute()
    {
        $result = [];

        $postId = (int)$this->getRequest()->getParam('post_id');
        $sessionId = $this->getRequest()->getParam('session_id');
        try {
            if ($postId) {
                $post = $this->postRepository->getById($postId);
                $replyTo = (int)$this->getRequest()->getParam('reply_to');

                if ($replyTo) {
                    $comment = $this->commentRepository->getById($replyTo);
                }
                /** @var \Candela\Blog\Block\Comments\Form $form */
                $form = $this->_view->getLayout()->createBlock(\Candela\Blog\Block\Comments\Form::class);
                if ($form) {
                    $form->setPost($post)->setSessionId($sessionId);
                    if (isset($comment)) {
                        $form->setReplyTo($comment);
                    }
                    $form->setIsAjaxRendering(true);
                    $result['form'] = $form->toHtml();
                }
            }
        } catch (\Exception $e) {
            $result['error'] = $e->getMessage();
            $this->messageManager->addErrorMessage($e->getMessage());
        }

        $this->getResponse()
            ->setHeader('Content-Type', 'application/json')
            ->setBody($this->serializer->serialize($result));
    }
}
