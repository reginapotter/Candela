<?php


namespace Candela\Blog\Model\DataProvider;

use Candela\Blog\Api\Data\TagInterface;
use Candela\Blog\Controller\Adminhtml\Tags\Edit;
use Candela\Blog\Model\Repository\TagRepository;
use Candela\Blog\Model\Tag;
use Magento\Ui\DataProvider\AbstractDataProvider;
use Magento\Framework\App\Request\DataPersistorInterface;
use Candela\Blog\Model\ResourceModel\Tag\CollectionFactory;
use Magento\Ui\DataProvider\Modifier\PoolInterface;
use Candela\Blog\Model\DataProvider\Traits\DataProviderTrait;
use Candela\Blog\Model\BlogRegistry;

class TagDataProvider extends AbstractDataProvider
{
    use DataProviderTrait;

    /**
     * @var DataPersistorInterface
     */
    private $dataPersistor;

    /**
     * @var PoolInterface
     */
    private $pool;

    /**
     * @var BlogRegistry
     */
    private $blogRegistry;

    /**
     * @var TagRepository
     */
    private $repository;

    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        DataPersistorInterface $dataPersistor,
        CollectionFactory $collectionFactory,
        PoolInterface $pool,
        BlogRegistry $blogRegistry,
        TagRepository $repository,
        array $meta = [],
        array $data = []
    ) {
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
        $this->collection = $collectionFactory->create();
        $this->dataPersistor = $dataPersistor;
        $this->pool = $pool;
        $this->blogRegistry = $blogRegistry;
        $this->repository = $repository;
    }

    /**
     * @return array
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getData()
    {
        $data = parent::getData();
        $storeId = $this->blogRegistry->registry(AbstractModifier::CURRENT_STORE_ID) ?: 0;
        $current = $this->blogRegistry->registry(Edit::CURRENT_CANDELA_BLOG_TAG);

        if ($current && $current->getId()) {
            $data[$current->getId()] = $current->getData();
            $this->addDataByStore($data, $storeId, $current->getId());
        }

        if ($savedData = $this->dataPersistor->get(Tag::PERSISTENT_NAME)) {
            $savedTagId = isset($savedData['tag_id']) ? $savedData['tag_id'] : null;
            $data[$savedTagId] = isset($data[$savedTagId])
                ? array_merge($data[$savedTagId], $savedData)
                : $savedData;
            $this->dataPersistor->clear(Tag::PERSISTENT_NAME);
        }

        return $data;
    }

    /**
     * @return array
     */
    public function getFieldsByStore()
    {
        return TagInterface::FIELDS_BY_STORE;
    }
}
