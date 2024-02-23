<?php

class Page_Controller_Index extends Core_Controller_Front_Action
{
    public function indexAction()
    {

        // echo '<pre>';
        $layout = $this->getLayout();
        // $layout->getchild('head');
        // $layout->getchild('head')->addJs('navigation.js');
        // $layout->getchild('head')->addJs('page.js');


        $layout->getchild('head')->addCss('content.css');
        // we give head in getchild because addcss function is in head.phtml

        $banner = $layout->createBlock('core/template')
            ->setTemplate('banner/banner.phtml');


        $layout->getchild('content')
            ->addChild('banner', $banner);
        $layout->toHtml();
    }
}
