<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Console\Command;

use Symfony\Component\Console\Input\InputOption;

class CleanQueue extends \Symfony\Component\Console\Command\Command
{
    /**
     * @var \Magento\Store\Model\StoreManagerInterface
     */
    private $storeManager;

    /**
     * @var \Candela\Acumatica\Model\Config\General
     */
    private $configGeneral;

    /**
     * @var \Candela\Acumatica\Api\QueueInterface
     */
    private $queue;

    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;

    /**
     * @param \Magento\Store\Model\StoreManagerInterface $storeManager
     * @param \Candela\Acumatica\Model\Config\General $configGeneral
     * @param \Candela\Acumatica\Api\QueueInterface $queue
     * @param \Psr\Log\LoggerInterface $logger
     * @param string|null $name
     */
    public function __construct(
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Candela\Acumatica\Model\Config\General $configGeneral,
        \Candela\Acumatica\Api\QueueInterface $queue,
        \Psr\Log\LoggerInterface $logger,
        string $name = null
    ) {
        parent::__construct($name);

        $this->storeManager = $storeManager;
        $this->configGeneral = $configGeneral;
        $this->queue = $queue;
        $this->logger = $logger;
    }

    /**
     * @return void
     */
    protected function configure()
    {
        $options = [
            new InputOption(
                'status',
                null,
                InputOption::VALUE_OPTIONAL,
                'Submission Status'
            ),

            new InputOption(
                'store',
                null,
                InputOption::VALUE_OPTIONAL,
                'Store ID'
            ),
        ];
        $this->setDescription('Clear Acumatica Queue Submissions.');
        $this->setDefinition($options);

        parent::configure();
    }

    /**
     * @param \Symfony\Component\Console\Input\InputInterface $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     * @return int|void|null
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    protected function execute(
        \Symfony\Component\Console\Input\InputInterface $input,
        \Symfony\Component\Console\Output\OutputInterface $output
    ) {
        $storeId = $input->getOption('store');
        if ($storeId !== null) {
            $storeId = (int)$storeId;
        }
        $status = $input->getOption('status');
        if ($status === null) {
            $status = \Candela\Acumatica\Api\Data\SubmissionInterface::STATUS_DONE;
        }

        $websiteId = (int)$this->storeManager->getStore($storeId)->getWebsiteId();

        $output->writeln('<info>Starting...</info>');

        foreach ($this->storeManager->getWebsites() as $website) {
            if ($websiteId !== (int)$website->getId() || !$this->configGeneral->isEnabled((int)$website->getId())) {
                $output->writeln(
                    '<info>Acumatica module is not enabled for ' . $website->getName() . ' website.</info>'
                );
                continue;
            }

            try {
                $this->queue->cleanQueue($status, (int)$website->getId());
            } catch (\Exception $e) {
                $this->logger->critical($e);
            }
        }

        $output->writeln('<info>Finished...</info>');
    }
}
