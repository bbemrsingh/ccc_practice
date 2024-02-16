<?php

/* The Core_Block_Layout class is responsible for creating and managing child blocks, such as the head,
header, content, footer, and message blocks, and setting the template for the layout. */
class Core_Block_Layout extends Core_Block_Template
{
    public function __construct()
    {
        $this->prepareChildren();
        $this->setTemplate('core/1column.phtml'); //setting common header for all pages
    }
    public function prepareChildren()
    {
        
        $head = $this->createBlock('page/head');
        $this->addChild('head', $head);

        $header = $this->createBlock("page/header");   
        $this->addChild('header', $header);


        $content = $this->createBlock('page/content');
        $this->addChild('content', $content);

        $footer = $this->createBlock('page/footer');
        $this->addChild('footer', $footer);
        
        $message = $this->createBlock('core/template');
        $message->setTemplate('core/message.phtml');
        $this->addChild('message', $message);
    }
    public function createBlock($className)
    {
        return Mage::getBlock($className);
        // Mage::getBlock('page/header'); //setting common header for all pages
    }

}
?>