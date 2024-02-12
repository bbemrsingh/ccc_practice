<?php

class Core_Block_Layout extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('core/1column.phtml'); //setting common header for all pages
    }
    public function prepareChildren()
    {

    }
    public function createBlock($className)
    {
        Mage::getBlock('page/header'); //setting common header for all pages
    }

    public function getRequest(){
        return Mage::getModel('core/request');
    }

}
?>