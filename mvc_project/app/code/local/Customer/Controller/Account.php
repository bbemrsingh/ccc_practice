<?php 
class Customer_Controller_Account extends
{
    public function loginAction(){
        //email & password html form

        //post data
        $email; 
        $password;

        $data = Mage::getModel('customer/customer')->getCollection()
        ->addFieldToFilter('$email', $email)
        ->addFieldToFilter('$password', $password);

        $count = 0;
        $customerId = 0;

        foreach($data->getData() as $data){
            $count++;
            $customerId = $data->getId();
        }

        if($count){
            Mage::getSingleton('core/session')->set('logged_in_customer_id', $customerId);
        }
    }
    public function dashboardAction()
    {
        //show here details about customer
        $customerId = Mage::getSingleton(core/session)->get('logged_in_customer_id');
        if($customerId){
            

        }
        else{

        }
    }

    public function registerAction()
    {//html form with all fields for customer accounts
        
    }
    public function saveAction()
    {//post data here and store in database

    }

    public function loginAction($arg){

    }


    public function forgotpasswordAction(){
        //html pg with email option & post as same action
    }
}