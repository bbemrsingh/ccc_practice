<?php

class Page_Controller_Index extends Core_Controller_Front_Action
{
    public function indexAction()
    {
        $layout = $this->getLayout();
        $layout->getchild('head')->addCss('content.css');
        // $layout->getchild('head')->addJs('page.js');
        // we give head in getchild because addcss function is in head.phtml



        $banner = $layout->createBlock('banner/banner');
        $layout->getchild('content')->addChild('banner', $banner);
        $layout->toHtml();
    }
}
