<?php

class Admin_Controller_Banner extends Core_Controller_Admin_Action
{
    protected $_allowedAction = [];
    public function addAction()
    {
        $layout = $this->getLayout();
        $content = $layout->getChild('');

        $layout->getChild('head')->addCss('banner/form.css'); //including css file

        $bannerForm = $layout->createBlock('banner/Addbanner');
        $content->addChild('banner', $bannerForm);
        $layout->toHtml();
    }

    public function listAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addCss('banner/list.css'); //including css
        $bannerList = $layout->createBlock('banner/admin_list'); //banner_Block_admin_list
        $layout->getChild('')->addChild('list', $bannerList);
        $layout->toHtml();
    }

    public function deleteAction()
    {

    }
    public function moveAction()
    {

    }


}