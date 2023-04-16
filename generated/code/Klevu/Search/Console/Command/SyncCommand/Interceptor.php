<?php
namespace Klevu\Search\Console\Command\SyncCommand;

/**
 * Interceptor class for @see \Klevu\Search\Console\Command\SyncCommand
 */
class Interceptor extends \Klevu\Search\Console\Command\SyncCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\State $appState, \Magento\Store\Model\StoreManagerInterface $storeInterface, \Magento\Framework\App\Filesystem\DirectoryList $directoryList, \Magento\Framework\Shell $shell, \Symfony\Component\Process\PhpExecutableFinder $phpExecutableFinderFactory, \Psr\Log\LoggerInterface $logger, ?\Klevu\Logger\Api\StoreScopeResolverInterface $storeScopeResolver = null, $klevuLoggerFQCN = null)
    {
        $this->___init();
        parent::__construct($appState, $storeInterface, $directoryList, $shell, $phpExecutableFinderFactory, $logger, $storeScopeResolver, $klevuLoggerFQCN);
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
