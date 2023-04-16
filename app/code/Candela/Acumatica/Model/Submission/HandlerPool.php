<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Model\Submission;

use Magento\Framework\Exception\InputException;

class HandlerPool implements \Candela\Acumatica\Model\Submission\HandlerInterface
{
    /**
     * @var \Candela\Acumatica\Model\Submission\HandlerInterface[]
     */
    private $handlers;

    /**
     * @param \Candela\Acumatica\Model\Submission\HandlerInterface[] $handlers
     * @throws \Magento\Framework\Exception\InputException
     */
    public function __construct(array $handlers)
    {
        foreach ($handlers as $handler) {
            if (!$handler instanceof \Candela\Acumatica\Model\Submission\HandlerInterface) {
                throw new InputException(__('Provided handler doesn\'t implement Interface.'));
            }
        }
        $this->handlers = $handlers;
    }

    /**
     * @param \Candela\Acumatica\Api\Data\SubmissionInterface $submission
     * @return void
     * @throws \Magento\Framework\Exception\InputException
     */
    public function process(\Candela\Acumatica\Api\Data\SubmissionInterface $submission): void
    {
        if (!isset($this->handlers[$submission->getEventType()])) {
            throw new InputException(__('HandlerPool doesn\'t support provided %1 EventType', $submission->getEventType()));
        }

        $this->handlers[$submission->getEventType()]->process($submission);
    }
}
