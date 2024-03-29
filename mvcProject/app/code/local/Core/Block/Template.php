<?php 
/* The Core_Block_Template class is a PHP class that represents a template block and provides methods
for managing child blocks and rendering the template. */
class Core_Block_Template extends Core_Block_Abstract{

    public $template;

    protected $_child = [];

    public function toHtml()
    {
        $this->render();
    }
    public function addChild($key, $value)
    {
        $this->_child[$key] = $value;
    }
    public function removeChild($key)
    {
        
    }
    /**
     * The function `getChildHtml` returns the HTML representation of a child element based on the
     * given key.
     * 
     * The key parameter is used to specify the child element that you want to retrieve or
     * generate HTML for. It is typically a string or an integer that uniquely identifies the child
     * element within the parent object.
     * 
     * `getChild` function is returning the child element with the specified key. The
     * `getChildHtml` function is returning the HTML representation of the child element with the
     * specified key.
     */
    public function getChild($key)
    {
        return $this->_child[$key];
    }

    public function getChildHtml($key)
    {
        return $this->getChild($key)->toHtml();
    }
    // this function written be in abstract file only 
    // public function getTemplate()
    // {
    //     return $this->template;
    // }
    public function setTemplate($template){
        $this->template = $template;
    }

    public function getRequest()
    {
        return Mage::getModel('core/request');
    }

}