<?php


namespace Candela\Blog\Controller\Adminhtml\Posts;

use Amasty\Base\Model\Serializer;
use Candela\Blog\Model\Cache\Type\Blog;
use Candela\Blog\Model\PostsFactory;
use Candela\Blog\Model\Preview\Encryptor;
use Candela\Blog\Model\Preview\PrepareForView;
use Candela\Blog\Model\Repository\PostRepository;
use Candela\Blog\Model\ResourceModel\Posts\RelatedProducts\GetPostRelatedProductsForPreview;
use Magento\Backend\App\Action\Context;
use Magento\Framework\App\Cache\StateInterface;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Math\Random;
use Magento\Framework\Stdlib\DateTime\DateTime;
use Magento\Framework\Url;

class Preview extends \Magento\Backend\App\Action
{
    /**
     * @var PostsFactory
     */
    private $postsFactory;

    /**
     * @var JsonFactory
     */
    private $resultJsonFactory;

    /**
     * @var PostRepository
     */
    private $repository;

    /**
     * @var Url
     */
    private $urlHelper;

    /**
     * @var Blog
     */
    private $cache;

    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * @var Random
     */
    private $mathRandom;

    /**
     * @var StateInterface
     */
    private $cacheState;

    /**
     * @var PrepareForView
     */
    private $prepareForView;

    /**
     * @var Encryptor
     */
    private $encryptor;

    /**
     * @var DateTime
     */
    private $dateTime;

    public function __construct(
        Context $context,
        PostsFactory $postsFactory,
        JsonFactory $resultJsonFactory,
        PostRepository $repository,
        Url $urlHelper,
        Blog $cache,
        Serializer $serializer,
        Random $mathRandom,
        StateInterface $cacheState,
        PrepareForView $prepareForView,
        Encryptor $encryptor,
        DateTime $dateTime
    ) {
        parent::__construct($context);
        $this->postsFactory = $postsFactory;
        $this->resultJsonFactory = $resultJsonFactory;
        $this->repository = $repository;
        $this->urlHelper = $urlHelper;
        $this->cache = $cache;
        $this->serializer = $serializer;
        $this->mathRandom = $mathRandom;
        $this->cacheState = $cacheState;
        $this->prepareForView = $prepareForView;
        $this->encryptor = $encryptor;
        $this->dateTime = $dateTime;
    }

    /**
     * @return ResultInterface
     */
    public function execute()
    {
        $messages = [];
        $data = $this->getPostData();
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);

        if (!$this->cacheState->isEnabled(Blog::TYPE_IDENTIFIER) && isset($data['post_id'])) {
            $encryptedParams = $this->encryptor->encryptParams((int)$data['post_id'], $this->dateTime->gmtTimestamp());
            $url = $this->urlHelper->getUrl(
                'amblog/post/preview',
                ['amblog_key_params' => $encryptedParams]
            );

            return $this->getRequest()->isAjax()
                ? $this->resultJsonFactory->create()->setData(['url' => $url])
                : $resultRedirect->setUrl($url);
        }

        if ($data) {
            try {
                $post = $this->postsFactory->create(['data' => $data]);
                $this->prepareForView->execute($post);
                $key = $this->savePostData($post->getData());
            } catch (\Exception $e) {
                $messages[] = __('An error occurred while execution');
                $messages[] = $e->getMessage();
            }
        } else {
            $messages[] = __('Empty Data for the post for preview');
        }

        if ($this->getRequest()->isAjax()) {
            if (!empty($messages)) {
                return $this->resultJsonFactory->create()->setData(
                    [
                        'messages' => $messages,
                        'error'    => true
                    ]
                );
            }

            return $this->resultJsonFactory->create()->setData([
                'url' => $this->urlHelper->getUrl('amblog/post/preview', ['amblog_key' => $key])
            ]);
        } else {
            if (!empty($messages)) {
                foreach ($messages as $message) {
                    $this->messageManager->addErrorMessage($message);
                }

                return $resultRedirect->setPath('*/*/');
            }

            $url = $this->urlHelper->getUrl('amblog/post/preview', ['amblog_key' => $key]);

            return $resultRedirect->setUrl($url);
        }
    }

    /**
     * @param array $data
     *
     * @return string
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    protected function savePostData($data)
    {
        $key = $this->mathRandom->getRandomString(16);
        $data = $this->serializer->serialize($data);
        $this->cache->save($data, $key, ['amblog_preview']);

        return $key;
    }

    /**
     * @return array
     */
    protected function getPostData()
    {
        $data = $this->getRequest()->getPostValue();
        if (!$data) {
            $postId = $this->getRequest()->getParam('id', false);
            if ($postId) {
                try {
                    $post = $this->repository->getById($postId);
                    $post->setData(GetPostRelatedProductsForPreview::IS_PREVIEW_FROM_SAVED_FLAG, true);
                    $data = $post->getData();
                } catch (NoSuchEntityException $e) {
                    $data = [];
                }
            }
        }
        return $data;
    }
}
