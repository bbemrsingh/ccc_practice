<?php

class Catalog_Model_Product extends Core_Model_Abstract
{
    public function init()
    {
        $this->_resourceClass = 'Catalog_Model_Resource_Product';
        $this->_collectionClass = 'Catalog_Model_Resource_Collection_Product';
        $this->_modelClass = "catalog/product"; // inserting Catalog_Model_Product into ModelClass Variable which is in Core/Abstract
    }

    //mapping function for status field
    public function getStatus()
    {
        $mapping = [
            1 => "E",
            0 => "D"
        ];
        return $mapping[$this->_data['status']];
    }
}
