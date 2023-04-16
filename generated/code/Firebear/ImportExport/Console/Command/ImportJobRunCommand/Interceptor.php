<?php
namespace Firebear\ImportExport\Console\Command\ImportJobRunCommand;

/**
 * Interceptor class for @see \Firebear\ImportExport\Console\Command\ImportJobRunCommand
 */
class Interceptor extends \Firebear\ImportExport\Console\Command\ImportJobRunCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Firebear\ImportExport\Logger\Logger $logger, \Magento\Framework\App\State $state, \Firebear\ImportExport\Api\Import\RunByIdsInterface $runByIds)
    {
        $this->___init();
        parent::__construct($logger, $state, $runByIds);
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
