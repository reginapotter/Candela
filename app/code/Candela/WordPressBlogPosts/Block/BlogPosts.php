<?php
/**
 *
 */
namespace Candela\WordPressBlogPosts\Block;

use Magento\Framework\Serialize\Serializer\Serialize;
use Magento\Framework\Stdlib\DateTime\DateTime;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Candela\WordPressBlogPosts\Api\BlogPostsRepositoryInterface;
use Candela\WordPressBlogPosts\Api\Config\ConfigInterface;

class BlogPosts extends Template
{
    /**
     * @var BlogPostsRepositoryInterface
     */
    protected $blogPostsRepository;
    /**
     * @var Serialize
     */
    protected $serialize;
    /**
     * @var ConfigInterface
     */
    protected $config;
    /**
     * @var DateTime
     */
    protected $dateTime;

    public function __construct(
        Context $context,
        BlogPostsRepositoryInterface $blogPostsRepository,
        Serialize $serialize,
        ConfigInterface $config,
        DateTime $dateTime
    ) {
        parent::__construct($context);
        $this->blogPostsRepository = $blogPostsRepository;
        $this->serialize = $serialize;
        $this->config = $config;
        $this->dateTime = $dateTime;
    }

    public function isEnabled()
    {
        return $this->config->isEnabled();
    }

    /**
     * @return array
     */
    public function getBlogPosts()
    {
        $lastBlogPosts = $this->blogPostsRepository->getLastBlogPosts();
        if ($lastBlogPosts) {

            return $this->serialize->unserialize($lastBlogPosts);
        }

        return $lastBlogPosts;
    }

    /**
     * @param array $blogPost
     * @return string
     */
    public function getDate(array $blogPost): string
    {
        $date = (isset($blogPost['post_date']))
            ? strtotime($blogPost['post_date'])
            : strtotime('now');

        return $this->dateTime->date('M d, Y', $date);
    }
}
