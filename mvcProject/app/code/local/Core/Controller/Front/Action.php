<?php 

/* The class Core_Controller_Front_Action is a PHP class that provides a method to retrieve the layout
object. */
class Core_Controller_Front_Action
{
    protected $_layout = null;

    public function getLayout()
    {
        if(is_null($this->_layout)){
            $this->_layout = Mage::getBlock('core/layout');
        }
        return $this->_layout;
    }
}
