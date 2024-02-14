<?php 

class Page_Block_head extends Core_Block_Template
{
    protected $_css=[];
    protected $_js=[];

    public function __Construct()
    {
        $this->setTemplate("page/head.phtml");
    }

    public function addJs($file)
    {
        $this->_js[] = $file;
    }

    public function getJs()
    {
        return $this->_js;
    }

    public function addCss($file)
    {
        $this->_css[] = $file;
    }

    public function getCss(){
        return $this->_css;
    }


}
?>