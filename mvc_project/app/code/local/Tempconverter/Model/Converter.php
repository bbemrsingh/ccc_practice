<?php

class Tempconverter_Model_Converter extends Core_Model_Abstract
{
    public function init()
    {
        $this->_resourceClass = 'Tempconverter_Model_Resource_Converter';
        $this->_collectionClass = 'Tempconverter_Model_Resource_Collection_Converter';
        $this->_modelClass = "tempconverter/converter";
    }
}
