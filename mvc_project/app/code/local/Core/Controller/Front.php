<?php

/* The Core_Controller_Front class initializes a request object, retrieves the action name and full
controller class, and then creates an instance of the controller class and calls the corresponding
action method. */
class Core_Controller_Front
{

    public function init()
    {
        $request        = Mage::getModel("core/request");
        $actionName     = $request->getActionName() . "Action";
        //here getActionName() returns last word of url you can see in browser
        // and here we concatinate Action so all action function work because of this function.
        $fullclassName  = $request->getFullControllerClass();
        // echo $fullclassName;
        $pageController = new $fullclassName();
        $pageController->$actionName();
    }

    // $request = new Core_Model_Request();
    // $request->getActionName();
    // $request->getModuleName();
    // $request->getControllerName();

}
