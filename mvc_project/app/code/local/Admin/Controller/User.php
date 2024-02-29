<?php

class Admin_Controller_User extends Core_Controller_Admin_Action
{
    protected $_allowedAction = ['login'];
    public function loginAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addCss('customer/login.css');
        $child = $layout->getChild('content');
        $loginForm = $layout->createBlock('customer/account_login');
        $child->addChild('loginForm', $loginForm);
        $layout->toHtml();

    }


}
