<?php

/* The class Core_Controller_Front_Action is a PHP class that provides a method to retrieve the layout
object. */
class Core_Controller_Front_Action
{
    public function __construct()
    {
        $this->init();
        $layout = $this->getLayout();
        $layout->getChild("head")
            ->addCss("header.css")
            ->addCss("footer.css");
    }
    public function init()
    {
        return $this;
    }
    protected $_layout = null;

    public function getLayout()
    {
        if (is_null($this->_layout)) {
            $this->_layout = Mage::getBlock('core/layout');
        }
        return $this->_layout;
    }


    public function getRequest()
    {
        return Mage::getModel("core/request");
    }
    public function setRedirect($url)
    {
        $url = Mage::getBaseUrl() . $url;
        header('Location:' . $url);
    }
}
