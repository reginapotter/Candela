<?php
namespace Candela\OrderComment\Plugin\Block\Adminhtml;

use Candela\OrderComment\Model\Data\OrderComment;

class SalesOrderViewInfo
{
    /**
     * @param \Magento\Sales\Block\Adminhtml\Order\View\Info $subject
     * @param string $result
     * @return string
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function afterToHtml(
        \Magento\Sales\Block\Adminhtml\Order\View\Info $subject,
        $result
    ) {
        $commentBlock = $subject->getLayout()->getBlock('candelacommerce_order_comments');
        if ($commentBlock !== false && $subject->getNameInLayout() == 'order_info') {
            $commentBlock->setOrderComment($subject->getOrder()->getData(OrderComment::COMMENT_FIELD_NAME));
            $result = $result . $commentBlock->toHtml();
        }

        return $result;
    }
}
