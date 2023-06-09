<?php


namespace Candela\Blog\Model\Config\Backend;

/**
 * Class Route
 */
class Route extends \Magento\Framework\App\Config\Value
{
    /**
     * @var  \Candela\Blog\Helper\Url
     */
    private $urlHelper;

    protected function _construct()
    {
        $this->urlHelper = $this->getData('urlHelper');
        parent::_construct();
    }

    /**
     * @return \Magento\Framework\App\Config\Value
     */
    public function beforeSave()
    {
        if (!$this->urlHelper->validate($this->getValue())) {
            $this->setValue($this->urlHelper->prepare($this->getValue()));
        }

        return parent::beforeSave();
    }
}
