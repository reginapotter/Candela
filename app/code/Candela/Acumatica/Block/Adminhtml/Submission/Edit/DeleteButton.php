<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types=1);

namespace Candela\Acumatica\Block\Adminhtml\Submission\Edit;

use Magento\Backend\Block\Widget\Context;
use Candela\Acumatica\Api\SubmissionRepositoryInterface;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;
use Candela\Acumatica\Api\Data\SubmissionInterface;

class DeleteButton implements ButtonProviderInterface
{
    /**
     * @var Context
     */
    private $context;

    /**
     * @var \Candela\Acumatica\Api\SubmissionRepositoryInterface
     */
    private $submissionRepository;

    /**
     * @param \Candela\Acumatica\Api\SubmissionRepositoryInterface $submissionRepository
     * @param \Magento\Backend\Block\Widget\Context $context
     */
    public function __construct(
        SubmissionRepositoryInterface $submissionRepository,
        Context $context
    ) {
        $this->submissionRepository = $submissionRepository;
        $this->context = $context;
    }

    /**
     * @return array
     */
    public function getButtonData(): array
    {
        $data = [];
        if ($this->getSubmissionId()) {
            $data = [
                'label' => __('Delete Submission'),
                'class' => 'delete',
                'on_click' => 'deleteConfirm(\'' . __(
                    'Are you sure you want to do this?'
                ) . '\', \'' . $this->getDeleteUrl() . '\', {"data": {}})',
                'sort_order' => 20,
            ];
        }
        return $data;
    }

    /**
     * @return int|null
     */
    private function getSubmissionId(): ?int
    {
        $rowId = $this->context->getRequest()->getParam('submission_id');

        try {
            return (int)$this->submissionRepository->getById($rowId)->getId();
        } catch (NoSuchEntityException $e) {
            return null;
        }
    }

    /**
     * @return string
     */
    public function getDeleteUrl(): string
    {
        return $this->getUrl('acumatica/submission/delete', ['submission_id' => $this->getSubmissionId()]);
    }

    /**
     * @param string $route
     * @param array $params
     * @return string
     */
    public function getUrl(string $route = '', array $params = []): string
    {
        return $this->context->getUrlBuilder()->getUrl($route, $params);
    }
}
