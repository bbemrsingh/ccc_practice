<?php

class Admin_Block_Header extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('admin/navbar.phtml'); //template/admin/navbar
    }
}