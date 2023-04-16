<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types=1);

namespace Candela\Acumatica\Model\ResourceModel\Submission\Grid;

use Magento\Framework\Api\Search\SearchResultInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

class Collection extends \Candela\Acumatica\Model\ResourceModel\Submission\Collection implements SearchResultInterface
{
    /**
     * @var
     */
    private $aggregations;

    /**
     * @param string $model
     * @param string $resourceModel
     */
    protected function _construct(
        $model = \Magento\Framework\View\Element\UiComponent\DataProvider\Document::class,
        $resourceModel = \Candela\Acumatica\Model\ResourceModel\Submission::class
    ): void {
        $this->_init($model, $resourceModel);
    }

    /**
     * @return mixed
     */
    public function getAggregations()
    {
        return $this->aggregations;
    }

    /**
     * @param \Magento\Framework\Api\Search\AggregationInterface $aggregations
     */
    public function setAggregations($aggregations)
    {
        $this->aggregations = $aggregations;
    }

    /**
     * @return null
     */
    public function getSearchCriteria()
    {
        return null;
    }

    /**
     * @param SearchCriteriaInterface|null $searchCriteria
     * @return $this
     */
    public function setSearchCriteria(SearchCriteriaInterface $searchCriteria = null)
    {
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalCount()
    {
        return $this->getSize();
    }

    /**
     * @param int $totalCount
     * @return $this
     */
    public function setTotalCount($totalCount)
    {
        return $this;
    }

    /**
     * @param array|null $items
     * @return $this
     */
    public function setItems(array $items = null)
    {
        return $this;
    }
}
