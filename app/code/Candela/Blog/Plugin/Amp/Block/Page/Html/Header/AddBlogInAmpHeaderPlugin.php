<?php

declare(strict_types=1);



namespace Candela\Blog\Plugin\Amp\Block\Page\Html\Header;

use Candela\Amp\Block\Page\Html\Header\Topmenu;

class AddBlogInAmpHeaderPlugin
{
    /**
     * @var \Candela\Blog\Plugin\Block\Topmenu
     */
    private $amMenuPlugin;

    public function __construct(
        \Candela\Blog\Plugin\Block\Topmenu $amMenuPlugin
    ) {
        $this->amMenuPlugin = $amMenuPlugin;
    }

    /**
     * @param Topmenu $subject
     * @param string $outermostClass
     * @param string $childrenWrapClass
     * @return void
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     *
     * @see Topmenu
     */
    public function beforeGetMenuHtml(
        Topmenu $subject,
        $outermostClass = '',
        $childrenWrapClass = ''
    ): void {
        $this->amMenuPlugin->beforeGetHtml($subject, $outermostClass, $childrenWrapClass);
    }
}
