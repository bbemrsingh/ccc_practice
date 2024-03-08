<?php
class Catalog_Controller_Product extends Core_Controller_Front_Action
{

    public function ViewAction()
    {
        $id = $this->getRequest()->getParams('id');
        if ($id) {
            $layout = $this->getLayout();
            $layout->getchild('head')->addCss('product/view.css');
            $productView = $layout->createBlock("catalog/admin_product_view");
            $layout->getchild('content')->addChild('productView', $productView);
            $layout->toHtml();

            // $productModel = Mage::getSingleton("catalog/product")->getCollection()
            //     ->addFieldToFilter('product_id', $id)
            //     ->getData($id);
            // print_r($productModel);
        }
    }
}