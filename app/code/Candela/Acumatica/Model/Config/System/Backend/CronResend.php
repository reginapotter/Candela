<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Model\Config\System\Backend;

class CronResend extends \Magento\Framework\App\Config\Value
{
    const JOB_NAME = 'Candela_acumatica_stock_item';

    const CRON_CUSTOM_SCHEDULE = 'groups/stock_item_cron/fields/custom_schedule/value';
    const CRON_SCHEDULE = 'groups/stock_item_cron/fields/schedule/value';
    const CRON_SCHEDULE_TIME = 'groups/stock_item_cron/fields/start_time/value';
    const CRON_SCHEDULE_FREQUENCY = 'groups/stock_item_cron/fields/frequency/value';

    /**
     * @var \Candela\Acumatica\Helper\Config\Backend\CronSetup
     */
    private $backendCronSetupHelper;

    /**
     * @param \Magento\Framework\Model\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $config
     * @param \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList
     * @param \Candela\Acumatica\Helper\Config\Backend\CronSetup $backendCronSetupHelper
     * @param \Magento\Framework\Model\ResourceModel\AbstractResource|null $resource
     * @param \Magento\Framework\Data\Collection\AbstractDb|null $resourceCollection
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\App\Config\ScopeConfigInterface $config,
        \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList,
        \Candela\Acumatica\Helper\Config\Backend\CronSetup $backendCronSetupHelper,
        \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null,
        \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null,
        array $data = []
    ) {
        $this->backendCronSetupHelper = $backendCronSetupHelper;
        parent::__construct($context, $registry, $config, $cacheTypeList, $resource, $resourceCollection, $data);
    }

    /**
     * @return $this
     */
    public function afterSave(): \Candela\Acumatica\Model\Config\System\Backend\CronResend
    {
        $isCustomSchedule = $this->getData(self::CRON_CUSTOM_SCHEDULE);
        if ($isCustomSchedule) {
            $this->setCustomSchedule();
        } else {
            $this->setupSchedule();
        }

        return parent::afterSave();
    }

    /**
     * @return void
     */
    private function setupSchedule(): void
    {
        $time = $this->getData(self::CRON_SCHEDULE_TIME);
        $frequency = $this->getData(self::CRON_SCHEDULE_FREQUENCY);

        if (!empty($time) && !empty($frequency)) {
            $this->backendCronSetupHelper->setupSchedule(self::JOB_NAME, $time, $frequency);
        }
    }

    /**
     * @return void
     */
    private function setCustomSchedule(): void
    {
        $schedule = $this->getData(self::CRON_SCHEDULE);
        if (!empty($schedule)) {
            $this->backendCronSetupHelper->setupCustomSchedule(self::JOB_NAME, $schedule);
        }
    }
}
