<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Helper\Config\Backend;

use Candela\Acumatica\Model\Config\Source\CronFrequency;
use Magento\Framework\Exception\CouldNotSaveException;

class CronSetup
{
    /**
     * @var \Magento\Framework\App\Config\ValueFactory
     */
    protected $configValueFactory;

    /**
     * @param \Magento\Framework\App\Config\ValueFactory $configValueFactory
     */
    public function __construct(\Magento\Framework\App\Config\ValueFactory $configValueFactory)
    {
        $this->configValueFactory = $configValueFactory;
    }

    /**
     * @param string $jobName
     * @return string
     */
    protected function getModelConfigPath(string $jobName): string
    {
        return sprintf('crontab/acumatica/jobs/%s/run/model', $jobName);
    }

    /**
     * @param string $jobName
     * @return string
     */
    protected function getScheduleConfigPath(string $jobName): string
    {
        return sprintf('crontab/acumatica/jobs/%s/schedule/cron_expr', $jobName);
    }

    /**
     * @param string $jobName
     * @param string $cronModel
     * @return void
     * @throws \Magento\Framework\Exception\CouldNotSaveException
     */
    public function setupModel(string $jobName, string $cronModel): void
    {
        $this->saveConfig($this->getModelConfigPath($jobName), $cronModel);
    }

    /**
     * @param string $jobName
     * @param string $cronExprString
     * @return void
     * @throws \Magento\Framework\Exception\CouldNotSaveException
     */
    public function setupCustomSchedule(string $jobName, string $cronExprString): void
    {
        $this->saveConfig($this->getScheduleConfigPath($jobName), $cronExprString);
    }

    /**
     * @param string $jobName
     * @param int[] $time
     * @param string $frequency
     * @return void
     * @throws \Magento\Framework\Exception\CouldNotSaveException
     */
    public function setupSchedule(string $jobName, array $time, string $frequency): void
    {
        $cronExprString = $this->getCronExpr($time, $frequency);
        $this->setupCustomSchedule($jobName, $cronExprString);
    }

    /**
     * @param array $time
     * @param string $frequency
     * @return string
     */
    protected function getCronExpr(array $time, string $frequency): string
    {
        $hours = intval($time[0]);
        $minutes = intval($time[1]);

        $cronExprArray = [
            $this->calculateMinutes((int)$minutes, $frequency),      # Minute
            $this->calculateHours((int)$hours, $frequency),          # Hour
            ($frequency == CronFrequency::CRON_MONTHLY) ? '1' : '*', # Day of the Month
            '*',                                                     # Month of the Year
            ($frequency == CronFrequency::CRON_WEEKLY) ? '1' : '*',  # Day of the Week
        ];

        return join(' ', $cronExprArray);
    }

    /**
     * @param int $selectedHours
     * @param string $frequency
     * @return string
     */
    protected function calculateHours(int $selectedHours, string $frequency): string
    {
        switch ($frequency) {
            case CronFrequency::CRON_DAILY:
            case CronFrequency::CRON_WEEKLY:
            case CronFrequency::CRON_MONTHLY:
                $hours = $selectedHours === 0 ? '*' : (string)$selectedHours;
                break;
            default:
                $hours = $selectedHours === 0 ? '*' : $selectedHours . '-23';
        }
        return $hours;
    }

    /**
     * @param int $selectedMinutes
     * @param string $frequency
     * @return string
     */
    protected function calculateMinutes(int $selectedMinutes, string $frequency): string
    {
        $minutesFrequency = '';
        switch ($frequency) {
            case CronFrequency::CRON_HALF_HOUR:
                $minutesFrequency = '/30';
                break;
            case CronFrequency::CRON_QUARTER_HOUR:
                $minutesFrequency = '/15';
                break;
            case CronFrequency::CRON_EVERY_FIVE_MINUTES:
                $minutesFrequency = '/5';
                break;
        }

        $list = [
            CronFrequency::CRON_HALF_HOUR,
            CronFrequency::CRON_QUARTER_HOUR,
            CronFrequency::CRON_EVERY_FIVE_MINUTES
        ];
        if (!in_array($frequency, $list)) {
            $minutes = $selectedMinutes === 0 ? '0' : (string)$selectedMinutes;
        } else {
            $minutes = $selectedMinutes === 0 ? '*' : $selectedMinutes . '-59';
        }


        $minutes .= $minutesFrequency;
        return $minutes;
    }

    /**
     * @param string $configPath
     * @param string $value
     * @return void
     *
     * @throws \Magento\Framework\Exception\CouldNotSaveException
     */
    protected function saveConfig(string $configPath, string $value): void
    {
        try {
            /** @var $configValue \Magento\Framework\App\Config\Value */
            $configValue = $this->configValueFactory->create();
            $configValue->load($configPath, 'path');
            $configValue->setValue($value);
            $configValue->setPath($configPath);
            $configValue->save();
        } catch (\Exception $e) {
            throw new CouldNotSaveException(__('We can\'t save the Cron expression.'));
        }
    }
}
