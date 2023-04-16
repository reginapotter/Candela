<?php
namespace Candela\Blog\Controller\Index\ViewList;

/**
 * Interceptor class for @see \Candela\Blog\Controller\Index\ViewList
 */
class Interceptor extends \Candela\Blog\Controller\Index\ViewList implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\RequestInterface $request, \Magento\Framework\Controller\Result\JsonFactory $resultFactory, \Magento\Framework\Data\Form\FormKey\Validator $validator, \Magento\Framework\App\ResponseInterface $response, \Candela\Blog\Model\ResourceModel\View\GetPostsViewsCountByPostsIds $getPostsViewsCountByPostsIds, \Candela\Blog\Helper\Settings $settings)
    {
        $this->___init();
        parent::__construct($request, $resultFactory, $validator, $response, $getPostsViewsCountByPostsIds, $settings);
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
