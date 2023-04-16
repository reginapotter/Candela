<?php
/**
 *
 */
namespace Candela\OrderAttributes\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Candela\OrderAttributes\Model\ConfigProvider;

/**
 * Class Review
 * @package Candela\OrderAttributes\Block
 */
class Review extends Template
{
    /**
     * @var ConfigProvider
     */
    protected $configProvider;

    /**
     * Review constructor.
     * @param ConfigProvider $configProvider
     * @param Context $context
     */
    public function __construct(
        ConfigProvider $configProvider,
        Context $context
    ) {
        $this->configProvider = $configProvider;
        parent::__construct($context);
    }

    /**
     * @param $field
     * @return array
     */
    public function getQuestion($field)
    {
        return $this->configProvider->getQuestion($field);
    }

    /**
     * @param $field
     * @return array
     */
    public function getOptions($field)
    {
        return $this->configProvider->getOptions($field);
    }

    /**
     * @param $field
     * @return string
     */
    public function getRequired($field)
    {
        if ($this->configProvider->getRequired($field)) {
            return 'required';
        }
    }

    /**
     * @param $field
     * @return mixed
     */
    public function getEnabled($field)
    {
        $enabled = $this->configProvider->getEnabled($field);
        if ($enabled == 1) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param $field
     * @return mixed
     */
    public function getAreas($field)
    {
        $area = $this->configProvider->getArea($field);
        return $area;
    }

    /**
     * @return bool
     */
    public function isSetConfig()
    {
        if ($this->getQuestion('first_question') ||
            $this->getQuestion('second_question') ||
            $this->getQuestion('third_question')) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return array
     */
    public function getQuestionFields()
    {
        return ['first_question','second_question','third_question'];
    }

    /**
     * @return array
     */
    public function getOptionsFields()
    {
        return ['first_options','second_options','third_options'];
    }

    /**
     * @return array
     */
    public function getRequiredFields()
    {
        return ['first_required','second_required','third_required'];
    }

    /**
     * @return bool
     */
    public function getFrontendArea()
    {
        if ($this->getAreas('area') == 'frontend' || $this->getAreas('area') == 'global') {
            return true;
        } else {
            return false;
        }
    }
    /**
     * @return bool
     */
    public function getAdminArea()
    {
        if ($this->getAreas('area') == 'admin' || $this->getAreas('area') == 'global') {
            return true;
        } else {
            return false;
        }
    }
}
