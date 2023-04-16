<?php


namespace Candela\Blog\Controller\Adminhtml\Authors;

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
    const ADMIN_RESOURCE = 'Candela_Blog::authors';

    /**
     * @var \Candela\Blog\Api\AuthorRepositoryInterface
     */
    private $repository;

    public function __construct(
        Action\Context $context,
        Filter $filter,
        LoggerInterface $logger,
        \Candela\Blog\Api\AuthorRepositoryInterface $repository
    ) {
        parent::__construct($context, $filter, $logger);
        $this->repository = $repository;
    }

    /**
     * @return \Candela\Blog\Api\AuthorRepositoryInterface
     */
    public function getRepository()
    {
        return $this->repository;
    }

    /**
     * @return \Candela\Blog\Model\ResourceModel\Author\Collection
     */
    public function getCollection()
    {
        return $this->repository->getAuthorCollection();
    }
}
