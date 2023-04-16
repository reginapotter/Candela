<?php
namespace Candela\OrderNumber\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\SalesSequence\Model\ResourceModel\Meta as ResourceMetadata;
use Magento\SalesSequence\Model\EntityPool;
use Magento\SalesSequence\Model\ProfileFactory;

class InstallData implements InstallDataInterface {

    /**
     * Sales setup factory
     *
     * @var EntityPool
     */
    private $entityPool;

    /**
     * @var ResourceMetadata
     */
    private $resourceMetadata;

    /**
     * @var ProfileFactory
     */
    private $profileFactory;

    /**
     * @param EntityPool $entityPool
     * @param ResourceMetadata $resourceMetadata
     * @param ProfileFactory $profileFactory
     */
    public function __construct(
        EntityPool $entityPool,
        ResourceMetadata $resourceMetadata,
        ProfileFactory $profileFactory
    ) {
        $this->entityPool = $entityPool;
        $this->resourceMetadata = $resourceMetadata;
        $this->profileFactory = $profileFactory;
    }

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $prefix = '3';
        foreach ($this->entityPool->getEntities() as $entityType) {
            $metadata = $this->resourceMetadata->loadByEntityTypeAndStore(
                $entityType,
                1
            );
            $profile = $this->profileFactory->create()->load($metadata->getMetaId(),'meta_id');
            $profile->setPrefix($prefix);
            $profile->save();
        }
    }
}


