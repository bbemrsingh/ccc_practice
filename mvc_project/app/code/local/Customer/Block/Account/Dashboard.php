<?php

class Customer_Block_Account_Dashboard extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate("customer/account/dashboard.phtml");
    }
    // public function getCustomerList()
    // {
    //     $customerModel = Mage::getModel('customer/customer')->getCollection();
    //     return $customerModel;
    // }
}