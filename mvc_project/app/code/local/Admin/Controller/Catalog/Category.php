<?php

class Admin_Controller_Catalog_Category extends Core_Controller_Front_Action
{
    //indexAction function here displayes category.phtml file when we type in browser address bar internship/mvc_project/catalog/category
    public function formAction()
    {
        $layout = $this->getLayout();
        $content = $layout->getChild('content');

        $layout->getChild('head')->addCss('category/form.css'); //including css file

        $category_form = Mage::getBlock('catalog/admin_category_form'); //returning object of catagory form

        $content->addChild('categoryForm', $category_form); //adding form.phtml into content
        $layout->toHtml();
    }

    public function saveAction()
    {
        $data = $this->getRequest()->getParams('category');
        $product = Mage::getModel('catalog/category');
        $product->setData($data)->save();
        echo '<pre>';
        print_r($product);
    }

    public function deleteAction()
    {
        $id = $this->getRequest()->getParams("id");
        $product = Mage::getModel('catalog/catagory')->load($id);
        $product->setId($id)->delete();
        header('Location: /internship/mvc_project/admin/catalog_category/list ');
    }

    public function listAction()
    {
        $layout = $this->getLayout(); // returns Core_Block_Layout
        $content = $layout->getChild('content');

        $layout->getChild('head')->addCss('category/list.css');

        $categoryList = $layout->createBlock("catalog/admin_category_List");
        $content->addChild('categoryList', $categoryList);
        $layout->toHtml();
    }
}
