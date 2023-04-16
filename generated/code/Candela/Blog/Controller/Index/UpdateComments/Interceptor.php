<?php
namespace Candela\Blog\Controller\Index\UpdateComments;

/**
 * Interceptor class for @see \Candela\Blog\Controller\Index\UpdateComments
 */
class Interceptor extends \Candela\Blog\Controller\Index\UpdateComments implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Candela\Blog\Api\PostRepositoryInterface $postRepository, \Magento\Framework\Data\Form\FormKey\Validator $formKeyValidator, \Candela\Blog\Model\Blog\Registry $registry, \Magento\Framework\View\DesignLoader $designLoader, \Magento\Framework\View\LayoutFactory $layoutFactory, \Magento\Framework\Controller\Result\JsonFactory $resultFactory, \Magento\Framework\App\RequestInterface $request, \Magento\Customer\Model\SessionFactory $sessionFactory)
    {
        $this->___init();
        parent::__construct($postRepository, $formKeyValidator, $registry, $designLoader, $layoutFactory, $resultFactory, $request, $sessionFactory);
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
