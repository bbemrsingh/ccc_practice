<?php
class Cart_Block_Cart extends Core_Block_Template
{
    public function __construct()
    {
        $this->setTemplate('cart/cartt.phtml');
    }

    public function getItemList()
    {
        $quoteId = Mage::getSingleton("core/session")->get('quote_id');
        return Mage::getModel('sales/quote_item')->getCollection()->addFieldToFilter('quote_id', $quoteId);

    }
    public function getProductList($productId)
    {
        return Mage::getModel('catalog/product')->getCollection()->addFieldToFilter('product_id', $productId);

    }

    public function getGrandTotal()
    {
        $quoteId = Mage::getSingleton("core/session")->get('quote_id');
        return Mage::getModel('sales/quote')->getCollection()->addFieldToFilter('quote_id', $quoteId);
    }



}