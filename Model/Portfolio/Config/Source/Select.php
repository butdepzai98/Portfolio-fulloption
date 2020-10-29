<?php
namespace AHT\Portfolio\Model\Portfolio\Config\Source;

class Select implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => '5', 'label' => __('5')],
            ['value' => '6', 'label' => __('6')],
            ['value' => '7', 'label' => __('7')],
            ['value' => '8', 'label' => __('8')],
            ['value' => '9', 'label' => __('9')],
        ];
    }
}