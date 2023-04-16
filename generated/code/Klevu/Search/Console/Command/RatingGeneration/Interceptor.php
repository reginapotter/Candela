<?php
namespace Klevu\Search\Console\Command\RatingGeneration;

/**
 * Interceptor class for @see \Klevu\Search\Console\Command\RatingGeneration
 */
class Interceptor extends \Klevu\Search\Console\Command\RatingGeneration implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\State $appState, \Magento\Store\Model\StoreManagerInterface $storeInterface, \Magento\Framework\App\Filesystem\DirectoryList $directoryList, \Psr\Log\LoggerInterface $logger, \Klevu\Search\Model\Product\MagentoProductActionsInterface $magentoProductActionsInterface, \Symfony\Component\Console\Helper\DescriptorHelper $descriptorHelper, ?\Magento\Framework\Filesystem\Driver\File $fileDriver = null)
    {
        $this->___init();
        parent::__construct($appState, $storeInterface, $directoryList, $logger, $magentoProductActionsInterface, $descriptorHelper, $fileDriver);
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
