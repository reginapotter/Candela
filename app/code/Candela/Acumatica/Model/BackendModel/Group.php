<?php
/**
 * Copyright © 2021 Candela Commerce. All rights reserved.
 */
namespace Candela\Acumatica\Model\BackendModel;

use Magento\Framework\App\Cache\TypeListInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\App\Config\Value;
use Magento\Framework\Data\Collection\AbstractDb;
use Magento\Framework\Model\Context;
use Magento\Framework\Model\ResourceModel\AbstractResource;
use Magento\Framework\Registry;
use Magento\Framework\Serialize\Serializer\Json;

class Group extends Value
{
    /**
     * @var Json
     */
    private Json $jsonSerializer;

    /**
     * @param Context $context
     * @param Registry $registry
     * @param ScopeConfigInterface $config
     * @param TypeListInterface $cacheTypeList
     * @param Json $jsonSerializer
     * @param AbstractResource|null $resource
     * @param AbstractDb|null $resourceCollection
     * @param array $data
     */
    public function __construct(
        Context $context,
        Registry $registry,
        ScopeConfigInterface $config,
        TypeListInterface $cacheTypeList,
        Json $jsonSerializer,
        AbstractResource $resource = null,
        AbstractDb $resourceCollection = null,
        array $data = []
    ) {
        $this->jsonSerializer = $jsonSerializer;
        parent::__construct(
            $context,
            $registry,
            $config,
            $cacheTypeList,
            $resource,
            $resourceCollection,
            $data
        );
    }

    /**
     * @return void
     */
    public function beforeSave()
    {
        if (is_array($this->getValue())) {
            $this->serializeValue();
        }
    }

    /**
     * @return void
     */
    protected function _afterLoad()
    {
        if (!is_array($this->getValue())) {
            $this->unserializeValue();
        }
    }

    /**
     * @return void
     */
    private function unserializeValue(): void
    {
        $value = $this->getValue();
        if ($value !== null) {
            $value = $this->jsonSerializer->unserialize($value);
            $this->setValue($value);
        }
    }

    /**
     * @return void
     */
    private function serializeValue(): void
    {
        $value = (array)$this->getValue();
        $formattedValue = [];
        foreach ($value as $data) {
            if (empty($data['customerGroup']) || empty($data['classAcumatica'])) {
                continue;
            }

            $formattedValue[] = [
                'customerGroup' => $data['customerGroup'],
                'classAcumatica' => $data['classAcumatica']
            ];
        }

        $this->setValue($this->jsonSerializer->serialize($formattedValue));
    }
}
