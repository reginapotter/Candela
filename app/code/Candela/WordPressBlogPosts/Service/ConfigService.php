<?php
/**
 *
 */
namespace Candela\WordPressBlogPosts\Service;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;
use Magento\Store\Model\Store;
use Candela\WordPressBlogPosts\Api\Config\ConfigInterface;

class ConfigService implements ConfigInterface
{
    /**
     * @var ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * ConfigService constructor.
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * {@inheritdoc}
     */
    public function isEnabled(): int
    {
        return (int)$this->scopeConfig->getValue(
            self::IS_ENABLED,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getProductionInfoServerUrl(): string
    {
        $url = $this->scopeConfig->getValue(
            self::PRODUCTION_INFO_SERVER_URL,
            ScopeInterface::SCOPE_STORE
        );


        return $url;
    }


    /**
     * {@inheritdoc}
     */
    public function getInfoBaseUrl(): string
    {
        return $this->getProductionInfoServerUrl();
    }

    /**
     * {@inheritdoc}
     */
    public function getStoreBaseUrl(): string
    {
        $storeBaseUrl = false;
        $isSecure = $this->scopeConfig->isSetFlag(Store::XML_PATH_SECURE_IN_FRONTEND);
        $configPath = $isSecure ? Store::XML_PATH_SECURE_BASE_URL : Store::XML_PATH_UNSECURE_BASE_URL;

        $scopeTypes = [ScopeConfigInterface::SCOPE_TYPE_DEFAULT,
            ScopeInterface::SCOPE_STORE,
            ScopeInterface::SCOPE_WEBSITE
        ];
        foreach ($scopeTypes as $scopeType) {
            if (!$this->isStoreBaseUrlCorrect($storeBaseUrl)) {
                $storeBaseUrl = $this->getStoreBaseUrlByScopeType($configPath, $scopeType);
            }
        }

        return $storeBaseUrl;
    }

    /**
     * @param string $configPath
     * @param string $scopeType
     * @return string
     */
    private function getStoreBaseUrlByScopeType(string $configPath, string $scopeType): string
    {
        $storeBaseUrl = $this->scopeConfig->getValue($configPath, $scopeType);

        return (string)$storeBaseUrl;
    }

    /**
     * @param string|bool $storeBaseUrl
     * @return bool
     */
    private function isStoreBaseUrlCorrect($storeBaseUrl): bool
    {
        if (!$storeBaseUrl || (strlen($storeBaseUrl) < 10)) { //check string length to avoid broken url
            return false;
        }

        return true;
    }

    /**
     * @return string
     */
    public function getBlogApiPath(): string
    {
        return (string)$this->scopeConfig->getValue(
            self::BLOG_API_PATH,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * @return string
     */
    public function getHtaccessAuth(): string
    {
        return (string)$this->scopeConfig->getValue(
            self::DEV_INFO_SERVER_HTACCESS_AUTH,
            ScopeInterface::SCOPE_STORE
        );
    }
}
