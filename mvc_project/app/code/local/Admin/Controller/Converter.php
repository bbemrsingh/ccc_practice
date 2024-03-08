<?php

class Admin_Controller_Converter extends Core_Controller_Admin_Action
{
    protected $_allowedAction = [];

    public function formAction()
    {

        $layout = $this->getLayout();
        $layout->setTemplate('core/2column.phtml');
        $layout->getchild('head')->addJs('converter.js');
        $tempConverter = $layout->createBlock("tempconverter/admin_form");

        $layout->getChild('content')->addChild('temoConverter', $tempConverter);
        $layout->toHtml();
    }
    public function listAction()
    {
        $layout = $this->getLayout();

        $tempList = $layout->createBlock("tempconverter/admin_list"); //returns list.php file

        $layout->getChild("content")->addChild("tempList", $tempList);
        $layout->toHtml();

    }
    public function deleteAction()
    {
        $id = $this->getRequest()->getParams("id");
        $temp = Mage::getModel('tempconverter/converter')->load($id);
        $temp->setId($id)->delete();
        header('Location: /internship/mvc_project/admin/converter/list ');
    }


    public function saveAction()
    {
        $data = $this->getRequest()->getParams('temp');
        $data = Mage::getModel('tempconverter/converter')->getTempResult($data);

        // Mage::getSingleton("core/session")->set("user_name", $data['user_name']);

        $temp = Mage::getModel('tempconverter/converter')->setData($data)->save();
        echo '<pre>';
        print_r($temp);
    }
}