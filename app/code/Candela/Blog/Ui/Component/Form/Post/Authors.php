<?php


namespace Candela\Blog\Ui\Component\Form\Post;

class Authors extends \Candela\Blog\Ui\Component\Listing\Post\Authors
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        $options = parent::toOptionArray();
        if (count($options) >= 1) {
            array_unshift($options, ['label' => __('Select...')->render(), 'value' => 0]);
        }
        return $options;
    }
}
