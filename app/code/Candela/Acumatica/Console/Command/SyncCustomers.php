<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Console\Command;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class SyncCustomers extends \Symfony\Component\Console\Command\Command
{
    const MODE_QUEUE = 'queue';
    const MODE_IMMEDIATELY = 'immediately';

    /**
     * @var \Candela\Acumatica\Service\Console\SyncCustomers
     */
    private $syncCustomers;

    /**
     * @param \Candela\Acumatica\Service\Console\SyncCustomers $syncCustomers
     * @param null|string $name
     */
    public function __construct(\Candela\Acumatica\Service\Console\SyncCustomers $syncCustomers, $name = null)
    {
        parent::__construct($name);
        $this->syncCustomers = $syncCustomers;
    }

    /**
     * @return void
     */
    protected function configure()
    {
        $options = [
            new InputArgument(
                'mode',
                InputArgument::REQUIRED,
                'The mode to set. Available options are "immediately" or "queue"'
            ),
            new InputOption(
                'store',
                null,
                InputOption::VALUE_OPTIONAL,
                'Store ID'
            ),
            new InputOption(
                'customer',
                null,
                InputOption::VALUE_OPTIONAL,
                'Customer ID'
            ),
            new InputOption(
                'size',
                null,
                InputOption::VALUE_OPTIONAL,
                'Size'
            )
        ];
        $this->setDescription('Synchronize all customer with Acumatica.');
        $this->setDefinition($options);

        parent::configure();
    }

    /**
     * @param \Symfony\Component\Console\Input\InputInterface $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     * @return int|void|null
     */
    protected function execute(
        \Symfony\Component\Console\Input\InputInterface $input,
        \Symfony\Component\Console\Output\OutputInterface $output
    ) {
        $mode = $input->getArgument('mode');
        $customerId = $input->getOption('customer');
        if ($customerId !== null) {
            $customerId = (int)$customerId;
        }

        $storeId = $input->getOption('store');
        if ($storeId !== null) {
            $storeId = (int)$storeId;
        }
        $pageSize = $input->getOption('size');
        if ($pageSize !== null) {
            $pageSize = (int)$pageSize;
        }
        if (empty($mode)) {
            $output->writeln('<error>Mode is required option.</error>');
            return;
        }


        if ($mode === self::MODE_IMMEDIATELY) {
            $output->writeln('<info>Starting...</info>');
            $this->syncCustomers->setPageSize($pageSize);
            $this->syncCustomers->syncImmediately($output, $customerId, $storeId);
            $output->writeln('<info>Finished...</info>');
        }

        if ($mode === self::MODE_QUEUE) {
            $output->writeln('<info>Starting...</info>');
            $this->syncCustomers->syncQueue($output, $customerId, $storeId);
            $output->writeln('<info>Finished...</info>');
        }
    }
}
