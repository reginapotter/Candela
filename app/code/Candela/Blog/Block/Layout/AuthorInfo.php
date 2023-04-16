<?php

declare(strict_types=1);



namespace Candela\Blog\Block\Layout;

use Candela\Blog\Api\Data\AuthorInterface;
use Candela\Blog\Model\AuthorService;
use Candela\Blog\Model\Image\ImagePathConverter;
use Magento\Framework\UrlInterface;
use Magento\Framework\View\Element\Template\Context;
use Psr\Log\LoggerInterface;

class AuthorInfo extends AbstractClass
{
    public const AUTHOR_PAGE_ACTION = 'author';

    /**
     * @var string
     */
    protected $_template = 'Candela_Blog::sidebar/author_info.phtml';

    /**
     * @var AuthorService
     */
    private $authorService;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @var ImagePathConverter
     */
    private $imagePathConverter;

    public function __construct(
        Context $context,
        AuthorService $authorService,
        LoggerInterface $logger,
        ImagePathConverter $imagePathConverter,
        array $data = []
    ) {
        $this->authorService = $authorService;
        $this->logger = $logger;
        parent::__construct($context, $data);
        $this->imagePathConverter = $imagePathConverter;
    }

    public function getAuthorData(): ?AuthorInterface
    {
        $request = $this->getRequest();
        $authorId = $request->getActionName() == self::AUTHOR_PAGE_ACTION ? (int)$request->getParam('id') : null;
        $author = $this->authorService->getCurrentAuthor($authorId);

        return $author ? $this->prepareImageUrl($author) : null;
    }

    public function isAnySocial(): bool
    {
        $author = $this->getAuthorData();
        foreach (AuthorInterface::SOCIAL_LINK_AS_METHODS as $method) {
            if ($author->$method()) {
                return true;
            }
        }

        return false;
    }

    private function prepareImageUrl(AuthorInterface $author): AuthorInterface
    {
        $image = $author->getImage();
        $mediaUrl = $this->_storeManager->getStore()->getBaseUrl(UrlInterface::URL_TYPE_MEDIA);
        if ($image && strpos($image, $mediaUrl) === false) {
            try {
                $author->setImage($this->imagePathConverter->getImagePath($image));
            } catch (\Exception $e) {
                $this->logger->critical($e);
            }
        }

        return $author;
    }
}
