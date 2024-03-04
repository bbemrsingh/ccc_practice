<?php

class Customer_Model_Account extends Core_Model_Abstract
{
    public function init()
    {
        $this->_resourceClass = 'Customer_Model_Resource_Account';
        $this->_collectionClass = 'Customer_Model_Resource_Collection_Account';
        // inserting Customer/Account into ModelClass Variable which declared is in Core/Model/Abstract,
        // where getCollection() passes ModelClass variable into getModelClass() which is in Core/Collection/Abstract. 
        // here it used in load method which creats sql statement.
        $this->_modelClass = "customer/account";
    }
}
