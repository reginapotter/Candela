<?php


namespace Candela\Blog\Block\Adminhtml\Posts\Edit;

use Candela\Blog\Api\ViewRepositoryInterface;
use Candela\Blog\Api\VoteRepositoryInterface;
use Magento\Backend\Block\Template;
use Magento\Backend\Block\Template\Context;

class View extends Template
{
    /**
     * @var ViewRepositoryInterface
     */
    private $viewRepository;

    /**
     * @var string
     */
    protected $_template = 'Candela_Blog::posts/edit/view.phtml';

    /**
     * @var null|array
     */
    private $votes = null;

    /**
     * @var VoteRepositoryInterface
     */
    private $voteRepository;

    public function __construct(
        Context $context,
        ViewRepositoryInterface $viewRepository,
        VoteRepositoryInterface $voteRepository,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->viewRepository = $viewRepository;
        $this->voteRepository = $voteRepository;
    }

    /**
     * @return int
     */
    public function getViews()
    {
        return $this->viewRepository->getViewCountByPostId($this->getRequest()->getParam('id'));
    }

    /**
     * @return int
     */
    public function getLikes()
    {
        return $this->getVotes('plus');
    }

    /**
     * @param string $type
     * @return int
     */
    private function getVotes($type)
    {
        if ($this->votes === null) {
            $this->votes = $this->voteRepository->getVotesCount($this->getRequest()->getParam('id'));
        }

        return $this->votes[$type];
    }
}
