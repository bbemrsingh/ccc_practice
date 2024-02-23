<?php
class Admin_Controller_Catalog_Product extends Core_Controller_Front_Action
{
    public function getCss($layout)
    {
        $layout->getChild('head')
            ->addCss('product/form.css');
    }

    public function formAction()
    {
        $layout = $this->getLayout();
        // $layout becomes object of core_Block_layout 
        //and constructor of this layout file will also get executed
        $this->getCss($layout);

        $child = $layout->getChild('content');

        $productForm = $layout->createBlock('catalog/admin_product');
        // here we have got location of a file in productForm variable
        $child->addChild('form', $productForm);

        // now if we do getchild('form') in content.phtml file than we can view form in content area.
        $layout->toHtml();
    }

    public function saveAction()
    {

        $data = $this->getRequest()->getParams('product');
        $product = Mage::getModel('catalog/product');
        $product->setData($data)->save();
        echo '<pre>';
        print_r($product);
    }

    public function deleteAction()
    {
        $id = $this->getRequest()->getParams("id");
        $product = Mage::getModel('catalog/product')->load($id);
        $product->setId($id)->delete();
    }

    public function listAction()
    {
        $layout = $this->getLayout();
        $content = $layout->getChild("content");

        $layout->getchild('head')->addCss('product/list.css');

        $productList = $layout->createBlock("catalog/admin_product_list");

        $content->addChild("productList", $productList);
        $layout->toHtml();
    }
}
