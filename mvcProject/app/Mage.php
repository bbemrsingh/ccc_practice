<?php 
// include("autoload.php");

class Mage{
    public static function init(){
        $frontController = new Core_Controller_Front();
        $frontController->init();

        // $uri = new Core_Model_Request();
        // $uri=Mage::getModel("core/request");
        // $uri =  $uri->getRequestUri(); 
        // echo $uri;

        // $ctrl = new Mage_Core_Controller();

    }
    public static function getSingleton($className){

    }
    public static function getModel($className){
        $className = str_replace("/", "_Model_", $className);
        $className = ucwords(str_replace("/","_Model_", $className),"_");
        // echo $className;
        return new $className();
    }
    public static function register($key, $value){}
    public static function registry($key){}
    public static function getBaseDir($subDir = null){}

}



?>