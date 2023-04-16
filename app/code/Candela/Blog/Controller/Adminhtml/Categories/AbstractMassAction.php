<?php


namespace Candela\Blog\Controller\Adminhtml\Categories;

use Magento\Backend\App\Action;
use Magento\Ui\Component\MassAction\Filter;
use Psr\Log\LoggerInterface;

/**
 * Class AbstractMassAction
 */
abstract class AbstractMassAction extends \Candela\Blog\Controller\Adminhtml\AbstractMassAction
{
    /**
     * Authorization level of a basic admin session
     *
     * @see _isAllowed()
     */
    const ADMIN_RESOURCE = 'Candela_Blog::categories';

    /**
     * @var \Candela\Blog\Model\Repository\CategoriesRepository
     */
    private $repository;

    /**
     * @var \Candela\Blog\Model\ResourceModel\Categories\CollectionFactory
     */
    private $collectionFactory;

    public function __construct(
        Action\Context $context,
        Filter $filter,
        LoggerInterface $logger,
        \Candela\Blog\Model\Repository\CategoriesRepository $repository,
        \Candela\Blog\Model\ResourceModel\Categories\CollectionFactory $collectionFactory
    ) {
        parent::__construct($context, $filter, $logger);
        $this->repository = $repository;
        $this->collectionFactory = $collectionFactory;
    }

    /**
     * @return \Candela\Blog\Model\ResourceModel\Categories\Collection
     */
    public function getCollection()
    {
        return $this->collectionFactory->create();
    }

    /**
     * @return \Candela\Blog\Model\Repository\CategoriesRepository
     */
    public function getRepository()
    {
        return $this->repository;
    }
}
