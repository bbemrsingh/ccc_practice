<?php

class Product_Model_Resource_product
{
    protected $_tableName="";
    protected $_primeryKey="";

    public function init($tableName,$primeryKey)
    {
        $this->_tableName = $tableName;
        $this->_primeryKey = $primeryKey;
    }
    //above part is abstract
    public function __construct()
    {
        $this->init('ccc_product', 'product_id');
    }
}
?>