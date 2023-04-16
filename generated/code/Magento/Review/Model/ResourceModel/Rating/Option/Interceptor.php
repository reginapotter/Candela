<?php
namespace Magento\Review\Model\ResourceModel\Rating\Option;

/**
 * Interceptor class for @see \Magento\Review\Model\ResourceModel\Rating\Option
 */
class Interceptor extends \Magento\Review\Model\ResourceModel\Rating\Option implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\ResourceModel\Db\Context $context, \Magento\Customer\Model\Session $customerSession, \Magento\Review\Model\Rating\Option\VoteFactory $ratingOptionVoteF, \Magento\Framework\HTTP\PhpEnvironment\RemoteAddress $remoteAddress, $connectionName = null)
    {
        $this->___init();
        parent::__construct($context, $customerSession, $ratingOptionVoteF, $remoteAddress, $connectionName);
    }

    /**
     * {@inheritdoc}
     */
    public function aggregateEntityByRatingId($ratingId, $entityPkValue)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'aggregateEntityByRatingId');
        return $pluginInfo ? $this->___callPlugins('aggregateEntityByRatingId', func_get_args(), $pluginInfo) : parent::aggregateEntityByRatingId($ratingId, $entityPkValue);
    }
}
