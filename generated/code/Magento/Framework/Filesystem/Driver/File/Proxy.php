<?php
namespace Magento\Framework\Filesystem\Driver\File;

/**
 * Proxy class for @see \Magento\Framework\Filesystem\Driver\File
 */
class Proxy extends \Magento\Framework\Filesystem\Driver\File implements \Magento\Framework\ObjectManager\NoninterceptableInterface
{
    /**
     * Object Manager instance
     *
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager = null;

    /**
     * Proxied instance name
     *
     * @var string
     */
    protected $_instanceName = null;

    /**
     * Proxied instance
     *
     * @var \Magento\Framework\Filesystem\Driver\File
     */
    protected $_subject = null;

    /**
     * Instance shareability flag
     *
     * @var bool
     */
    protected $_isShared = null;

    /**
     * Proxy constructor
     *
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     * @param string $instanceName
     * @param bool $shared
     */
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\Framework\\Filesystem\\Driver\\File', $shared = true)
    {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
        $this->_isShared = $shared;
    }

    /**
     * @return array
     */
    public function __sleep()
    {
        return ['_subject', '_isShared', '_instanceName'];
    }

    /**
     * Retrieve ObjectManager from global scope
     */
    public function __wakeup()
    {
        $this->_objectManager = \Magento\Framework\App\ObjectManager::getInstance();
    }

    /**
     * Clone proxied instance
     */
    public function __clone()
    {
        $this->_subject = clone $this->_getSubject();
    }

    /**
     * Get proxied instance
     *
     * @return \Magento\Framework\Filesystem\Driver\File
     */
    protected function _getSubject()
    {
        if (!$this->_subject) {
            $this->_subject = true === $this->_isShared
                ? $this->_objectManager->get($this->_instanceName)
                : $this->_objectManager->create($this->_instanceName);
        }
        return $this->_subject;
    }

    /**
     * {@inheritdoc}
     */
    public function isExists($path)
    {
        return $this->_getSubject()->isExists($path);
    }

    /**
     * {@inheritdoc}
     */
    public function stat($path)
    {
        return $this->_getSubject()->stat($path);
    }

    /**
     * {@inheritdoc}
     */
    public function isReadable($path)
    {
        return $this->_getSubject()->isReadable($path);
    }

    /**
     * {@inheritdoc}
     */
    public function isFile($path)
    {
        return $this->_getSubject()->isFile($path);
    }

    /**
     * {@inheritdoc}
     */
    public function isDirectory($path)
    {
        return $this->_getSubject()->isDirectory($path);
    }

    /**
     * {@inheritdoc}
     */
    public function fileGetContents($path, $flag = null, $context = null)
    {
        return $this->_getSubject()->fileGetContents($path, $flag, $context);
    }

    /**
     * {@inheritdoc}
     */
    public function isWritable($path)
    {
        return $this->_getSubject()->isWritable($path);
    }

    /**
     * {@inheritdoc}
     */
    public function getParentDirectory($path)
    {
        return $this->_getSubject()->getParentDirectory($path);
    }

    /**
     * {@inheritdoc}
     */
    public function createDirectory($path, $permissions = 511)
    {
        return $this->_getSubject()->createDirectory($path, $permissions);
    }

    /**
     * {@inheritdoc}
     */
    public function readDirectory($path)
    {
        return $this->_getSubject()->readDirectory($path);
    }

    /**
     * {@inheritdoc}
     */
    public function search($pattern, $path)
    {
        return $this->_getSubject()->search($pattern, $path);
    }

    /**
     * {@inheritdoc}
     */
    public function rename($oldPath, $newPath, ?\Magento\Framework\Filesystem\DriverInterface $targetDriver = null)
    {
        return $this->_getSubject()->rename($oldPath, $newPath, $targetDriver);
    }

    /**
     * {@inheritdoc}
     */
    public function copy($source, $destination, ?\Magento\Framework\Filesystem\DriverInterface $targetDriver = null)
    {
        return $this->_getSubject()->copy($source, $destination, $targetDriver);
    }

    /**
     * {@inheritdoc}
     */
    public function symlink($source, $destination, ?\Magento\Framework\Filesystem\DriverInterface $targetDriver = null)
    {
        return $this->_getSubject()->symlink($source, $destination, $targetDriver);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteFile($path)
    {
        return $this->_getSubject()->deleteFile($path);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteDirectory($path)
    {
        return $this->_getSubject()->deleteDirectory($path);
    }

    /**
     * {@inheritdoc}
     */
    public function changePermissions($path, $permissions)
    {
        return $this->_getSubject()->changePermissions($path, $permissions);
    }

    /**
     * {@inheritdoc}
     */
    public function changePermissionsRecursively($path, $dirPermissions, $filePermissions)
    {
        return $this->_getSubject()->changePermissionsRecursively($path, $dirPermissions, $filePermissions);
    }

    /**
     * {@inheritdoc}
     */
    public function touch($path, $modificationTime = null)
    {
        return $this->_getSubject()->touch($path, $modificationTime);
    }

    /**
     * {@inheritdoc}
     */
    public function filePutContents($path, $content, $mode = null)
    {
        return $this->_getSubject()->filePutContents($path, $content, $mode);
    }

    /**
     * {@inheritdoc}
     */
    public function fileOpen($path, $mode)
    {
        return $this->_getSubject()->fileOpen($path, $mode);
    }

    /**
     * {@inheritdoc}
     */
    public function fileReadLine($resource, $length, $ending = null)
    {
        return $this->_getSubject()->fileReadLine($resource, $length, $ending);
    }

    /**
     * {@inheritdoc}
     */
    public function fileRead($resource, $length)
    {
        return $this->_getSubject()->fileRead($resource, $length);
    }

    /**
     * {@inheritdoc}
     */
    public function fileGetCsv($resource, $length = 0, $delimiter = ',', $enclosure = '"', $escape = ' ')
    {
        return $this->_getSubject()->fileGetCsv($resource, $length, $delimiter, $enclosure, $escape);
    }

    /**
     * {@inheritdoc}
     */
    public function fileTell($resource)
    {
        return $this->_getSubject()->fileTell($resource);
    }

    /**
     * {@inheritdoc}
     */
    public function fileSeek($resource, $offset, $whence = 0)
    {
        return $this->_getSubject()->fileSeek($resource, $offset, $whence);
    }

    /**
     * {@inheritdoc}
     */
    public function endOfFile($resource)
    {
        return $this->_getSubject()->endOfFile($resource);
    }

    /**
     * {@inheritdoc}
     */
    public function fileClose($resource)
    {
        return $this->_getSubject()->fileClose($resource);
    }

    /**
     * {@inheritdoc}
     */
    public function fileWrite($resource, $data)
    {
        return $this->_getSubject()->fileWrite($resource, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function filePutCsv($resource, array $data, $delimiter = ',', $enclosure = '"')
    {
        return $this->_getSubject()->filePutCsv($resource, $data, $delimiter, $enclosure);
    }

    /**
     * {@inheritdoc}
     */
    public function fileFlush($resource)
    {
        return $this->_getSubject()->fileFlush($resource);
    }

    /**
     * {@inheritdoc}
     */
    public function fileLock($resource, $lockMode = 2)
    {
        return $this->_getSubject()->fileLock($resource, $lockMode);
    }

    /**
     * {@inheritdoc}
     */
    public function fileUnlock($resource)
    {
        return $this->_getSubject()->fileUnlock($resource);
    }

    /**
     * {@inheritdoc}
     */
    public function getAbsolutePath($basePath, $path, $scheme = null)
    {
        return $this->_getSubject()->getAbsolutePath($basePath, $path, $scheme);
    }

    /**
     * {@inheritdoc}
     */
    public function getRelativePath($basePath, $path = null)
    {
        return $this->_getSubject()->getRelativePath($basePath, $path);
    }

    /**
     * {@inheritdoc}
     */
    public function readDirectoryRecursively($path = null)
    {
        return $this->_getSubject()->readDirectoryRecursively($path);
    }

    /**
     * {@inheritdoc}
     */
    public function getRealPath($path)
    {
        return $this->_getSubject()->getRealPath($path);
    }

    /**
     * {@inheritdoc}
     */
    public function getRealPathSafety($path)
    {
        return $this->_getSubject()->getRealPathSafety($path);
    }
}
