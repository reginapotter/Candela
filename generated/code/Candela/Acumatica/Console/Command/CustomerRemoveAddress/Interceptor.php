<?php
namespace Candela\Acumatica\Console\Command\CustomerRemoveAddress;

/**
 * Interceptor class for @see \Candela\Acumatica\Console\Command\CustomerRemoveAddress
 */
class Interceptor extends \Candela\Acumatica\Console\Command\CustomerRemoveAddress implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\State $state, \Candela\Acumatica\Service\HandlerProcessor\CustomerLocation $customerLocation, \Candela\Acumatica\Service\SubmissionRepository $submissionRepository, \Magento\Framework\Serialize\Serializer\Json $jsonSerializer, $name = null)
    {
        $this->___init();
        parent::__construct($state, $customerLocation, $submissionRepository, $jsonSerializer, $name);
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
