<?php
namespace Candela\Acumatica\Console\Command\SyncCustomers;

/**
 * Interceptor class for @see \Candela\Acumatica\Console\Command\SyncCustomers
 */
class Interceptor extends \Candela\Acumatica\Console\Command\SyncCustomers implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Candela\Acumatica\Service\Console\SyncCustomers $syncCustomers, $name = null)
    {
        $this->___init();
        parent::__construct($syncCustomers, $name);
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
