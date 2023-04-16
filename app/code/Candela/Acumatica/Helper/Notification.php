<?php
/**
 * Copyright © Candela Technology, LLC. All rights reserved.
 */
declare(strict_types = 1);

namespace Candela\Acumatica\Helper;

use Magento\Store\Model\ScopeInterface;

class Notification
{
    /**
     * @var \Candela\Acumatica\Model\Config\General
     */
    private $configGeneral;

    /**
     * @var \Magento\Framework\Mail\Template\TransportBuilder
     */
    private $transportBuilder;

    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    private $scopeConfig;

    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;

    /**
     * @var \Magento\Store\Model\StoreManagerInterface
     */
    private $storeManager;

    /**
     * @var \Candela\Acumatica\Helper\Error
     */
    private $errorHelper;

    /**
     * @var \Magento\Framework\Translate\Inline\StateInterface
     */
    private $inlineTranslation;

    /**
     * @param \Candela\Acumatica\Model\Config\General $configGeneral
     * @param \Magento\Framework\Mail\Template\TransportBuilder $transportBuilder
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     * @param \Psr\Log\LoggerInterface $logger
     * @param \Magento\Store\Model\StoreManagerInterface $storeManager
     * @param \Candela\Acumatica\Helper\Error $errorHelper
     * @param \Magento\Framework\Translate\Inline\StateInterface $inlineTranslation
     */
    public function __construct(
        \Candela\Acumatica\Model\Config\General $configGeneral,
        \Magento\Framework\Mail\Template\TransportBuilder $transportBuilder,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        \Psr\Log\LoggerInterface $logger,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Candela\Acumatica\Helper\Error $errorHelper,
        \Magento\Framework\Translate\Inline\StateInterface $inlineTranslation
    ) {
        $this->configGeneral = $configGeneral;
        $this->transportBuilder = $transportBuilder;
        $this->scopeConfig = $scopeConfig;
        $this->logger = $logger;
        $this->storeManager = $storeManager;
        $this->errorHelper = $errorHelper;
        $this->inlineTranslation = $inlineTranslation;
    }

    /**
     * @param \Candela\Acumatica\Api\Data\SubmissionInterface $submission
     * @return void
     * @throws \Magento\Framework\Exception\MailException
     */
    public function sendFailedNotification(\Candela\Acumatica\Api\Data\SubmissionInterface $submission): void
    {
        $failedNotificationEmail = $this->configGeneral->getFailedNotificationEmail((int)$submission->getWebsiteId());
        if ($failedNotificationEmail) {
            $this->sendMessage($submission, $failedNotificationEmail);
        }
    }

    /**
     * @param \Candela\Acumatica\Api\Data\SubmissionInterface $submission
     * @return void
     * @throws \Magento\Framework\Exception\LocalizedException
     * @throws \Magento\Framework\Exception\MailException
     * @throws \Magento\Framework\Mail\Exception\InvalidArgumentException
     */
    public function sendFailAuthenticateNotification(\Candela\Acumatica\Api\Data\SubmissionInterface $submission): void
    {
        $email = $this->configGeneral->getFailAuthenticateNotificationEmail((int)$submission->getWebsiteId());
        if ($email) {
            $this->sendWrongCredentialsMessage($submission, $email);
        }
    }

    /**
     * @param array $stockItemUpdate
     * @param int $website
     * @return void
     */
    public function sendStockItemReport(array $stockItemUpdate, int $website): void
    {
        $stockUpdateReportEmail = $this->configGeneral->getStockUpdateReportEmail($website);
        if ($stockUpdateReportEmail) {
            $this->sendReport($stockItemUpdate, $stockUpdateReportEmail, $website);
        }
    }

    /**
     * @param array $stockItemUpdate
     * @param string $stockUpdateReportEmail
     * @param int $website
     * @return void
     */
    private function sendReport(array $stockItemUpdate, string $stockUpdateReportEmail, int $website): void
    {
        $this->inlineTranslation->suspend();

        $templateOptions = [
            'area' => \Magento\Framework\App\Area::AREA_FRONTEND,
            ScopeInterface::SCOPE_STORE => $this->getWebsiteStoreId($website)
        ];

        $templateVars = [
            'headingData' => $this->getReportHeadingData($stockItemUpdate),
            'failedItems' => $this->getReportFailedItemsData($stockItemUpdate),
            'storeUrl' => $this->scopeConfig->getValue(
                'web/unsecure/base_url',
                ScopeInterface::SCOPE_WEBSITE,
                $website
            )
        ];

        $senderEmail = $this->scopeConfig->getValue(
            'trans_email/ident_general/email',
            ScopeInterface::SCOPE_WEBSITE,
            $website
        );

        $from = ['email' => $senderEmail, 'name' => 'Acumatica StockItem Update Report'];
        $stockUpdateReportEmail = explode(',', $stockUpdateReportEmail);

        try {
            $this->transportBuilder
                ->setTemplateIdentifier('acumatica_stockitem_report')
                ->setTemplateOptions($templateOptions)
                ->setTemplateVars($templateVars)
                ->setFrom($from);

            foreach ($stockUpdateReportEmail as $email) {
                if (!empty($email)) {
                    $this->transportBuilder->addTo($email);
                }
            }

            $transport = $this->transportBuilder->getTransport();
            $transport->sendMessage();
        } catch (\Exception $e) {
            $this->logger->critical($e->getMessage());
        } finally {
            $this->inlineTranslation->resume();
        }
    }

    /**
     * @param int $website
     * @return int
     */
    private function getWebsiteStoreId(int $website): int
    {
        $stores = $this->storeManager->getStores();
        $websiteStoreId = (int)$this->storeManager->getDefaultStoreView()->getId();

        foreach ($stores as $store) {
            if ((int)$store->getWebsiteId() === $website) {
                $websiteStoreId = (int)$store->getId();
                break;
            }
        }

        return $websiteStoreId;
    }

    /**
     * @param array $stockItemUpdate
     * @return string
     */
    private function getReportHeadingData(array $stockItemUpdate): string
    {
        $headingData = __(
            '%1 products updated successfully, %2 - failed',
            count($stockItemUpdate['success']),
            count($stockItemUpdate['fail'])
        );

        return (string)$headingData;
    }

    /**
     * @param array $stockItemUpdate
     * @return string
     */
    private function getReportFailedItemsData(array $stockItemUpdate): string
    {
        $failedItems = '';
        foreach ($stockItemUpdate['fail'] as $productItemSku) {
            $failedItems .= __(' SKU %1 - disabled, not found in Acumatica,', $productItemSku);
        }

        return $failedItems;
    }

    /**
     * @param \Candela\Acumatica\Api\Data\SubmissionInterface $submission
     * @param string $failedNotificationEmail
     * @return void
     */
    private function sendMessage(
        \Candela\Acumatica\Api\Data\SubmissionInterface $submission,
        string $failedNotificationEmail
    ): void {
        $templateOptions = [
            'area' => \Magento\Framework\App\Area::AREA_FRONTEND,
            ScopeInterface::SCOPE_STORE => $this->getWebsiteStoreId((int)$submission->getWebsiteId())
        ];

        $templateVars = [
            'initialData' => $this->errorHelper->formatEmailData($submission->getInputData()),
            'errorMessage' => $this->errorHelper->formatError($submission->getErrorMessage(), true),
            'storeUrl' => $this->scopeConfig->getValue(
                'web/unsecure/base_url',
                ScopeInterface::SCOPE_WEBSITE,
                $submission->getWebsiteId()
            )
        ];

        $senderEmail = $this->scopeConfig->getValue(
            'trans_email/ident_general/email',
            ScopeInterface::SCOPE_WEBSITE,
            $submission->getWebsiteId()
        );

        $from = ['email' => $senderEmail, 'name' => 'Acumatica Failed Transaction'];
        $failedNotificationEmail = explode(',', $failedNotificationEmail);
        foreach ($failedNotificationEmail as &$item) {
            $item = trim($item);
        }
        unset($item);

        try {
            $this->transportBuilder->setTemplateIdentifier('acumatica_failed')
                ->setTemplateOptions($templateOptions)
                ->setTemplateVars($templateVars)
                ->setFrom($from);

            foreach ($failedNotificationEmail as $email) {
                if (!empty($email)) {
                    $this->transportBuilder->addTo($email);
                }
            }

            $transport = $this->transportBuilder->getTransport();
            $transport->sendMessage();
        } catch (\Exception $e) {
            $this->logger->critical($e->getMessage());
        }
    }

    /**
     * @param \Candela\Acumatica\Api\Data\SubmissionInterface $submission
     * @param string $failedNotificationEmail
     * @return void
     * @throws \Magento\Framework\Exception\LocalizedException
     * @throws \Magento\Framework\Exception\MailException
     * @throws \Magento\Framework\Mail\Exception\InvalidArgumentException
     */
    private function sendWrongCredentialsMessage(
        \Candela\Acumatica\Api\Data\SubmissionInterface $submission,
        string $failedNotificationEmail
    ): void {
        $templateOptions = [
            'area' => \Magento\Framework\App\Area::AREA_FRONTEND,
            ScopeInterface::SCOPE_STORE => $this->getWebsiteStoreId((int)$submission->getWebsiteId())
        ];

        $templateVars = [];

        $senderEmail = $this->scopeConfig->getValue(
            'trans_email/ident_general/email',
            ScopeInterface::SCOPE_WEBSITE,
            $submission->getWebsiteId()
        );

        $from = ['email' => $senderEmail, 'name' => 'Acumatica Failed Transaction'];
        $failedNotificationEmail = explode(',', $failedNotificationEmail);
        foreach ($failedNotificationEmail as &$item) {
            $item = trim($item);
        }
        unset($item);

        try {
            $this->transportBuilder->setTemplateIdentifier('acumatica_credentials_failed')
                ->setTemplateOptions($templateOptions)
                ->setTemplateVars($templateVars)
                ->setFrom($from);

            foreach ($failedNotificationEmail as $email) {
                if (!empty($email)) {
                    $this->transportBuilder->addTo($email);
                }
            }

            $transport = $this->transportBuilder->getTransport();
            $transport->sendMessage();
        } catch (\Exception $e) {
            $this->logger->critical($e->getMessage());
        }
    }
}
