<?php

class Admin_Controller_Catalog_Category extends Core_Controller_Front_Action
{
    //indexAction function here displayes category.phtml file when we type in browser address bar internship/mvc_project/catalog/category
    public function formAction()
    {
        $layout = $this->getLayout();
        $content = $layout->getChild('content');

        $layout->getChild('head')->addCss('category/form.css'); //including css file

        $category_form = Mage::getBlock('catalog/admin_category'); //returning object of catagory form

        $content->addChild('categoryForm', $category_form); //adding form.phtml into content
        $layout->toHtml();
    }
}
