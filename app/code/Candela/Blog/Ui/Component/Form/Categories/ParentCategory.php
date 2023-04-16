<?php


namespace Candela\Blog\Ui\Component\Form\Categories;

use Candela\Blog\Api\Data\CategoryInterface;
use Magento\Framework\Data\OptionSourceInterface;
use Candela\Blog\Model\ResourceModel\Categories\CollectionFactory as CategoriesCollectionFactory;
use Magento\Framework\App\RequestInterface;
use Magento\Catalog\Model\Category as CategoryModel;

/**
 * Class
 */
class ParentCategory extends \Candela\Blog\Ui\Component\Form\Categories implements OptionSourceInterface
{
    /**
     * {@inheritdoc}
     */
    public function toOptionArray()
    {
        return $this->getCategoriesTree(true);
    }
}
