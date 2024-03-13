<?php
// include("autoload.php");

/* The Mage class is a PHP class that provides static methods for initializing the application,
creating instances of classes based on class names, registering and retrieving values from a
registry, and getting the base directory path. */
class Mage
{
    private static $registry = [];
    private static $_singleTon = [];
    private static $baseDir = 'c:/xampp/htdocs/internship/mvc_project/';
    private static $baseUrl = 'http://localhost/internship/mvc_project/';
    public static function init()
    {
        $frontController = new Core_Controller_Front();
        $frontController->init();

        // $uri = new Core_Model_Request(); // $uri=Mage::getModel("core/request");// $uri =  $uri->getRequestUri(); // echo $uri;// $ctrl = new Mage_Core_Controller();

    }

    public static function getSingleton($className)
    {

        if (isset(self::$_singleTon[$className])) {
            return self::$_singleTon[$className];
        } else {
            return self::$_singleTon[$className] = self::getModel($className);
        }
    }
    /** The below PHP code defines two static functions, getModel and getBlock, which create and return
     * instances of classes based on the provided class name.
     * 
     *The className parameter is a string that represents the name of the class that
     * you want to instantiate.
     * 
     * functions `getModel` and `getBlock` are returning an instance of the class specified
     * by the `` parameter.*/
    public static function getModel($className)
    {
        $className = str_replace("/", "_Model_", $className);
        $className = ucwords(str_replace("/", "_", $className), "_");
        // echo $className;
        return new $className();
    }

    public static function getBlock($className)
    {
        // argument = catalog/product
        $className = str_replace("/", "_Block_", $className);
        $className = ucwords(str_replace("/", "_", $className), "_");
        // echo $className;
        return new $className();
    }
    public static function register($key, $value)
    {
        self::$registry[$key] = $value;
    }
    public static function registry($key)
    {
        return isset(self::$registry[$key]) ? self::$registry[$key] : null;
    }
    public static function getBaseDir($subDir = null)
    {
        if ($subDir) {
            return self::$baseDir . $subDir;
        }
        return self::$baseDir . '/';
    }
    public static function getBaseUrl($subUrl = null)
    {

        if ($subUrl) {
            return self::$baseUrl . $subUrl;
        }
        return self::$baseUrl;
    }
    public static function getImagePath($filePath)
    {
        if ($filePath) {
            return self::$baseUrl . 'skin/images/' . $filePath;
        }
        return self::$baseUrl . 'skin/images/';


    }
    public static function getBannerPath($filePath)
    {
        if ($filePath) {
            return self::$baseUrl . 'media/' . $filePath;
        }
        return self::$baseUrl . 'media/';

    }
}
