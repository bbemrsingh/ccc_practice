<?php


class Core_Controller_Admin_Action extends Core_Controller_Front_Action
{
    protected $_allowedAction = [];
    public function __construct()
    {
        $this->init();
        $layout = $this->getLayout();
        $layout->getChild("head")->addCss("adminFooter.css");

    }
    public function init()
    //Restrict access to certain actions in the controller, & to redirect unauthorized users to the login page.
    {
        $layout = $this->getLayout()->setTemplate('core/admin.phtml'); // yaha pe admin.phtml ko hamne set karadiya as template for admin
        if (
            !in_array($this->getRequest()->getActionName(), $this->_allowedAction) &&  //allowedAction keywords starts from here
            !Mage::getSingleton('core/session')->get('logged_in_admin_id')
        ) {
            $this->setRedirect('admin/user/login');
        }
        return $this;
    }

}

