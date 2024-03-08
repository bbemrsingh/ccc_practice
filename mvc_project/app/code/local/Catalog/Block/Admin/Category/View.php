<?php

class Catalog_Block_Admin_Category_View extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate("catalog/admin/category/view.phtml");
    }
    public $categoryList = ['Decor', 'Electronics', 'Fashion', 'Beauty', 'Sports & Fitness', 'kitchen & Dining'];
    public $brandList = ['Louis Philippe', 'Van Heusen', 'Biba', 'Allen Solly', 'Park Avenue'];
}