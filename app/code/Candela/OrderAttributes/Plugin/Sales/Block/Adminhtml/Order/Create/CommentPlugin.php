<?php
/**
 *
 */
namespace Candela\OrderAttributes\Plugin\Sales\Block\Adminhtml\Order\Create;

use Magento\Sales\Block\Adminhtml\Order\Create\Comment;

/**
 * Class CommentPlugin
 */
class CommentPlugin
{
    /**
     * @param Comment $subject
     * @param $html
     * @return string
     */
    public function afterToHtml(Comment $subject, $html)
    {
        $newBlockHtml = $subject->getLayout()
            ->createBlock('\Candela\OrderAttributes\Block\Review')
            ->setTemplate('Candela_OrderAttributes::order/attributes.phtml')
            ->toHtml();

        return $html . $newBlockHtml;
    }
}
