<?php
namespace Candela\Blog\Controller\Index\View;

/**
 * Interceptor class for @see \Candela\Blog\Controller\Index\View
 */
class Interceptor extends \Candela\Blog\Controller\Index\View implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\RequestInterface $request, \Magento\Framework\Controller\Result\JsonFactory $resultFactory, \Magento\Framework\Data\Form\FormKey\Validator $validator, \Magento\Framework\App\ResponseInterface $response, \Candela\Blog\Api\ViewRepositoryInterface $viewRepository)
    {
        $this->___init();
        parent::__construct($request, $resultFactory, $validator, $response, $viewRepository);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }
}
