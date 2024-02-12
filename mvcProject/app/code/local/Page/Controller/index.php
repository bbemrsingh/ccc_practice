<?php 

class Page_Controller_Index extends Core_Controller_Front_Action
{
    public function indexAction()
    {
    
        // echo '<pre>';
        $layout = $this->getLayout()->toHtml();
        print_r($layout);
        // die;
        // echo '<input type="text" name="test" value="as">';
        // $layout = $this->getLayout();
        // print_r();
        echo __FUNCTION__;
        // echo dirname(__FILE__);
    }
    public function testAction()
    {
        $layout = $this->getLayout()->toHtml();
        // print_r($layout);
        echo $layout;
        echo __FUNCTION__;

        // echo 234234234;
        // print_r();
        // echo dirname(__FILE__);

    }
    public function saveAction()
    {
        echo "Save Data";
    }

}

?>