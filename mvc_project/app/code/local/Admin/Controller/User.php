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
            // return instance of the collection class with the resource and model class set &
            // selecting (tablename) data from the database
            //addfieldtoFilter fun uses table name returned by select fun called in getcollection
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

            if ($count != 0) {
                echo "success";
                Mage::getSingleton('core/session')->set('logged_in_admin_id', $adminId);
                $this->setRedirect('admin/user/dashboard');
            } else {

                $this->setRedirect('admin/user/login');
            }
        } else {
            $layout = $this->getLayout();
            $layout->getChild('head')->addcss('admin/login.css'); //including object of category form
            $child = $layout->getChild('content');

            $adminlogin = Mage::getBlock('admin/login'); //returning object of admin login form
            $child->addChild('adminLogin', $adminlogin); //adding login.php into content
            $layout->toHtml();
        }
    }

    public function dashboardAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addCss('admin/navbar.css');  //including css file

        $child = $layout->getChild('content');

        $dashboard = Mage::getBlock('admin/dashboard');

        $child->addChild('dashboard', $dashboard); //adding dashboard.php
        $layout->toHtml();
    }

}

