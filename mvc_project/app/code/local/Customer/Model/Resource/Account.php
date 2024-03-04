<?php

class Customer_Model_Resource_Account extends Core_Model_Resource_Abstract
{
    public function init($tableName, $primaryKey)
    {
        $this->_tableName = $tableName;
        $this->_primaryKey = $primaryKey;
    }

    public function __construct()
    {
        $this->init('customer', 'customer_id');
    }
}
