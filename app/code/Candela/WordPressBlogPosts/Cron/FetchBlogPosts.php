<?php
/**
 *
 */
namespace Candela\WordPressBlogPosts\Cron;

use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\HTTP\Client\Curl;
use Magento\Framework\Serialize\Serializer\Serialize;
use Candela\WordPressBlogPosts\Api\BlogPostsRepositoryInterface;
use Candela\WordPressBlogPosts\Api\Config\ConfigInterface;

class FetchBlogPosts
{
    /**
     * @var Curl
     */
    protected $curlClient;
    /**
     * @var ConfigInterface
     */
    protected $config;
    /**
     * @var BlogPostsRepositoryInterface
     */
    protected $blogPostsRepository;
    /**
     * @var Serialize
     */
    protected $serialize;

    /**
     * FetchBlogPosts constructor.
     * @param Curl $curl
     * @param ConfigInterface $config
     * @param BlogPostsRepositoryInterface $blogPostsRepository
     * @param Serialize $serialize
     */
    public function __construct(
        Curl $curl,
        ConfigInterface $config,
        BlogPostsRepositoryInterface $blogPostsRepository,
        Serialize $serialize
    ) {
        $this->curlClient = $curl;
        $this->config = $config;
        $this->blogPostsRepository = $blogPostsRepository;
        $this->serialize = $serialize;
    }

    /**
     * execute function
     *
     * @throws LocalizedException
     */
    public function execute()
    {
        $infoBaseUrl = $this->config->getInfoBaseUrl();
        $apiPath = $this->config->getBlogApiPath();
        $serviceUrl = $infoBaseUrl . $apiPath;
        $options = [
            CURLOPT_USERAGENT => ConfigInterface::USER_AGENT,
            CURLOPT_HEADER => false,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_FOLLOWLOCATION => 1
        ];
        $this->curlClient->setOptions($options);
        try {
            $this->curlClient->get($serviceUrl, []);
            if ($this->curlClient->getStatus() == 200) {
                $response = trim($this->curlClient->getBody());
                if ($this->isJson($response)) {
                    $response = json_decode($response, true);
                    $response = $this->serialize->serialize($response);
                    $response = ['is_success' => true, 'message' => $response];
                } else {
                    $response = $this->getWrongResponse($response);
                }
            } else {
                $response = $this->getWrongResponse('Client status: ' . $this->curlClient->getStatus());
            }
        } catch (\Exception $e) {
            $response = $this->getWrongResponse($e->getMessage());
        }

        $isSuccess = (is_array($response) && $response['is_success']) ? 1 : 0;
        $blogPosts = (is_array($response) && $response['message']) ? $response['message'] : 'Something went wrong!';
        $blogPosts = $this->preparePost($blogPosts);
        $this->saveBlogPosts($isSuccess, $blogPosts);

        return $blogPosts;
    }

    /**
     * @param string $blogPosts
     * @return bool|string
     */
    private function preparePost($blogPosts)
    {
        $posts = $this->serialize->unserialize($blogPosts);
        foreach ($posts as $key => $post) {
            $posts[$key] = $post;
        }

        return $this->serialize->serialize($posts);
    }

    /**
     * @param int $isSuccess
     * @param string $blogPosts
     * @throws LocalizedException
     */
    private function saveBlogPosts(int $isSuccess, string $blogPosts)
    {
        $posts = $this->blogPostsRepository->initBlogPosts();
        $posts->setIsSuccess($isSuccess);
        $posts->setBlogPosts($blogPosts);
        $this->blogPostsRepository->save($posts);
    }

    /**
     * @param string $string
     * @return bool
     */
    private function isJson(string $string)
    {
        json_decode($string);

        return (json_last_error() == JSON_ERROR_NONE);
    }

    /**
     * @param string $response
     * @return array
     */
    private function getWrongResponse(string $response)
    {
        return ['is_success' => false, 'message' => $this->serialize->serialize($response)];
    }
}
