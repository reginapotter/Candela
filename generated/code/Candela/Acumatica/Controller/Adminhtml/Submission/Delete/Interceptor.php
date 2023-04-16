<?php
namespace Candela\Acumatica\Controller\Adminhtml\Submission\Delete;

/**
 * Interceptor class for @see \Candela\Acumatica\Controller\Adminhtml\Submission\Delete
 */
class Interceptor extends \Candela\Acumatica\Controller\Adminhtml\Submission\Delete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Candela\Acumatica\Api\SubmissionRepositoryInterface $submissionRepository)
    {
        $this->___init();
        parent::__construct($context, $submissionRepository);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
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
