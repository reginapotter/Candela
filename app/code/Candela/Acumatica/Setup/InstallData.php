<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Setup;

use Magento\Customer\Model\Customer;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements \Magento\Framework\Setup\InstallDataInterface
{
    const ACUMATICA_CUSTOMER_ID = 'acumatica_customer_id';

    /**
     * @var array
     */
    private $acumaticaCustomerIdData = [
        'type' => 'varchar',
        'label' => 'Acumatica Customer ID',
        'input' => 'text',
        'system' => false,
        'user_defined' => true,
        'required' => false,
        'position' => 1500
    ];

    /**
     * @var \Magento\Customer\Setup\CustomerSetupFactory
     */
    private $customerSetupFactory;

    /**
     * @var array
     */
    private $usedInForms = [
        'adminhtml_customer'
    ];

    /**
     * @var \Magento\Eav\Model\Entity\Attribute\SetFactory
     */
    private $attributeSetFactory;

    /**
     * @param \Magento\Customer\Setup\CustomerSetupFactory $customerSetupFactory
     * @param \Magento\Eav\Model\Entity\Attribute\SetFactory $attributeSetFactory
     */
    public function __construct(
        \Magento\Customer\Setup\CustomerSetupFactory $customerSetupFactory,
        \Magento\Eav\Model\Entity\Attribute\SetFactory $attributeSetFactory
    ) {
        $this->customerSetupFactory = $customerSetupFactory;
        $this->attributeSetFactory = $attributeSetFactory;
    }

    /**
     * @param \Magento\Framework\Setup\ModuleDataSetupInterface $setup
     * @param \Magento\Framework\Setup\ModuleContextInterface $context
     * @return void
     */
    public function install(\Magento\Framework\Setup\ModuleDataSetupInterface $setup, \Magento\Framework\Setup\ModuleContextInterface $context): void
    {
        $setup->startSetup();

        $this->installAcumaticaCustomerIdAttribute($setup);

        $setup->endSetup();
    }

    /**
     * @param \Magento\Framework\Setup\ModuleDataSetupInterface $setup
     * @return void
     */
    private function installAcumaticaCustomerIdAttribute(ModuleDataSetupInterface $setup): void
    {
        /** @var \Magento\Customer\Setup\CustomerSetup $customerSetup */
        $customerSetup = $this->customerSetupFactory->create(['setup' => $setup]);

        $customerSetup->addAttribute(Customer::ENTITY, self::ACUMATICA_CUSTOMER_ID, $this->acumaticaCustomerIdData);

        $eavConfig = $customerSetup->getEavConfig();
        $customerEntity = $customerSetup->getEavConfig()->getEntityType(Customer::ENTITY);
        $attributeSetId = $customerEntity->getDefaultAttributeSetId();
        $attributeSet = $this->attributeSetFactory->create();
        $attributeGroupId = $attributeSet->getDefaultGroupId($attributeSetId);

        $attribute = $eavConfig->getAttribute(Customer::ENTITY, self::ACUMATICA_CUSTOMER_ID);
        $attribute->addData(
            [
                'attribute_set_id' => $attributeSetId,
                'attribute_group_id' => $attributeGroupId,
                'used_in_forms' => $this->usedInForms
            ]
        );
        $attribute->save();
    }
}
