<?php
/**
 *
 */
namespace Candela\WordPressBlogPosts\Api\Config;

interface ConfigInterface
{
    const EXTENSION_MARKER = 'Candela_blog_post';
    const USER_AGENT = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 '
    . '(KHTML, like Gecko) Chrome/87.0.4280.66 Safari/537.36 '
    . self::EXTENSION_MARKER;
    const IS_ENABLED = 'candela_blog_posts/general/is_enabled';
    const PRODUCTION_INFO_SERVER_URL = 'candela_blog_posts/general/production_info_server_url';
    const DEV_INFO_SERVER_HTACCESS_AUTH = 'candela_blog_posts/general/dev_info_server_htaccess_auth';
    const BLOG_API_PATH = 'candela_blog_posts/general/blog_api_path';

    const SCHEME_HTTP  = 'http://';
    const SCHEME_HTTPS = 'https://';

    /**
     * @return int
     */
    public function isEnabled(): int;
    /**
     * @return string
     */
    public function getProductionInfoServerUrl(): string;

    /**
     * @return string
     */
    public function getStoreBaseUrl(): string;

    /**
     * @return string
     */
    public function getInfoBaseUrl(): string;

    /**
     * @return string
     */
    public function getBlogApiPath(): string;

    /**
     * @return string
     */
    public function getHtaccessAuth(): string;
}
