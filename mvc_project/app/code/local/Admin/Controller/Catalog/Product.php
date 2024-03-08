<?php
class Admin_Controller_Catalog_Product extends Core_Controller_Admin_Action
{

    protected $_allowedAction = ['list'];

    public function formAction()
    {
        $layout = $this->getLayout();
        // $layout becomes object of core_Block_layout 
        //and constructor of this layout file will also get executed
        $layout->getChild('head')->addCss('product/form.css');

        $child = $layout->getChild('content');

        $productForm = $layout->createBlock('catalog/admin_product_form');
        // here we have got location of a file in productForm variable
        $child->addChild('form', $productForm);

        // now if we do getchild('form') in content.phtml file than we can view form in content area.
        $layout->toHtml();
    }

    public function deleteAction()
    {
        $id = $this->getRequest()->getParams("id");
        $product = Mage::getModel('catalog/product')->load($id);
        $product->setId($id)->delete();
        header('Location: /internship/mvc_project/admin/catalog_product/list ');
    }


    /**The saveAction function saves product data from a request and prints the product object.*/
    public function saveAction()
    {
        $data = $this->getRequest()->getParams('product');
        $product = Mage::getModel('catalog/product');
        $product->setData($data)->save();
        // print_r($product);
        header('Location: /internship/mvc_project/admin/catalog_product/list ');
    }


    /* The listAction creates a product list block and adds it to the content section
     * of the layout with associated CSS styling.*/
    public function listAction()
    {
        $layout = $this->getLayout(); //returns Core_Block_Layout
        $content = $layout->getChild("content"); //returns value stored in _Child['content']

        $layout->getchild('head')->addCss('product/list.css');

        $productList = $layout->createBlock("catalog/admin_product_list"); //returns list.php file
        $content->addChild("productList", $productList);
        $layout->toHtml();
    }
    // public function ViewAction()
    // {
    //     $id = $this->getRequest()->getParams('id');
    //     if ($id) {
    //         $layout = $this->getLayout();
    //         $layout->getchild('head')->addCss('product/view.css');
    //         $productView = $layout->createBlock("catalog/admin_product_view");
    //         $layout->getchild('content')->addChild('productView', $productView);
    //         $layout->toHtml();

    //         // $productModel = Mage::getSingleton("catalog/product")->getCollection()
    //         //     ->addFieldToFilter('product_id', $id)
    //         //     ->getData($id);
    //         // print_r($productModel);
    //     } else {
    //         $this->listAction();
    //     }

    // }
}
