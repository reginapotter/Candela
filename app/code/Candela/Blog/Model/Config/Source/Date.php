<?php


namespace Candela\Blog\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

class Date implements ArrayInterface
{
    /**
     * @var \Candela\Blog\Helper\Date
     */
    private $date;

    /**
     * @var \Magento\Framework\Stdlib\DateTime\DateTime
     */
    private $dateTime;

    public function __construct(
        \Candela\Blog\Helper\Date $date,
        \Magento\Framework\Stdlib\DateTime\DateTime $dateTime
    ) {
        $this->date = $date;
        $this->dateTime = $dateTime;
    }

    /**
     * @return array
     */
    public function toOptionArray()
    {
        $date = $this->dateTime->date('d M Y H:i:s', strtotime('-6 day'));

        return [
            [
                'value' => \Candela\Blog\Helper\Date::DATE_TIME_PASSED,
                'label' => __('6 days ago')
            ],
            [
                'value' => \Candela\Blog\Helper\Date::DATE_TIME_DIRECT,
                'label' => $this->date->renderDate($date, true)
            ],
        ];
    }
}
