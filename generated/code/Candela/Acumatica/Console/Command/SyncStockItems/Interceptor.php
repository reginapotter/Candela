<?php
namespace Candela\Acumatica\Console\Command\SyncStockItems;

/**
 * Interceptor class for @see \Candela\Acumatica\Console\Command\SyncStockItems
 */
class Interceptor extends \Candela\Acumatica\Console\Command\SyncStockItems implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\State $state, \Candela\Acumatica\Cron\StockItem $stockItem, $name = null)
    {
        $this->___init();
        parent::__construct($state, $stockItem, $name);
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
