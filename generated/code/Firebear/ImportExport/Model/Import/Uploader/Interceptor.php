<?php
namespace Firebear\ImportExport\Model\Import\Uploader;

/**
 * Interceptor class for @see \Firebear\ImportExport\Model\Import\Uploader
 */
class Interceptor extends \Firebear\ImportExport\Model\Import\Uploader implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\MediaStorage\Helper\File\Storage\Database $coreFileStorageDb, \Magento\MediaStorage\Helper\File\Storage $coreFileStorage, \Magento\Framework\Image\AdapterFactory $imageFactory, \Magento\MediaStorage\Model\File\Validator\NotProtectedExtension $validator, \Magento\Framework\Filesystem $filesystem, \Magento\Framework\Filesystem\File\ReadFactory $readFactory, \Firebear\ImportExport\Model\Filesystem\File\ReadFactory $fireReadFactory, \Firebear\ImportExport\Helper\MediaHelper $mediaHelper, \Magento\Framework\HTTP\Client\Curl $curl, $filePath = null)
    {
        $this->___init();
        parent::__construct($coreFileStorageDb, $coreFileStorage, $imageFactory, $validator, $filesystem, $readFactory, $fireReadFactory, $mediaHelper, $curl, $filePath);
    }

    /**
     * {@inheritdoc}
     */
    public function save($destinationFolder, $newFileName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($destinationFolder, $newFileName);
    }
}
