<?php

class Admin_Controller_Banner extends Core_Controller_Admin_Action
{
    protected $_allowedAction = ['form'];
    public function formAction()
    {
        $layout = $this->getLayout(); // returns core-layout object
        $child = $layout->getChild('content');

        $layout->getChild('head')->addCss('banner/form.css'); //including css file

        $bannerForm = $layout->createBlock('banner/admin_form'); //Banner_Block_Admin_Form
        $child->addChild('banner', $bannerForm);
        $layout->toHtml();
    }

    public function listAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addCss('banner/list.css'); //including css
        $child = $layout->getChild('content');
        $bannerList = $layout->createBlock('banner/admin_list'); //Banner_Block_Admin_list
        $child->addChild('list', $bannerList);
        $layout->toHtml();
    }

    public function deleteAction()
    {
        $id = $this->getRequest()->getparams("id");
        $banner = Mage::getModel("banner/banner")->load($id)->delete();
        header('Location: /internship/mvc_project/admin/banner/list ');
    }


    public function saveAction()
    {
        $data = $this->getRequest()->getParams('banner');
        $banner = Mage::getModel('banner/banner');
        $banner->setData($data)->save();
        echo '<pre>';
        print_r($banner);
    }


}