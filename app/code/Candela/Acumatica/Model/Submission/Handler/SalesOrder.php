<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Model\Submission\Handler;

use Magento\Framework\Exception\InputException;

class SalesOrder implements \Candela\Acumatica\Model\Submission\HandlerInterface
{
    /**
     * @var \Candela\Acumatica\Service\HandlerProcessor\SalesOrder
     */
    private $salesOrderProcessor;

    /**
     * @var \Candela\Acumatica\Model\Submission\Packer
     */
    private $packer;

    /**
     * @param \Candela\Acumatica\Service\HandlerProcessor\SalesOrder $salesOrderProcessor
     * @param \Candela\Acumatica\Model\Submission\Packer $packer
     */
    public function __construct(
        \Candela\Acumatica\Service\HandlerProcessor\SalesOrder $salesOrderProcessor,
        \Candela\Acumatica\Model\Submission\Packer $packer
    ) {
        $this->salesOrderProcessor = $salesOrderProcessor;
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
        if (!isset($inputData['orderId'])) {
            throw new InputException(__('Incorrect Input Data.'));
        }

        $this->salesOrderProcessor->create((int)$inputData['orderId'], (int)$submission->getWebsiteId());
    }
}
