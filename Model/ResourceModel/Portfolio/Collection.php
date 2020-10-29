<?php
namespace AHT\Portfolio\Model\ResourceModel\Portfolio;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'id';
 
    protected function _construct()
    {
        $this->_init('AHT\Portfolio\Model\Portfolio', 'AHT\Portfolio\Model\ResourceModel\Portfolio');
    }
}