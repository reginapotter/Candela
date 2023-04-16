<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Console\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class SendPending extends \Symfony\Component\Console\Command\Command
{
    const EVENT_TYPE = 'event';
    const SEND_PENDING_SALES_ORDER_EVENT = 'orders';

    /**
     * @var \Candela\Acumatica\Cron\SendPending
     */
    private $sendPending;

    /**
     * @var \Magento\Framework\App\State
     */
    private $state;

    /**
     * @param \Magento\Framework\App\State $state
     * @param \Candela\Acumatica\Cron\SendPending $sendPending
     * @param string|null $name
     */
    public function __construct(
        \Magento\Framework\App\State $state,
        \Candela\Acumatica\Cron\SendPending $sendPending,
        $name = null
    ) {
        parent::__construct($name);
        $this->sendPending = $sendPending;
        $this->state = $state;
    }

    /**
     * @return void
     */
    protected function configure()
    {
        $this->setDescription('Send Pending Queue To Acumatica.');

        parent::configure();
    }

    /**
     * @param \Symfony\Component\Console\Input\InputInterface $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     * @return int|void|null
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->state->setAreaCode(\Magento\Framework\App\Area::AREA_ADMINHTML);
        $this->sendPending->execute();
    }
}
