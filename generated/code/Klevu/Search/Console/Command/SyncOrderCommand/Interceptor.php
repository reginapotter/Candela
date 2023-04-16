<?php
namespace Klevu\Search\Console\Command\SyncOrderCommand;

/**
 * Interceptor class for @see \Klevu\Search\Console\Command\SyncOrderCommand
 */
class Interceptor extends \Klevu\Search\Console\Command\SyncOrderCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\State $appState, \Magento\Framework\App\Filesystem\DirectoryList $directoryList, \Psr\Log\LoggerInterface $logger, \Klevu\Search\Model\Order\SyncFactory $orderSyncModelFactory, $klevuLoggerFQCN = null, $name = null)
    {
        $this->___init();
        parent::__construct($appState, $directoryList, $logger, $orderSyncModelFactory, $klevuLoggerFQCN, $name);
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
