<?php

class Sales_Model_Resource_Item extends Core_Model_Resource_Abstract
{
    public function init($tableName, $primaryKey)
    {
        $this->_tableName = $tableName;
        $this->_primaryKey = $primaryKey;
    }

    public function __construct()
    {
        $this->init('sales_quote_item', 'item_id');
    }
}