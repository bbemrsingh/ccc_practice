<?php

class Catalog_Controller_Product extends Core_Controller_Front_Action
{
    //indexAction function here displayes form.phtml file when we type in browser address bar internship/mvc_project/catalog/product


    public function newAction()
    {
        $layout = $this->getLayout();
        $child = $layout->getChild('content');

        $productForm = $layout->createBlock('catalog/admin_product');
        $child->addChild('form', $productForm);
        $layout->toHtml;
    }

    public function indexAction()
    {
        $layout = $this->getLayout();
        $this->_layout->setTemplate("catalog/form.phtml");
        $layout->toHtml();
    }

    public function saveAction()
    {
        $data = $this->getRequest()->getParams('product');
        $product = Mage::getModel('catalog/product')
            ->setData($data);
        $product->save();
        echo '<pre>';
        print_r($product);
        // $request = Mage::getModel("core/request");
        // $data = $request->getPostData('product');
        // $product_model = Mage::getModel("catalog/product");
        // $product_model->setData($data)->save();
    }

    public function insert($table_name, $data)
    {
    }
}
