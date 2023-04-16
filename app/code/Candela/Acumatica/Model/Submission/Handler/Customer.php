<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Model\Submission\Handler;

use Magento\Framework\Exception\InputException;

class Customer implements \Candela\Acumatica\Model\Submission\HandlerInterface
{
    /**
     * @var \Candela\Acumatica\Service\HandlerProcessor\Customer
     */
    private $customerProcessor;

    /**
     * @var \Candela\Acumatica\Model\Submission\Packer
     */
    private $packer;

    /**
     * @param \Candela\Acumatica\Service\HandlerProcessor\Customer $customerProcessor
     * @param \Candela\Acumatica\Model\Submission\Packer $packer
     */
    public function __construct(
        \Candela\Acumatica\Service\HandlerProcessor\Customer $customerProcessor,
        \Candela\Acumatica\Model\Submission\Packer $packer
    ) {
        $this->customerProcessor = $customerProcessor;
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
        if (!isset($inputData['customerId'])) {
            throw new InputException(__('Incorrect Input Data.'));
        }

        $this->customerProcessor->syncCustomer((int)$inputData['customerId'], (int)$submission->getWebsiteId());
    }
}
