<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Console\Command;

use Magento\Framework\Exception\LocalizedException;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class CustomerRemoveAddress extends \Symfony\Component\Console\Command\Command
{
    /**
     * @var \Magento\Framework\App\State
     */
    private $state;

    /**
     * @var \Candela\Acumatica\Service\HandlerProcessor\CustomerLocation
     */
    private $customerLocation;

    /**
     * @var \Candela\Acumatica\Service\SubmissionRepository
     */
    private $submissionRepository;

    /**
     * @var \Magento\Framework\Serialize\Serializer\Json
     */
    private $jsonSerializer;

    /**
     * @param \Magento\Framework\App\State $state
     * @param \Candela\Acumatica\Service\HandlerProcessor\CustomerLocation $customerLocation
     * @param \Candela\Acumatica\Service\SubmissionRepository $submissionRepository
     * @param \Magento\Framework\Serialize\Serializer\Json $jsonSerializer
     */
    public function __construct(
        \Magento\Framework\App\State $state,
        \Candela\Acumatica\Service\HandlerProcessor\CustomerLocation $customerLocation,
        \Candela\Acumatica\Service\SubmissionRepository $submissionRepository,
        \Magento\Framework\Serialize\Serializer\Json $jsonSerializer,
        $name = null
    ) {
        parent::__construct($name);
        $this->state = $state;
        $this->customerLocation = $customerLocation;
        $this->submissionRepository = $submissionRepository;
        $this->jsonSerializer = $jsonSerializer;
    }

    /**
     * @return void
     */
    protected function configure()
    {
        $options = [

            new InputArgument(
                'submission',
                InputArgument::REQUIRED,
                'Submission ID'
            )
        ];
        $this->setDescription('Remove Location.');
        $this->setDefinition($options);

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

        $submissionId = (int)$input->getArgument('submission');

        try {
            $submission = $this->submissionRepository->getById($submissionId);
            $submissionData = $this->jsonSerializer->unserialize($submission->getInputData());
        } catch (LocalizedException $exception) {
            $output->writeln('<error>Submission with ID ' . $submissionId . ' does not exist.</error>');
        }
        if (isset($submissionData['locationId'])) {
            $this->customerLocation->deleteCustomerLocation($submissionData['locationId'], $submission->getWebsiteId());
        }

    }
}
