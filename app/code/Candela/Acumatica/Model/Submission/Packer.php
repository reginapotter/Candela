<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Model\Submission;

class Packer
{
    /**
     * @var \Magento\Framework\Serialize\Serializer\Json
     */
    private $jsonSerializer;

    /**
     * @param \Magento\Framework\Serialize\Serializer\Json $jsonSerializer
     */
    public function __construct(\Magento\Framework\Serialize\Serializer\Json $jsonSerializer)
    {
        $this->jsonSerializer = $jsonSerializer;
    }

    /**
     * @param \Candela\Acumatica\Api\Data\SubmissionInterface $submission
     * @param array $inputData
     * @return void
     */
    public function packInputData(\Candela\Acumatica\Api\Data\SubmissionInterface $submission, array $inputData): void
    {
        $jsonInputData = $this->jsonSerializer->serialize($inputData);
        $submission->setInputData($jsonInputData);
    }

    /**
     * @param array $inputData
     * @return string
     */
    public function serializeInputData(array $inputData): string
    {
        return $this->jsonSerializer->serialize($inputData);
    }

    /**
     * @param \Candela\Acumatica\Api\Data\SubmissionInterface $submission
     * @return array
     */
    public function unpackInputData(\Candela\Acumatica\Api\Data\SubmissionInterface $submission): array
    {
        $jsonInputData = $submission->getInputData();
        return $this->jsonSerializer->unserialize($jsonInputData);
    }
}
