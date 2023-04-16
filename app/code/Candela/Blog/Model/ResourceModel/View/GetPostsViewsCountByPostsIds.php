<?php

declare(strict_types=1);



namespace Candela\Blog\Model\ResourceModel\View;

use Candela\Blog\Api\Data\ViewInterface;
use Candela\Blog\Model\ResourceModel\View;
use Magento\Framework\App\ResourceConnection;
use Magento\Framework\DB\Select;
use Zend_Db_Expr;

class GetPostsViewsCountByPostsIds
{
    /**
     * @var ResourceConnection
     */
    private $resourceConnection;

    public function __construct(
        ResourceConnection $resourceConnection
    ) {
        $this->resourceConnection = $resourceConnection;
    }

    public function execute(array $postsIds): array
    {
        $connection = $this->resourceConnection->getConnection();
        $select = $connection->select();
        $select->from($this->resourceConnection->getTableName(View::TABLE_NAME));
        $select->reset(Select::COLUMNS);
        $select->columns(
            [
                ViewInterface::POST_ID,
                new Zend_Db_Expr(sprintf('count(%s)', ViewInterface::POST_ID))
            ]
        );
        $select->group(ViewInterface::POST_ID);
        $select->where(sprintf('%s in (?)', ViewInterface::POST_ID), $postsIds);

        return $connection->fetchPairs($select) ?: [];
    }
}
