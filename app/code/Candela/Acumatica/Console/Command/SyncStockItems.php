<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Console\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SyncStockItems extends \Symfony\Component\Console\Command\Command
{
    /**
     * @var \Candela\Acumatica\Cron\StockItem
     */
    private $stockItem;

    /**
     * @var \Magento\Framework\App\State
     */
    private $state;

    /**
     * @param \Magento\Framework\App\State $state
     * @param \
     * Candela\Acumatica\Cron\StockItem $stockItem
     * @param string|null $name
     */
    public function __construct(
        \Magento\Framework\App\State $state,
        \Candela\Acumatica\Cron\StockItem $stockItem,
        $name = null
    ) {
        parent::__construct($name);
        $this->stockItem = $stockItem;
        $this->state = $state;
    }

    /**
     * @return void
     */
    protected function configure()
    {
        $this->setDescription('Synchronize stock items with acumatica.');
        parent::configure();
    }

    /**
     * @param \Symfony\Component\Console\Input\InputInterface $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     * @return int|void|null
     * @throws \Magento\Framework\Exception\LocalizedException
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->state->setAreaCode(\Magento\Framework\App\Area::AREA_ADMINHTML);
        $output->writeln('<info>Start...</info>');
        $this->stockItem->execute();
        $output->writeln('<info>End...</info>');
    }
}
