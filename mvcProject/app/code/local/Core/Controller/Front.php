<?php 

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
