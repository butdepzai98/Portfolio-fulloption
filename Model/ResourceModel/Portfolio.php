<?php
namespace AHT\Portfolio\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Portfolio extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('portfolio', 'id');
    }
}