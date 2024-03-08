<?php
class Catalog_Controller_Category extends Core_Controller_Front_Action
{
    public function viewAction()
    {
        $layout = $this->getLayout();
        $layout->getchild('head')
            ->addCss('category/view.css')
            ->addCss('header.css')
            ->addCss('footer.css');
        $categoryView = $layout->createBlock('catalog/admin_category_View'); // we are using same product view file
        $layout->getChild('content')->addChild('categoryView', $categoryView);
        $layout->toHtml();
    }
}