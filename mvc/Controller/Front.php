<?php 

class Controller_Front {
    
    public function __construct() {

    }
    public function init(){
        $uri = new Model_Request();
        $uri = $uri->getRequestUri(); 
        $className = "View_". ucwords(str_replace("/","_",$uri),'_');
        $layout = new $className();
        echo $layout->toHtml();
        
    }



}



?>