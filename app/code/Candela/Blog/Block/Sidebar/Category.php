<?php

declare(strict_types=1);



namespace Candela\Blog\Block\Sidebar;

use Candela\Blog\Block\Sidebar\Category\TreeRenderer;

class Category extends AbstractClass
{
    const DEFAULT_LEVEL = 1;

    /**
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate("Candela_Blog::sidebar/categories.phtml");
        $this->addAmpTemplate('Candela_Blog::amp/sidebar/categories.phtml');
        $this->setRoute('use_categories');
    }

    /**
     * Get header text
     *
     * @return string
     */
    public function getBlockHeader()
    {
        if (!$this->hasData('header_text')) {
            $this->setData('header_text', __('Categories'));
        }

        return $this->getData('header_text');
    }

    public function renderCategoriesTreeHtml(): string
    {
        return $this->getLayout()
            ->createBlock(TreeRenderer::class)
            ->setCategoriesLimit($this->getCategoriesLimit())
            ->render();
    }

    public function getDefaultLevel(): int
    {
        return self::DEFAULT_LEVEL;
    }

    public function getCategoriesLimit(): int
    {
        return (int)$this->getData('categories_limit');
    }
}
