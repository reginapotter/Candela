<?php
namespace Klevu\Search\Console\Command\ImageGeneration;

/**
 * Interceptor class for @see \Klevu\Search\Console\Command\ImageGeneration
 */
class Interceptor extends \Klevu\Search\Console\Command\ImageGeneration implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\State $appState, \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $magentoCollectionFactory, \Klevu\Search\Model\Context $klevuContext, \Magento\Framework\App\Filesystem\DirectoryList $directoryList, \Psr\Log\LoggerInterface $logger, \Symfony\Component\Console\Helper\DescriptorHelper $descriptorHelper)
    {
        $this->___init();
        parent::__construct($appState, $magentoCollectionFactory, $klevuContext, $directoryList, $logger, $descriptorHelper);
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
