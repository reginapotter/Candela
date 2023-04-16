<?php

declare(strict_types=1);



namespace Candela\Blog\Block\Amp;

class Currency extends \Magento\Directory\Block\Currency
{
    public function getStoreUrlAmp(string $code): string
    {
        return $this->_urlBuilder->getUrl('directory/currency/switch', ['currency' => $code]);
    }
}
