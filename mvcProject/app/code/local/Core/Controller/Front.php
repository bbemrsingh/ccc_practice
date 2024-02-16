<?php 

/* The Core_Controller_Front class initializes a request object, retrieves the action name and full
controller class, and then creates an instance of the controller class and calls the corresponding
action method. */
class Core_Controller_Front
{ 

    public function init()
    {
        // $request = new Core_Model_Request;
        $request        = Mage::getModel("core/request");
        $actionName     = $request->getActionName()."Action";
        $fullclassName  = $request->getFullControllerClass();
        // echo $fullclassName;
        $pageController = new $fullclassName();
        $pageController->{$actionName}();
 
    }

// $request = new Core_Model_Request();
// $request->getActionName();
// $request->getModuleName();
// $request->getControllerName();

}
