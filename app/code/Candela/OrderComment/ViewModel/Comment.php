<?php
/**
 * Comment
 *
 */
declare(strict_types=1);

namespace Candela\OrderComment\ViewModel;

use Candela\OrderComment\Model\Config;
use Candela\OrderComment\Model\Data\OrderComment;
use Magento\Checkout\Model\Session as CheckoutSession;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class Comment implements ArgumentInterface
{

    /**
     * @var Config
     */
    private $config;

    /**
     * @var CheckoutSession
     */
    private $checkoutSession;

    /**
     * Comment constructor.
     * @param Config $config
     * @param CheckoutSession $checkoutSession
     */
    public function __construct(Config $config, CheckoutSession $checkoutSession)
    {
        $this->config = $config;
        $this->checkoutSession = $checkoutSession;
    }

    /**
     * Get the current comment from quote
     *
     * @return string|null
     * @throws \Magento\Framework\Exception\LocalizedException
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getComment(): ?string
    {
        if ($this->checkoutSession->getQuoteId()) {
            return $this->checkoutSession->getQuote()->getData(OrderComment::COMMENT_FIELD_NAME);
        }
        return null;
    }

    /**
     * Get Max Length validation classes if character restriction is enabled
     *
     * @return string
     */
    public function getExtraClass(): string
    {
        $class = '';
        if ($maxLength = $this->config->getMaximumCharacterLength()) {
            $class .= 'validate-length maximum-length-' . $maxLength;
        }
        return $class;
    }
}
