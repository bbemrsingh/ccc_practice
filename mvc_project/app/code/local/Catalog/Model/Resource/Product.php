<?php

class Catalog_Model_Resource_Product extends Core_Model_Resource_Abstract
{
    public function init($tableName, $primaryKey)
    {
        $this->_tableName = $tableName;
        $this->_primaryKey = $primaryKey;
    }

    public function __construct()
    {
        $this->init('catalog_product', 'product_id');
    }
}
