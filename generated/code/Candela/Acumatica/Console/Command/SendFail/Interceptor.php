<?php
namespace Candela\Acumatica\Console\Command\SendFail;

/**
 * Interceptor class for @see \Candela\Acumatica\Console\Command\SendFail
 */
class Interceptor extends \Candela\Acumatica\Console\Command\SendFail implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\State $state, \Candela\Acumatica\Cron\ResendFailed $sendFail, $name = null)
    {
        $this->___init();
        parent::__construct($state, $sendFail, $name);
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
