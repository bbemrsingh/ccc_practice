<?php 

class Catalog_Controller_Category extends Core_Controller_Front_Action
{
    //indexAction function here displayes category.phtml file when we type in browser address bar internship/mvc_project/catalog/category
    public function indexAction(){
        $layout = $this->getLayout();
        $this->_layout->setTemplate("catalog/category.phtml");
        $layout->toHtml();
    }
}