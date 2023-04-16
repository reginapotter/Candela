<?php
namespace Firebear\ImportExport\Console\Command\ExportJobRunCommand;

/**
 * Interceptor class for @see \Firebear\ImportExport\Console\Command\ExportJobRunCommand
 */
class Interceptor extends \Firebear\ImportExport\Console\Command\ExportJobRunCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Firebear\ImportExport\Model\ExportJob $job, \Firebear\ImportExport\Model\ExportJob\Processor $importProcessor, \Firebear\ImportExport\Api\ExportJobRepositoryInterface $repository, \Firebear\ImportExport\Model\ExportJobFactory $factory, \Magento\Framework\App\State $state, \Firebear\ImportExport\Logger\Logger $logger, \Firebear\ImportExport\Helper\Data $helper, \Firebear\ImportExport\Model\Email\Sender $sender)
    {
        $this->___init();
        parent::__construct($job, $importProcessor, $repository, $factory, $state, $logger, $helper, $sender);
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
