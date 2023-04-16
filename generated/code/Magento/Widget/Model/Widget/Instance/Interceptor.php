<?php
namespace Magento\Widget\Model\Widget\Instance;

/**
 * Interceptor class for @see \Magento\Widget\Model\Widget\Instance
 */
class Interceptor extends \Magento\Widget\Model\Widget\Instance implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Escaper $escaper, \Magento\Framework\View\FileSystem $viewFileSystem, \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList, \Magento\Catalog\Model\Product\Type $productType, \Magento\Widget\Model\Config\Reader $reader, \Magento\Widget\Model\Widget $widgetModel, \Magento\Widget\Model\NamespaceResolver $namespaceResolver, \Magento\Framework\Math\Random $mathRandom, \Magento\Framework\Filesystem $filesystem, \Magento\Widget\Helper\Conditions $conditionsHelper, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $relatedCacheTypes = [], array $data = [], ?\Magento\Framework\Serialize\Serializer\Json $serializer = null, ?\Magento\Framework\View\Model\Layout\Update\ValidatorFactory $xmlValidatorFactory = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $escaper, $viewFileSystem, $cacheTypeList, $productType, $reader, $widgetModel, $namespaceResolver, $mathRandom, $filesystem, $conditionsHelper, $resource, $resourceCollection, $relatedCacheTypes, $data, $serializer, $xmlValidatorFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function beforeSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'beforeSave');
        return $pluginInfo ? $this->___callPlugins('beforeSave', func_get_args(), $pluginInfo) : parent::beforeSave();
    }
}
