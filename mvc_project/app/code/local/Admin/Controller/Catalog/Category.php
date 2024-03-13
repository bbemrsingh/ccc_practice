<?php

class Admin_Controller_Catalog_Category extends Core_Controller_Admin_Action
{
    //indexAction function here displayes category.phtml file when we type in browser address bar internship/mvc_project/catalog/category
    protected $_allowedAction = [];
    public function formAction()
    {
        $layout = $this->getLayout();
        $content = $layout->getChild('content');

        $layout->getChild('head')->addCss('category/form.css'); //including css file

        $categoryForm = Mage::getBlock('catalog/admin_category_form'); //returning object of catagory form

        $content->addChild('categoryForm', $categoryForm); //adding form.phtml into content
        $layout->toHtml();
    }

    public function saveAction()
    {
        $data = $this->getRequest()->getParams('category');
        $category = Mage::getModel('catalog/category');
        $category->setData($data)->save();
        echo '<pre>';
        print_r($category);
    }

    public function deleteAction()
    {
        $id = $this->getRequest()->getParams("id");
        $category = Mage::getModel('catalog/catagory')->load($id)->delete();
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

    // public function viewAction()
    // {
    //     $layout = $this->getLayout()->setTemplate('core/1column.phtml');
    //     $layout->getchild('head')
    //         ->addCss('category/view.css')
    //         ->addCss('header.css')
    //         ->addCss('footer.css');
    //     $categoryView = $layout->createBlock('catalog/admin_category_View'); // we are using same product view file
    //     $layout->getChild('content')->addChild('categoryView', $categoryView);
    //     $layout->toHtml();
    // }
}
