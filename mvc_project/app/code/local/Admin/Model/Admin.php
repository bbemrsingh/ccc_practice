<?php

class Admin_Model_Admin extends Core_Model_Abstract
{
    public function init()
    {
        $this->_resourceClass = 'Admin_Model_Resource_Admin';
        $this->_collectionClass = 'Admin_Model_Resource_Collection_Admin';
        // inserting admin/model/admin into ModelClass Variable declared in Core/Model/Abstract,
        // where getCollection() passes ModelClass variable into getModelClass() which is in Core/Collection/Abstract. 
        // here it used in load method which creats sql statement.
        $this->_modelClass = 'admin/admin';
    }
}