<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Customer\Model\Indexer\Address\AttributeProvider as AddressAttributeProvider;

class UpgradeData implements \Magento\Framework\Setup\UpgradeDataInterface
{
    const ACUMATICA_CUSTOMER_LOCATION_ID = 'acumatica_customer_location_id';
    const ACUMATICA_SALES_ORDER_ID = 'acumatica_sales_order_id';
    const ACUMATICA_SHIPMENT_ID = 'acumatica_shipment_id';
    const DESTINATION_TYPE_ATTRIBUTE_CODE = 'destination_type';

    /**
     * @var \Magento\Customer\Setup\CustomerSetupFactory
     */
    private $customerSetupFactory;

    /**
     * @var \Magento\Sales\Setup\SalesSetupFactory
     */
    private $salesSetupFactory;

    /**
     * @param \Magento\Customer\Setup\CustomerSetupFactory $customerSetupFactory
     * @param \Magento\Sales\Setup\SalesSetupFactory $salesSetupFactory
     */
    public function __construct(
        \Magento\Customer\Setup\CustomerSetupFactory $customerSetupFactory,
        \Magento\Sales\Setup\SalesSetupFactory $salesSetupFactory
    ) {
        $this->customerSetupFactory = $customerSetupFactory;
        $this->salesSetupFactory = $salesSetupFactory;
    }

    /**
     * @param \Magento\Framework\Setup\ModuleDataSetupInterface $setup
     * @param \Magento\Framework\Setup\ModuleContextInterface $context
     * @return void
     * @throws \Magento\Framework\Exception\LocalizedException
     * @throws \Zend_Validate_Exception
     */
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        //TODO This installation should be moved to Candela AddressType module.

        if (version_compare($context->getVersion(), '0.2.0', '<')) {
            $setup->startSetup();

            $customerSetup = $this->customerSetupFactory->create(['setup' => $setup]);


            $this->createCustomerLocationAttribute($setup);
            $this->createAcumaticaSalesOrderAttributes($setup);

            $setup->endSetup();
        }
    }

    /**
     * @param \Magento\Framework\Setup\ModuleDataSetupInterface $setup
     * @return void
     * @throws \Magento\Framework\Exception\LocalizedException
     * @throws \Zend_Validate_Exception
     */
    private function createCustomerLocationAttribute(ModuleDataSetupInterface $setup): void
    {
        /** @var \Magento\Customer\Setup\CustomerSetup $customerSetup */
        $customerSetup = $this->customerSetupFactory->create(['setup' => $setup]);
        $entityTypeId = $customerSetup->getEntityTypeId(AddressAttributeProvider::ENTITY);

        if (!$customerSetup->getAttribute($entityTypeId, self::ACUMATICA_CUSTOMER_LOCATION_ID)) {
            $customerSetup->addAttribute(
                $entityTypeId,
                self::ACUMATICA_CUSTOMER_LOCATION_ID,
                [
                    'type' => 'varchar',
                    'label' => 'Customer Location Id',
                    'input' => 'text',
                    'required' => false,
                    'visible' => false,
                    'visible_on_front' => false,
                    'user_defined' => false,
                    'sort_order' => 400,
                    'position' => 400,
                    'default' => null,
                    'system' => 0
                ]
            );
        }
    }

    /**
     * @param \Magento\Framework\Setup\ModuleDataSetupInterface $setup
     * @return void
     */
    private function createAcumaticaSalesOrderAttributes(ModuleDataSetupInterface $setup): void
    {
        $salesSetup = $this->salesSetupFactory->create(['setup' => $setup]);

        $salesSetup->addAttribute(
            \Magento\Sales\Model\Order::ENTITY,
            self::ACUMATICA_SALES_ORDER_ID,
            [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                'length' => 255,
                'visible' => false,
                'nullable' => true
            ]
        );

        $salesSetup->addAttribute(
            \Magento\Sales\Model\Order::ENTITY,
            self::ACUMATICA_SHIPMENT_ID,
            [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                'length' => 255,
                'visible' => false,
                'nullable' => true,
                'default' => null
            ]
        );
    }
}
