<?php
/**
 *
 */
namespace Candela\OrderAttributes\Model;

use Magento\Checkout\Model\ConfigProviderInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;
use Magento\Store\Model\StoreManagerInterface;

/**
 * Class ConfigProvider
 * @package Candela\OrderAttributes\Model
 */
class ConfigProvider implements ConfigProviderInterface
{
    const ATTRIBUTE_CONFIGS = 'attributes/order_attributes/';

    /**
     * @var StoreManagerInterface
     */
    protected $storeManager;
    /**
     * @var ScopeConfigInterface
     */
    protected $scopeConfig;

    public function __construct(
        StoreManagerInterface $storeManager,
        ScopeConfigInterface $scopeConfig
    ) {
        $this->storeManager = $storeManager;
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * get store id
     * @return int
     */
    public function getStoreId()
    {
        return $this->storeManager->getStore()->getId();
    }

    /**
     * get question placed in admin
     * @param $field
     * @return array
     */
    public function getQuestion($field)
    {
        return $this->scopeConfig->getValue(self::ATTRIBUTE_CONFIGS . $field, ScopeInterface::SCOPE_STORE, $this->getStoreId());
    }

    /**
     * get options of each question from admin
     * @param $field
     * @return array
     */
    public function getOptions($field)
    {
        $optionsConfig = $this->scopeConfig->getValue(
            self::ATTRIBUTE_CONFIGS . $field,
            ScopeInterface::SCOPE_STORE,
            $this->getStoreId()
        );
        $optionsArray = [];
        if ($optionsConfig !== null) {
            $optionsArray = explode(',', $optionsConfig);
        }
        $options = [];
        $size = count($optionsArray);
        for ($i = 0; $i < $size; $i++) {
            $number = $i + 1;
            $options['option' . $number] = $optionsArray[$i];
        }
        return $options;
    }

    /**
     * get validation for questions
     * @param $field
     * @return array
     */
    public function getRequired($field)
    {
        return $this->scopeConfig->getValue(self::ATTRIBUTE_CONFIGS . $field, ScopeInterface::SCOPE_STORE, $this->getStoreId());
    }

    /**
     * @param $field
     * @return mixed
     */
    public function getEnabled($field)
    {
        $enabled = $this->scopeConfig->getValue(self::ATTRIBUTE_CONFIGS . $field, ScopeInterface::SCOPE_STORE, $this->getStoreId());
        if ($enabled == 1) {
            return $enabled;
        }
    }

    /**
     * @param $field
     * @return mixed
     */
    public function getArea($field)
    {
        $area = $this->scopeConfig->getValue(self::ATTRIBUTE_CONFIGS . $field, ScopeInterface::SCOPE_STORE, $this->getStoreId());
        return $area;
    }

    /**
     * get all configs from admin
     * @return array
     */
    public function getConfig()
    {
        return [
            'attributes' => [
                'enabled' => $this->getEnabled('enable'),
                'area' => $this->getArea('area'),
                'firstQuestion' => $this->getQuestion('first_question'),
                'secondQuestion' => $this->getQuestion('second_question'),
                'thirdQuestion' => $this->getQuestion('third_question'),
                'optionsFirst' => $this->getOptions('first_options'),
                'optionsSecond' => $this->getOptions('second_options'),
                'optionsThird' => $this->getOptions('third_options'),
                'requiredFirst' => $this->getRequired('first_required'),
                'requiredSecond' => $this->getRequired('second_required'),
                'requiredThird' => $this->getRequired('third_required')
            ]

        ];
    }
}
