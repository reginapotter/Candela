<?php
/**
 *
 */
namespace Candela\WordPressBlogPosts\Cron;

use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;
use Candela\WordPressBlogPosts\Api\BlogPostsRepositoryInterface;

class ClearOldPosts
{
    /**
     * @var BlogPostsRepositoryInterface
     */
    protected $blogPostsRepository;

    /**
     * ClearOldPosts constructor.
     * @param BlogPostsRepositoryInterface $blogPostsRepository
     */
    public function __construct(
        BlogPostsRepositoryInterface $blogPostsRepository
    ) {
        $this->blogPostsRepository = $blogPostsRepository;
    }

    /**
     * execute function
     *
     * @return void
     * @throws LocalizedException
     */
    public function execute()
    {
        $successfulBlogPosts = $this->blogPostsRepository->getBlogPosts(1);
        $this->clearBlogPosts($successfulBlogPosts);
        $unsuccessfulBlogPosts = $this->blogPostsRepository->getBlogPosts(0);
        $this->clearBlogPosts($unsuccessfulBlogPosts);
    }

    /**
     * @param array $blogPosts
     * @return void
     * @throws LocalizedException
     * @throws NoSuchEntityException
     */
    private function clearBlogPosts(array $blogPosts)
    {
        $count = count($blogPosts);
        if ($count > 3) {
            for ($i = 0; $i < $count - 3; $i++) {
                $this->blogPostsRepository->deleteById($blogPosts[$i]);
            }
        }
    }
}
