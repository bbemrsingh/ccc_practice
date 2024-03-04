<?php

class Admin_Controller_User extends Core_Controller_Admin_Action
{
    //In Core_Controiller_Admin_Action we set admin.phtml as its template.
    //while controllers which will extends Core_Controller_Front_Action will automatically set 1column.phtml
    // as their template ( see construct of Core_Block_Layout)
    protected $_allowedAction = ['login'];
    public function loginAction()
    {
        // below code will run after user clicks submit button
        if ($this->getRequest()->isPost()) {
            $adminCredentials = $this->getRequest()->getParams('admin');

            $userName = $adminCredentials['admin_email'];
            $password = $adminCredentials['password'];

            // var_dump($username);
            // var_dump($password);

            $adminCollection = Mage::getModel('admin/admin')->getCollection()
                ->addFieldToFilter('admin_email', $userName)
                ->addFieldToFilter('password', $password);

            $count = 0;
            $adminId = 0;

            foreach ($adminCollection->getData() as $admin) {
                $count++;
                $adminId = $admin->getId();
                // print_r($adminId); 
            }

            if ($count == 1) {
                echo "success";
                Mage::getSingleton('core/session')->set('logged_in_admin_id', $adminId);
                $this->setRedirect('admin/user/dashboard');
            } else {

                $this->setRedirect('admin/user/login');
            }
        } else {
            $layout = $this->getlayout();
            $layout->getChild('head')->addCss('admin/login.css');
            $adminLogin = $layout->createBlock('admin/login');
            $layout->getChild('content')->addChild('login', $adminLogin);
            $layout->toHtml();
        }
    }

    public function dashboardAction()
    {
        $layout = $this->getLayout();
        $child = $layout->getChild('content');
        $adminDashboard = $layout->createBlock("admin/dashboard");
        $child->addChild('adminDashboard', $adminDashboard);
        $layout->toHtml();
    }

}

