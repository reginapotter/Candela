<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types=1);

namespace Candela\Acumatica\Controller\Adminhtml\Publish;

use Magento\Backend\App\Action;

class Queue extends Action
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    private $resultPageFactory;

    /**
     * @param Action\Context $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;

        parent::__construct($context);
    }

    /**
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute(): \Magento\Framework\View\Result\Page
    {
        $resultPage = $this->resultPageFactory->create();

        $label = __('Publish Queue');
        $resultPage->getConfig()->getTitle()->set($label);

        return $resultPage;
    }
}
