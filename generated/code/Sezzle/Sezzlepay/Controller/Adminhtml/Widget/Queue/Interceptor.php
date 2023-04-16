<?php
namespace Sezzle\Sezzlepay\Controller\Adminhtml\Widget\Queue;

/**
 * Interceptor class for @see \Sezzle\Sezzlepay\Controller\Adminhtml\Widget\Queue
 */
class Interceptor extends \Sezzle\Sezzlepay\Controller\Adminhtml\Widget\Queue implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Data\Form\FormKey\Validator $formKeyValidator, \Magento\Framework\Controller\Result\RawFactory $rawResultFactory, \Sezzle\Sezzlepay\Api\V2Interface $v2, \Magento\Framework\App\Config\Storage\WriterInterface $configWriter, \Magento\Framework\Stdlib\DateTime\DateTime $dateTime, \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList, \Magento\Framework\App\Cache\Frontend\Pool $cacheFrontendPool)
    {
        $this->___init();
        parent::__construct($context, $formKeyValidator, $rawResultFactory, $v2, $configWriter, $dateTime, $cacheTypeList, $cacheFrontendPool);
    }

    /**
     * {@inheritdoc}
     */
    public function execute() : \Magento\Framework\Controller\Result\Raw
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
