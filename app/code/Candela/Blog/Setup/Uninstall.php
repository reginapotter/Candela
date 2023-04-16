<?php

declare(strict_types=1);



namespace Candela\Blog\Setup;

use Candela\Blog\Api\Data\VoteInterface;
use Candela\Blog\Model\ResourceModel\Author;
use Candela\Blog\Model\ResourceModel\Categories;
use Candela\Blog\Model\ResourceModel\Categories\Collection;
use Candela\Blog\Model\ResourceModel\Comments;
use Candela\Blog\Model\ResourceModel\Posts;
use Candela\Blog\Model\ResourceModel\Posts\RelatedProducts\GetPostRelatedProducts;
use Candela\Blog\Model\ResourceModel\Tag;
use Candela\Blog\Model\ResourceModel\View;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UninstallInterface;

class Uninstall implements UninstallInterface
{
    const MODULE_TABLES = [
        Author::STORE_TABLE_NAME,
        Author::TABLE_NAME,
        Collection::CATEGORY_POST_RELATION_TABLE,
        Categories::STORE_TABLE_FIELDS,
        Categories::TABLE_NAME,
        Comments::TABLE_NAME,
        Posts::POSTS_STORE_TABLE,
        Posts::POSTS_TAGS_RELATION_TABLE,
        Posts::TABLE_NAME,
        Tag::TABLE_NAME,
        Tag::STORE_TABLE_NAME,
        View::TABLE_NAME,
        VoteInterface::MAIN_TABLE,
        GetPostRelatedProducts::POST_PRODUCT_RELATION_TABLE
    ];

    public function uninstall(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        $connection = $setup->getConnection();

        foreach (self::MODULE_TABLES as $table) {
            $connection->dropTable($setup->getTable($table));
        }

        $setup->endSetup();
    }
}
