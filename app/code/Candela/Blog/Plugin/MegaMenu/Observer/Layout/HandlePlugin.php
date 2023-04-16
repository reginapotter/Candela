<?php


namespace Candela\Blog\Plugin\MegaMenu\Observer\Layout;

use Candela\Blog\Helper\Data;

class HandlePlugin
{
    /**
     * @var Data
     */
    private $helper;

    public function __construct(
        Data $helper
    ) {
        $this->helper = $helper;
    }

    /**
     * @phpstan-ignore-next-line
     *
     * @param \Candela\MegaMenu\Observer\Layout\Handle $subject
     * @param \Closure $proceed
     * @param $observer
     */
    public function aroundExecute($subject, \Closure $proceed, $observer)
    {
        if (!$this->helper->isCurrentPageAmp()) {
            $proceed($observer);
        }
    }
}
