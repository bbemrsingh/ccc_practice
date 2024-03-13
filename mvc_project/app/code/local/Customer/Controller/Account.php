<?php
class Customer_Controller_Account extends Core_Controller_Front_Action
{
    protected $_customerAllowedAction = ['login', 'register', 'forgotPassword'];

    public function init()
    {
        if (
            !in_array($this->getRequest()->getActionName(), $this->_customerAllowedAction) &&
            !Mage::getSingleton('core/session')->get('logged_in_customer_id')
        ) {
            $this->setRedirect('customer/account/login');
        }
    }

    public function dashboardAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addCss('customer/dashboard.css');
        $child = $layout->getChild('content');
        $customerDashboard = $layout->createBlock("customer/account_dashboard");
        $child->addChild('customerDashboard', $customerDashboard);
        $layout->toHtml();
        // $customerId = Mage::getSingleton('core/session')->get('logged_in_customer_id');
        // if ($customerId) {
        //     header('Location: /internship/mvc_project/ ');
        //     // get customer id from session & load customer object to get other data in our block file show dashboard code
        // } else {
        //     echo "You are not allowed to view this page";
        // }
    }

    public function loginAction()
    {
        // below code will run after user clicks submit button
        if ($this->getRequest()->isPost()) {
            //getParams gets post data from loginform 
            $accountCredentials = $this->getRequest()->getParams('login');
            $email = $accountCredentials['customer_email'];
            $password = $accountCredentials['password'];

            $data = Mage::getModel('customer/account')->getCollection()
                ->addFieldToFilter('customer_email', $email)
                ->addFieldToFilter('password', $password);
            $count = 0;
            $customerId = 0;

            foreach ($data->getData() as $data) {
                $count++;
                $customerId = $data->getId();
            }

            if ($count != 0) {
                Mage::getSingleton('core/session')->set('logged_in_customer_id', $customerId);
                $this->setRedirect('customer/account/dashboard');
            } else {
                $this->setRedirect('customer/account/login');
            }
        } else {

            // gives layout ie head, header, content, footer which are in Core_Block_Layout
            $layout = $this->getLayout();
            $layout->getChild('head')->addCss('customer/login.css');
            $child = $layout->getChild('content');

            $customerForm = $layout->createBlock('customer/account_login');
            $child->addChild('customerForm', $customerForm);
            $layout->toHtml();
        }
    }

    public function registerAction()
    { //html form with all fields for customer accounts
        $layout = $this->getlayout();
        $layout->getChild('head')->addCss('customer/register.css'); // adding css file
        $registerForm = $layout->createBlock('customer/account_register');
        $layout->getChild('content')->addChild('registerForm', $registerForm);
        $layout->toHtml();
    }
    public function saveAction()
    { //post data here and store in database
        $accountCredentials = $this->getRequest()->getParams('customer'); //getParams gets post data from registerform 
        $customer = Mage::getModel('customer/account')->setData($accountCredentials)->save();
        echo '<pre>';
        print_r($customer);
    }

    public function forgotPasswordAction()
    {
        //html pg with email option & post as same action

        $layout = $this->getLayout();
        $layout->getChild('head')->addCss('customer/forgotpassword.css');
        $forgotPasswordForm = $layout->createBlock('customer/account_forgotpassword');
        $layout->getChild('content')->addChild('forgotpassword', $forgotPasswordForm);
        $layout->toHtml();
    }


}
