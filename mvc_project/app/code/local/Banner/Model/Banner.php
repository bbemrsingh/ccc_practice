<?php

class Banner_Model_Banner extends Core_Model_Abstract
{
    public function init()
    {
        $this->_resourceClass = 'Banner_Model_Resource_Banner';
        $this->_collectionClass = 'Banner_Model_Resource_Collection_Banner';
        // inserting Banner_Model_Banner into ModelClass Variable which is in Core/Abstract
        $this->_modelClass = "banner/banner";
    }
    public function getStatus()
    {
        $mapping = [
            1 => 'ENABLED',
            0 => 'DISABLED'
        ];
        if (isset($this->_data['status']))
            return $mapping[$this->_data['status']];
    }
}