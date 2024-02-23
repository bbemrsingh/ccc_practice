<?php
/* The Core_Block_Template class is a PHP class that represents a template block and provides methods
for managing child blocks and rendering the template. */
class Core_Block_Template extends Core_Block_Abstract
{

    public $template;

    protected $_child = [];

    public function toHtml()
    {
        $this->render();
    }
    public function addChild($key, $value)
    {
        $this->_child[$key] = $value;
        return $this;
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
        // echo "22";
        return $this->_child[$key];
    }

    public function getChildHtml($key)
    {
        $html = '';
        if ($key == '' && count($this->_child)) {
            foreach ($this->_child as $_child) {
                $html .= $_child->toHtml();
            }
        } else {
            $html = $this->getChild($key)->toHtml();
        }
        return $html;
    }



    public function getRequest()
    {
        return Mage::getModel('core/request');
    }
}
