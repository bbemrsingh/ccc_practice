<?php

class Admin_Controller_Converter extends Core_Controller_Admin_Action
{
    protected $_allowedAction = ['form'];
    public function __construct()
    {
        $this->getLayout()->setTemplate('core/2column.phtml');
    }

    public function formAction()
    {
        $layout = $this->getLayout();
        // ->setTemplate('core/2column.html');

        $tempConverter = Mage::getModel("tempconverter/converter");

        $layout->getChild('content')->addChild('converter', $tempConverter);
        $layout->toHtml();
    }
    public function listAction()
    {
        $layout = $this->getLayout(); //returns Core_Block_Layout

        $tempList = $layout->createBlock("tempconverter/admin_list"); //returns list.php file
        $layout->getChild("content")->addChild("tempList", $tempList);
        $layout->toHtml();

    }
    public function deleteAction()
    {
        $id = $this->getRequest()->getParams("id");
        $temp = Mage::getModel('tempcoverter/converter')->load($id);
        $temp->setId($id)->delete();
        header('Location: /internship/mvc_project/admin/converter/list ');
    }


    public function saveAction()
    {
        $data = $this->getRequest()->getParams('temp');
        $temp = Mage::getModel('tempconverter/converter');
        $temp->setData($data)->save();
        echo '<pre>';
        print_r($temp);
    }
    /**The saveAction function saves product data from a request and prints the product object.*/

}