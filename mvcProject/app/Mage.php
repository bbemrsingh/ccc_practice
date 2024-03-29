<?php 
// include("autoload.php");

/* The Mage class is a PHP class that provides static methods for initializing the application,
creating instances of classes based on class names, registering and retrieving values from a
registry, and getting the base directory path. */
class Mage
{
    private static $registry = [];
    private static $baseDir  = 'c:/xampp/htdocs/internship/mvcProject/';

    public static function init()
    {
        $frontController = new Core_Controller_Front();
        $frontController->init();
        
        // $uri = new Core_Model_Request(); // $uri=Mage::getModel("core/request");// $uri =  $uri->getRequestUri(); // echo $uri;// $ctrl = new Mage_Core_Controller();
    
    }
    public static function getSingleton($className){

    }
    /**
     * The below PHP code defines two static functions, getModel and getBlock, which create and return
     * instances of classes based on the provided class name.
     * 
     * @param className The className parameter is a string that represents the name of the class that
     * you want to instantiate.
     * 
     * @return The functions `getModel` and `getBlock` are returning an instance of the class specified
     * by the `` parameter.
     */
    public static function getModel($className){
        $className = str_replace("/", "_Model_", $className);
        $className = ucwords(str_replace("/","_", $className), "_");
        // echo $className;
        return new $className();
    }

    public static function getBlock($className)
    {
        $className = str_replace("/", "_Block_", $className);
        $className = ucwords(str_replace("/","_", $className),"_");
        // echo $className;
        return new $className();
    }
    public static function register($key, $value)
    {
        self::$registry[$key] = $value;
    }
    public static function registry($key)
    {
        return isset(self::$registry[$key]) ? self::$registry[$key]  : null;  
    }
    public static function getBaseDir($subDir = null)
    {
        if ($subDir){
            return self::$baseDir ."/". $subDir;
        }
        return self::$baseDir;
    }

}


 
?>