<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Model\Config\Source;

class CronFrequency implements \Magento\Framework\Option\ArrayInterface
{
    const CRON_EVERY_FIVE_MINUTES = '5';
    const CRON_QUARTER_HOUR = 'Q';
    const CRON_HALF_HOUR = 'A';
    const CRON_HOURLY = 'H';
    const CRON_DAILY = 'D';
    const CRON_WEEKLY = 'W';
    const CRON_MONTHLY = 'M';

    /**
     * @return array
     */
    public function toOptionArray(): array
    {
        return [
            [
                'label' => __('Every 5 Minutes'),
                'value' => self::CRON_EVERY_FIVE_MINUTES
            ],
            [
                'label' => __('Every 15 Minutes'),
                'value' => self::CRON_QUARTER_HOUR
            ],
            [
                'label' => __('Every 30 Minutes'),
                'value' => self::CRON_HALF_HOUR
            ],
            [
                'label' => __('Hourly'),
                'value' => self::CRON_HOURLY
            ],
            [
                'label' => __('Daily'),
                'value' => self::CRON_DAILY
            ],
            [
                'label' => __('Weekly'),
                'value' => self::CRON_WEEKLY
            ],
            [
                'label' => __('Monthly'),
                'value' => self::CRON_MONTHLY
            ]
        ];
    }
}
