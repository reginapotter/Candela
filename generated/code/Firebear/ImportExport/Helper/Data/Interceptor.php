<?php
namespace Firebear\ImportExport\Helper\Data;

/**
 * Interceptor class for @see \Firebear\ImportExport\Helper\Data
 */
class Interceptor extends \Firebear\ImportExport\Helper\Data implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Helper\Context $context, \Firebear\ImportExport\Model\Source\Factory $sourceFactory, \Firebear\ImportExport\Model\Source\Config $configSource, \Firebear\ImportExport\Logger\Logger $logger, \Firebear\ImportExport\Api\HistoryRepositoryInterface $historyRepository, \Firebear\ImportExport\Api\Export\HistoryRepositoryInterface $historyExRepository, \Firebear\ImportExport\Model\Import\HistoryFactory $historyFactory, \Firebear\ImportExport\Api\Export\History\CreateInterface $exportHistoryCreate, \Firebear\ImportExport\Model\Job\Processor $processor, \Firebear\ImportExport\Model\ExportJob\Processor $exProcessor, \Magento\Framework\Stdlib\DateTime\TimezoneInterface $timezone, \Magento\Framework\Filesystem $filesystem, \Firebear\ImportExport\Model\ResourceModel\Import\DataFactory $dataFactory, \Firebear\ImportExport\Model\Source\Platform\Config $configPlatforms, \Firebear\ImportExport\Model\Source\Factory $factory, \Magento\Framework\Serialize\SerializerInterface $serializer, \Firebear\ImportExport\Model\Email\Sender $sender)
    {
        $this->___init();
        parent::__construct($context, $sourceFactory, $configSource, $logger, $historyRepository, $historyExRepository, $historyFactory, $exportHistoryCreate, $processor, $exProcessor, $timezone, $filesystem, $dataFactory, $configPlatforms, $factory, $serializer, $sender);
    }

    /**
     * {@inheritdoc}
     */
    public function beforeRun($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'beforeRun');
        return $pluginInfo ? $this->___callPlugins('beforeRun', func_get_args(), $pluginInfo) : parent::beforeRun($id);
    }
}
