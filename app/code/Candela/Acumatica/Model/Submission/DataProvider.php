<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types=1);

namespace Candela\Acumatica\Model\Submission;

use Candela\Acumatica\Model\ResourceModel\Submission\CollectionFactory;
use Magento\Framework\App\Request\DataPersistorInterface;

class DataProvider extends \Magento\Ui\DataProvider\AbstractDataProvider
{
    /**
     * @var \Candela\Acumatica\Model\ResourceModel\Submission\Collection
     */
    protected $collection;

    /**
     * @var DataPersistorInterface
     */
    private $dataPersistor;

    /**
     * @var array
     */
    private $loadedData;

    /**
     * @param string $name
     * @param string $primaryFieldName
     * @param string $requestFieldName
     * @param CollectionFactory $submissionCollectionFactory
     * @param DataPersistorInterface $dataPersistor
     * @param array $meta
     * @param array $data
     */
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $submissionCollectionFactory,
        DataPersistorInterface $dataPersistor,
        array $meta = [],
        array $data = []
    ) {
        $this->collection = $submissionCollectionFactory->create();
        $this->dataPersistor = $dataPersistor;
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        if (isset($this->loadedData)) {
            return $this->loadedData;
        }
        $items = $this->collection->getItems();

        foreach ($items as $submission) {
            $this->loadedData[$submission->getId()] = $submission->getData();
        }

        $data = $this->dataPersistor->get('acumatica_submission');
        if (!empty($data)) {
            $submission = $this->collection->getNewEmptyItem();
            $submission->setData($data);
            $this->loadedData[$submission->getId()] = $submission->getData();
            $this->dataPersistor->clear('acumatica_submission');
        }

        return $this->loadedData;
    }
}
