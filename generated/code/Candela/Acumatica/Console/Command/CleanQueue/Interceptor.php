<?php
namespace Candela\Acumatica\Console\Command\CleanQueue;

/**
 * Interceptor class for @see \Candela\Acumatica\Console\Command\CleanQueue
 */
class Interceptor extends \Candela\Acumatica\Console\Command\CleanQueue implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Store\Model\StoreManagerInterface $storeManager, \Candela\Acumatica\Model\Config\General $configGeneral, \Candela\Acumatica\Api\QueueInterface $queue, \Psr\Log\LoggerInterface $logger, ?string $name = null)
    {
        $this->___init();
        parent::__construct($storeManager, $configGeneral, $queue, $logger, $name);
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
