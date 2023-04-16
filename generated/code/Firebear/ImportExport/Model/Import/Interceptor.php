<?php
namespace Firebear\ImportExport\Model\Import;

/**
 * Interceptor class for @see \Firebear\ImportExport\Model\Import
 */
class Interceptor extends \Firebear\ImportExport\Model\Import implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Firebear\ImportExport\Model\Source\ConfigInterface $config, \Firebear\ImportExport\Helper\Data $helper, \Firebear\ImportExport\Helper\Additional $additional, \Magento\Framework\Stdlib\DateTime\TimezoneInterface $timezone, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Filesystem $filesystem, \Magento\ImportExport\Helper\Data $importExportData, \Magento\Framework\App\Config\ScopeConfigInterface $coreConfig, \Firebear\ImportExport\Model\Source\Import\Config $importConfig, \Magento\ImportExport\Model\Import\Entity\Factory $entityFactory, \Magento\ImportExport\Model\Export\Adapter\CsvFactory $csvFactory, \Magento\Framework\HTTP\Adapter\FileTransferFactory $httpFactory, \Magento\MediaStorage\Model\File\UploaderFactory $uploaderFactory, \Magento\ImportExport\Model\Source\Import\Behavior\Factory $behaviorFactory, \Magento\Framework\Indexer\IndexerRegistry $indexerRegistry, \Magento\ImportExport\Model\History $importHistoryModel, \Magento\Framework\Stdlib\DateTime\DateTime $localeDate, \Firebear\ImportExport\Model\Source\Factory $factory, \Firebear\ImportExport\Model\Source\Platform\Config $configPlatforms, \Magento\Framework\FilesystemFactory $filesystemFactory, \Firebear\ImportExport\Model\ResourceModel\Import\Data $importData, \Magento\Framework\Filesystem\Io\File $file, \Magento\Framework\Filesystem\File\WriteFactory $fileWrite, \Firebear\ImportExport\Model\Output\Xslt $modelOutput, \Firebear\ImportExport\Model\Source\Type\File\Config $typeConfig, \Symfony\Component\Console\Output\ConsoleOutput $output, array $data = [])
    {
        $this->___init();
        parent::__construct($config, $helper, $additional, $timezone, $logger, $filesystem, $importExportData, $coreConfig, $importConfig, $entityFactory, $csvFactory, $httpFactory, $uploaderFactory, $behaviorFactory, $indexerRegistry, $importHistoryModel, $localeDate, $factory, $configPlatforms, $filesystemFactory, $importData, $file, $fileWrite, $modelOutput, $typeConfig, $output, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function importSource()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'importSource');
        return $pluginInfo ? $this->___callPlugins('importSource', func_get_args(), $pluginInfo) : parent::importSource();
    }
}
