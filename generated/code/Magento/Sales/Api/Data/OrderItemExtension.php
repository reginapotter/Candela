<?php
namespace Magento\Sales\Api\Data;

/**
 * Extension class for @see \Magento\Sales\Api\Data\OrderItemInterface
 */
class OrderItemExtension extends \Magento\Framework\Api\AbstractSimpleObject implements OrderItemExtensionInterface
{
    /**
     * @return \Magento\GiftMessage\Api\Data\MessageInterface|null
     */
    public function getGiftMessage()
    {
        return $this->_get('gift_message');
    }

    /**
     * @param \Magento\GiftMessage\Api\Data\MessageInterface $giftMessage
     * @return $this
     */
    public function setGiftMessage(\Magento\GiftMessage\Api\Data\MessageInterface $giftMessage)
    {
        $this->setData('gift_message', $giftMessage);
        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getKlevuOrderSync()
    {
        return $this->_get('klevu_order_sync');
    }

    /**
     * @param string[] $klevuOrderSync
     * @return $this
     */
    public function setKlevuOrderSync($klevuOrderSync)
    {
        $this->setData('klevu_order_sync', $klevuOrderSync);
        return $this;
    }
}
