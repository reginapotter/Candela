<?php


namespace Candela\Blog\Ui\Component\Listing\Post;

use Magento\Framework\Data\OptionSourceInterface;

class Authors implements OptionSourceInterface
{
    /**
     * @var \Candela\Blog\Api\AuthorRepositoryInterface
     */
    private $authorRepository;

    public function __construct(\Candela\Blog\Api\AuthorRepositoryInterface $authorRepository)
    {
        $this->authorRepository = $authorRepository;
    }

    /**
     * @return array
     */
    public function toOptionArray()
    {
        $options = [];
        $collection = $this->authorRepository->getAuthorCollection();
        foreach ($collection as $author) {
            $options[] = [
                'label' => $author->getName(),
                'value' => $author->getAuthorId()
            ];
        }

        return $options;
    }
}
