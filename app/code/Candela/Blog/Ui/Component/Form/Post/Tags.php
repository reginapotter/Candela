<?php


namespace Candela\Blog\Ui\Component\Form\Post;

use Magento\Framework\View\Element\UiComponent\ContextInterface;
use Magento\Framework\View\Element\UiComponentFactory;
use Magento\Ui\Component\Form\Field;

class Tags extends Field
{
    /**
     * @var \Candela\Blog\Api\TagRepositoryInterface
     */
    private $tagRepository;

    public function __construct(
        ContextInterface $context,
        UiComponentFactory $uiComponentFactory,
        \Candela\Blog\Api\TagRepositoryInterface $tagRepository,
        $components,
        array $data = []
    ) {
        $this->tagRepository = $tagRepository;
        parent::__construct($context, $uiComponentFactory, $components, $data);
    }

    /**
     * Prepare component configuration
     *
     * @return void
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function prepare()
    {
        $tagsArray = [];
        foreach ($this->tagRepository->getAllTags() as $tag) {
            $tagName = $tag->getName();
            if ($tagName) {
                $tagsArray[] = $tagName;
            }
        }
        $config = $this->getData('config');
        $config['tags'] = $tagsArray;
        $this->setData('config', $config);

        parent::prepare();
    }
}
