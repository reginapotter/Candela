<?php
/**
 *
 */
namespace Candela\WordPressBlogPosts\Console\Command;

use Magento\Framework\App\Area;
use Magento\Framework\App\State;
use Candela\WordPressBlogPosts\Cron\ClearOldPosts;
use Candela\WordPressBlogPosts\Cron\FetchBlogPosts;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class BlogPostsCommand extends Command
{
    const CLEAR_POSTS = 'clear';
    const FETCH_POSTS = 'fetch';
    const POSTS_ACTION_COMMAND = 'Candela:blog_posts';
    const M_COMMAND = 'bin/magento';
    const DESCRIPTION_FETCH = 'Fetch 4 firsts post from info site.';
    const DESCRIPTION_CLEAR = 'Remove old posts (keep only last 4 rows).';
    /**
     * @var FetchBlogPosts
     */
    protected $fetchBlogPosts;
    /**
     * @var State
     */
    protected $appState;
    /**
     * @var ClearOldPosts
     */
    protected $clearOldPosts;

    /**
     * ClearLogCommand constructor.
     * @param State $appState
     * @param FetchBlogPosts $fetchBlogPosts
     * @param ClearOldPosts $clearOldPosts
     */
    public function __construct(
        State $appState,
        FetchBlogPosts $fetchBlogPosts,
        ClearOldPosts $clearOldPosts
    ) {
        $this->appState = $appState;
        $this->fetchBlogPosts = $fetchBlogPosts;
        $this->clearOldPosts = $clearOldPosts;
        parent::__construct();
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->setName(self::POSTS_ACTION_COMMAND)
            ->setDescription(self::DESCRIPTION_FETCH . ' ' . self::DESCRIPTION_CLEAR);

        $this->addOption(
            self::FETCH_POSTS,
            null,
            null,
            self::DESCRIPTION_FETCH
        );
        $this->addOption(
            self::CLEAR_POSTS,
            null,
            null,
            self::DESCRIPTION_CLEAR
        );

        parent::configure();
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        try {
            $this->appState->getAreaCode();
        } catch (\Magento\Framework\Exception\LocalizedException $e) {
            // if area code is not set then magento generate exception "LocalizedException"
            $this->appState->setAreaCode(Area::AREA_GLOBAL);
        }

        if ($input->getOption(self::FETCH_POSTS)) {
            $output->writeln('Fetch blog posts started...');
            $blogPosts = $this->fetchBlogPosts->execute();
            $output->writeln($blogPosts);
            $output->writeln('Fetch blog posts finished.');
        } elseif ($input->getOption(self::CLEAR_POSTS)) {
            $output->writeln('Clear old blog posts started...');
            $this->clearOldPosts->execute();
            $output->writeln('Clear old blog posts finished.');
        } else {
            $output->writeln(self::M_COMMAND . ' ' . self::POSTS_ACTION_COMMAND
                . ' --' . self::FETCH_POSTS . '   ' . self::DESCRIPTION_FETCH . PHP_EOL);
            $output->writeln(self::M_COMMAND . ' ' . self::POSTS_ACTION_COMMAND
                . ' --' . self::CLEAR_POSTS . '   ' . self::DESCRIPTION_CLEAR . PHP_EOL);
        }
    }
}
