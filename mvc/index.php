<?php 

include "Lib/autoload.php";

class Ccc {
    public static function init(){
        echo 123;
        $frontControllerObj = new Controller_Front;
        $frontControllerObj->init();
        }
}

Ccc::init();
$uriObj = new Model_Request();
    echo $uriObj->getRequestURI();




// $request = new Model_Request();


// if(!$request->isPost()) {
// 	$product = new View_Product();
// 	echo $product->toHtml();
// } else {
// 	$product = new Model_Product();
// 	$product->save($request->getParams('group1'));
// 	print_r($product);

// }
























?>