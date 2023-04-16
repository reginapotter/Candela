<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Adapter\AdapterInterface;
use Magento\Framework\DB\Ddl\Table;
use Candela\Acumatica\Model\ResourceModel\Submission as SubmissionResourceModel;
use Candela\Acumatica\Api\Data\SubmissionInterface;
use Magento\Store\Model\Website;

class InstallSchema implements \Magento\Framework\Setup\InstallSchemaInterface
{
    /**
     * @param \Magento\Framework\Setup\SchemaSetupInterface $setup
     * @param \Magento\Framework\Setup\ModuleContextInterface $context
     * @return void
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context): void
    {
        $setup->startSetup();

        $this->createPublishQueueTable($setup);

        $setup->endSetup();
    }

    /**
     * @param \Magento\Framework\Setup\SchemaSetupInterface $setup
     * @return void
     */
    private function createPublishQueueTable(SchemaSetupInterface $setup): void
    {
        $table = $setup->getConnection()->newTable(
            $setup->getTable(SubmissionResourceModel::TABLE_NAME)
        )->addColumn(
            SubmissionInterface::SUBMISSION_ID,
            Table::TYPE_INTEGER,
            null,
            ['identity' => true, 'primary' => true, 'unsigned' => true, 'nullable' => false],
            'Id'
        )->addColumn(
            SubmissionInterface::WEBSITE_ID,
            Table::TYPE_SMALLINT,
            null,
            ['unsigned' => true, 'nullable' => false],
            'Website ID'
        )->addColumn(
            SubmissionInterface::EVENT_TYPE,
            Table::TYPE_TEXT,
            50,
            ['nullable' => false],
            'Event Type'
        )->addColumn(
            SubmissionInterface::INPUT_DATA,
            Table::TYPE_TEXT,
            Table::MAX_TEXT_SIZE,
            ['nullable' => false, 'default' => ''],
            'Input Data'
        )->addColumn(
            SubmissionInterface::COUNTER,
            Table::TYPE_SMALLINT,
            null,
            ['unsigned' => true, 'nullable' => false, 'default' => 0],
            'Counter'
        )->addColumn(
            SubmissionInterface::CREATING_TIME,
            Table::TYPE_TIMESTAMP,
            null,
            ['nullable' => false, 'default' => Table::TIMESTAMP_INIT],
            'Creating Time'
        )->addColumn(
            SubmissionInterface::SUBMISSION_TIME,
            Table::TYPE_TIMESTAMP,
            null,
            ['nullable' => true],
            'Submission Time'
        )->addColumn(
            SubmissionInterface::STATUS,
            Table::TYPE_TEXT,
            15,
            ['nullable' => false, 'default' => SubmissionInterface::STATUS_PENDING],
            'Status'
        )->addColumn(
            SubmissionInterface::ERROR_MESSAGE,
            Table::TYPE_TEXT,
            null,
            ['nullable' => true],
            'Error Message'
        )->addIndex(
            $setup->getIdxName(SubmissionResourceModel::TABLE_NAME, [SubmissionInterface::SUBMISSION_TIME], AdapterInterface::INDEX_TYPE_INDEX),
            [SubmissionInterface::SUBMISSION_TIME],
            ['type' => AdapterInterface::INDEX_TYPE_INDEX]
        )->addForeignKey(
            $setup->getFkName(SubmissionResourceModel::TABLE_NAME, SubmissionInterface::WEBSITE_ID, Website::ENTITY, SubmissionInterface::WEBSITE_ID),
            SubmissionInterface::WEBSITE_ID,
            $setup->getTable(Website::ENTITY),
            SubmissionInterface::WEBSITE_ID,
            \Magento\Framework\DB\Ddl\Table::ACTION_CASCADE
        )->setComment(
            'Acumatica Publish Queue'
        );

        $setup->getConnection()->createTable($table);
    }
}
