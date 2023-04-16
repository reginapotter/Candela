<?php

declare(strict_types=1);



namespace Candela\Blog\Block\Content\Search;

use Candela\Blog\Block\Content\Lists\Pager;
use Candela\Blog\Model\ResourceModel\Posts\Collection;
use Candela\Blog\Model\ResourceModel\Posts\CollectionFactory as PostCollectionFactory;
use Magento\Backend\Block\Template;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Section extends Template
{
    public function getCollection(): ?AbstractCollection
    {
        return $this->getData('collection');
    }

    /**
     * @throws LocalizedException
     */
    public function getToolbar(bool $isAmp = false): Pager
    {
        /** @var Pager $toolbar */
        $toolbar = $this->getLayout()->createBlock(Pager::class);
        $template = $isAmp ? 'Candela_Blog::amp/list/pager.phtml' : 'Candela_Blog::list/pager.phtml';
        $toolbar
            ->setTemplate($template)
            ->setPageVarName($this->getData('entityName') . '_page')
            ->setLimitVarName($this->getData('entityName') . '_limit')
            ->setCollection($this->getCollection())
            ->setIsMultiSearch(true)
            ->setSearchPage(true);

        return $toolbar;
    }
}
