<?php

use \Magento\Store\Model\StoreManager;
$serverName = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : null;

switch ($serverName) {
    case 'retell.beauty.test':
        $runCode = 'base';
        $runType = 'website';
        break;
    case 'candela.test':
        $runCode = 'candela';
        $runType = 'website';
        break;
    default:
        return;
}

if ((!isset($_SERVER[StoreManager::PARAM_RUN_TYPE])
        || !$_SERVER[StoreManager::PARAM_RUN_TYPE])
    && (!isset($_SERVER[StoreManager::PARAM_RUN_CODE])
        || !$_SERVER[StoreManager::PARAM_RUN_CODE])
) {
    $_SERVER[StoreManager::PARAM_RUN_CODE] = $runCode;
    $_SERVER[StoreManager::PARAM_RUN_TYPE] = $runType;
}
