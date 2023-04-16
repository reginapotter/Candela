<?php
namespace Magento\Elasticsearch\SearchAdapter\DocumentFactory;

/**
 * Interceptor class for @see \Magento\Elasticsearch\SearchAdapter\DocumentFactory
 */
class Interceptor extends \Magento\Elasticsearch\SearchAdapter\DocumentFactory implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Search\EntityMetadata $entityMetadata)
    {
        $this->___init();
        parent::__construct($entityMetadata);
    }

    /**
     * {@inheritdoc}
     */
    public function create($rawDocument)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'create');
        return $pluginInfo ? $this->___callPlugins('create', func_get_args(), $pluginInfo) : parent::create($rawDocument);
    }
}
