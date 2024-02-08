<?php 

class Core_Controller_Front{ 

public function init(){
    $request = new Core_Model_Request;
    $fullclassName = $request->getFullControllerClass();
    $pageController = new $fullclassName();
    $actionName = $request->getActionName()."Action";
    echo $pageController->{$actionName}();

}

// $request = new Core_Model_Request();
// $request->getActionName();
// $request->getModuleName();
// $request->getControllerName();

}
