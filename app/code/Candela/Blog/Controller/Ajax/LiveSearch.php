<?php

declare(strict_types=1);



namespace Candela\Blog\Controller\Ajax;

use Candela\Blog\Block\Content\Search;
use Candela\Blog\Model\LiveSearch\LiveSearchPool;
use Magento\Framework\App\Action\HttpPostActionInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;
use Psr\Log\LoggerInterface;

class LiveSearch implements HttpPostActionInterface
{
    public const SEARCH_PARAM = 'query';

    /**
     * @var ResultFactory
     */
    private $resultFactory;

    /**
     * @var LiveSearchPool
     */
    private $liveSearchPool;

    /**
     * @var RequestInterface
     */
    private $request;

    /**
     * @var LoggerInterface
     */
    private $logger;

    public function __construct(
        ResultFactory $resultFactory,
        LiveSearchPool $liveSearchPool,
        RequestInterface $request,
        LoggerInterface $logger
    ) {
        $this->resultFactory = $resultFactory;
        $this->liveSearchPool = $liveSearchPool;
        $this->request = $request;
        $this->logger = $logger;
    }

    public function execute(): ResultInterface
    {
        $resultJson = $this->resultFactory->create(ResultFactory::TYPE_JSON);
        $replaceSymbols = str_split(Search::SPECIAL_CHARACTERS);
        $query = str_replace($replaceSymbols, '', trim($this->request->getParam(self::SEARCH_PARAM)));
        if (!$query) {
            $resultJson->setData(
                [
                    'message'
                    => __('Your live search returned no results.')
                        . ' '
                        .  __('Please click enter to see if there are any advanced search results')
                ]
            );

            return $resultJson;
        }

        try {
            $searchResults = $this->liveSearchPool->search($query);
            if (!$searchResults) {
                $resultJson->setData(
                    [
                        'message'
                        => __('Your live search returned no results.')
                            . ' '
                            .  __('Please click enter to see if there are any advanced search results')
                    ]
                );

                return $resultJson;
            }

            $resultJson->setData($searchResults);
        } catch (\Exception $e) {
            $this->logger->critical($e);
            $resultJson->setData([]);
        }

        return $resultJson;
    }
}
