<?php

declare(strict_types=1);



namespace Candela\Blog\Setup\Patch\DeclarativeSchemaApplyBefore;

use Magento\Framework\Setup\Patch\PatchInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

/**
 * Delete nullable values for columns which use for primary.
 *
 * Tables:
 * - candela_blog_categories_store
 * - candela_blog_posts_store
 * - candela_blog_posts_category
 * - candela_blog_posts_tag
 * - candela_blog_tags_store
 * - candela_blog_author_store
 */
class MakePrimaryFieldsNonNullable implements PatchInterface
{
    /**
     * @var array
     */
    private $columnsToUpdate = [
        'candela_blog_categories_store' => [
            'category_id',
            'store_id'
        ],
        'candela_blog_posts_store' => [
            'post_id',
            'store_id'
        ],
        'candela_blog_posts_category' => [
            'post_id',
            'category_id'
        ],
        'candela_blog_posts_tag' => [
            'post_id',
            'tag_id'
        ],
        'candela_blog_tags_store' => [
            'tag_id',
            'store_id'
        ],
        'candela_blog_author_store' => [
            'author_id',
            'store_id'
        ]
    ];

    /**
     * @var SchemaSetupInterface
     */
    private $schemaSetup;

    public function __construct(
        SchemaSetupInterface $schemaSetup
    ) {
        $this->schemaSetup = $schemaSetup;
    }

    /**
     * @return array
     */
    public static function getDependencies()
    {
        return [];
    }

    /**
     * @return array
     */
    public function getAliases()
    {
        return [];
    }

    /**
     * @return $this
     */
    public function apply()
    {
        $connection = $this->schemaSetup->getConnection();
        foreach ($this->columnsToUpdate as $tableName => $columns) {
            $tableName = $this->schemaSetup->getTable($tableName);
            if ($this->schemaSetup->tableExists($tableName)) {
                $deleteSelect = $connection->select()->from($tableName, []);
                foreach ($columns as $columnName) {
                    $deleteSelect->orWhere(sprintf('%s IS NULL', $columnName));
                }
                $query = $deleteSelect->deleteFromSelect($tableName);
                $connection->query($query);
            }
        }

        return $this;
    }
}
