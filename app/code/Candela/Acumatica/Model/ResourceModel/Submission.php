<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Model\ResourceModel;

use Candela\Acumatica\Api\Data\SubmissionInterface;

class Submission extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    const TABLE_NAME = 'acumatica_publish_queue';

    /**
     * @return void
     */
    protected function _construct(): void
    {
        $this->_init(self::TABLE_NAME, SubmissionInterface::SUBMISSION_ID);
    }

    /**
     * @param \Candela\Acumatica\Model\Submission|\Magento\Framework\Model\AbstractModel $object
     * @return $this
     */
    public function _beforeSave(\Magento\Framework\Model\AbstractModel $object
    ): \Candela\Acumatica\Model\ResourceModel\Submission {
        if ($object->getStatus() && $object->getStatus() != SubmissionInterface::STATUS_PENDING) {
            $object->setData(SubmissionInterface::SUBMISSION_TIME, new \Zend_Db_Expr('NOW()'));
        }

        return parent::_beforeSave($object);
    }

    /**
     * @param int|null $website
     * @param string $status
     * @param string $date
     * @return void
     */
    public function clearByStatus(?int $website, string $status, string $date): void
    {
        $connection = $this->getConnection();

        $where = ['status = ?' => $status, 'creating_time <= ?' => $date];

        if ($website) {
            $where['website_id = ?'] = $website;
        }

        $connection->delete(
            self::TABLE_NAME,
            $where
        );
    }
}
