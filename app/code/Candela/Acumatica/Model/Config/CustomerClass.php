<?php
/**
 * Copyright © 2021 Candela Commerce. All rights reserved.
 */
namespace Candela\Acumatica\Model\Config;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Serialize\Serializer\Json;

class CustomerClass
{

    private const CUSTOMER_CLASSS_AND_GROUPS = 'candela_acumatica/customer_group/choose_customer_group';

    /**
     * @var ScopeConfigInterface
     */
    private ScopeConfigInterface $scopeConfig;

    /**
     * @var Json
     */
    private Json $jsonSerializer;

    /**
     * @param ScopeConfigInterface $scopeConfig
     * @param Json $jsonSerializer
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig,
        Json $jsonSerializer
    ) {
        $this->scopeConfig = $scopeConfig;
        $this->jsonSerializer = $jsonSerializer;
    }

    /**
     * @return array
     */
    public function getCustomerClass(): array
    {
        $groups = $this->getConfigValue();

        return array_map(
            function ($groups) {
                return [
                    'customerGroup' => $groups['customerGroup'],
                    'classAcumatica' => $groups['classAcumatica']
                ];
            },
            $groups
        );
    }


    /**
     * @return array
     */
    private function getConfigValue(): array
    {
        $classAndGroups = $this->scopeConfig->getValue(self::CUSTOMER_CLASSS_AND_GROUPS);

        return $classAndGroups ? $this->jsonSerializer->unserialize($classAndGroups) : [];
    }

}
