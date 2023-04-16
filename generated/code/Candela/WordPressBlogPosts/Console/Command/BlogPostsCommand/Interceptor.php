<?php
namespace Candela\WordPressBlogPosts\Console\Command\BlogPostsCommand;

/**
 * Interceptor class for @see \Candela\WordPressBlogPosts\Console\Command\BlogPostsCommand
 */
class Interceptor extends \Candela\WordPressBlogPosts\Console\Command\BlogPostsCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\State $appState, \Candela\WordPressBlogPosts\Cron\FetchBlogPosts $fetchBlogPosts, \Candela\WordPressBlogPosts\Cron\ClearOldPosts $clearOldPosts)
    {
        $this->___init();
        parent::__construct($appState, $fetchBlogPosts, $clearOldPosts);
    }

    /**
     * {@inheritdoc}
     */
    public function run(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'run');
        return $pluginInfo ? $this->___callPlugins('run', func_get_args(), $pluginInfo) : parent::run($input, $output);
    }
}
