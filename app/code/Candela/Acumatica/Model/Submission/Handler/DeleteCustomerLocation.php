<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Model\Submission\Handler;

use Magento\Framework\Exception\InputException;

class DeleteCustomerLocation implements \Candela\Acumatica\Model\Submission\HandlerInterface
{
    /**
     * @var \Candela\Acumatica\Service\HandlerProcessor\CustomerLocation
     */
    private $customerLocationProcessor;

    /**
     * @var \Candela\Acumatica\Model\Submission\Packer
     */
    private $packer;

    /**
     * @param \Candela\Acumatica\Service\HandlerProcessor\CustomerLocation $customerLocationProcessor
     * @param \Candela\Acumatica\Model\Submission\Packer $packer
     */
    public function __construct(
        \Candela\Acumatica\Service\HandlerProcessor\CustomerLocation $customerLocationProcessor,
        \Candela\Acumatica\Model\Submission\Packer $packer
    ) {
        $this->customerLocationProcessor = $customerLocationProcessor;
        $this->packer = $packer;
    }

    /**
     * @param \Candela\Acumatica\Api\Data\SubmissionInterface $submission
     * @return void
     * @throws \Magento\Framework\Exception\InputException
     */
    public function process(\Candela\Acumatica\Api\Data\SubmissionInterface $submission): void
    {
        $inputData = $this->packer->unpackInputData($submission);
        if (!isset($inputData['locationId']) || !isset($inputData['customerAcumaticaId'])) {
            throw new InputException(__('Incorrect Input Data.'));
        }

        $this->customerLocationProcessor->deleteCustomerLocation(
            $inputData['locationId'],
            $inputData['customerAcumaticaId'],
            (int)$submission->getWebsiteId()
        );
    }
}
