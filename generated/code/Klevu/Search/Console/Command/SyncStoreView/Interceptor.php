<?php
namespace Klevu\Search\Console\Command\SyncStoreView;

/**
 * Interceptor class for @see \Klevu\Search\Console\Command\SyncStoreView
 */
class Interceptor extends \Klevu\Search\Console\Command\SyncStoreView implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\State $appState, \Magento\Store\Model\StoreManagerInterface $storeInterface, \Magento\Framework\App\Filesystem\DirectoryList $directoryList, \Psr\Log\LoggerInterface $logger, ?\Klevu\Logger\Api\StoreScopeResolverInterface $storeScopeResolver = null, $klevuLoggerFQCN = null)
    {
        $this->___init();
        parent::__construct($appState, $storeInterface, $directoryList, $logger, $storeScopeResolver, $klevuLoggerFQCN);
    }

    /**
     * {@inheritdoc}
     */
    public function run(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'run');
        return $pluginInfo ? $this->___callPlugins('run', func_get_args(), $pluginInfo) : parent::run($input, $output);
    }
}
