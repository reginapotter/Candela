<?php


namespace Candela\Blog\Block\Sidebar;

class Wrapper extends \Magento\Framework\View\Element\Template implements \Magento\Widget\Block\BlockInterface
{
    /**
     * @var \Magento\Framework\Module\Manager
     */
    private $moduleManager;

    public function __construct(
        \Magento\Framework\Module\Manager $moduleManager,
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->moduleManager = $moduleManager;
    }

    /**
     * @return string
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function toHtml()
    {
        $html = '';
        if ($this->moduleManager->isEnabled('Candela_Blog')) {
            $widget = $this->getLayout()->createBlock($this->getInstance());
            $widget->setData($this->getData());
            $widget->setIsWidget(true);
            $html = $widget->toHtml();
        }

        return $html;
    }
}
