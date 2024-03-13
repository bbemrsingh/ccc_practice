<?php
class Sales_Controller_Quote extends Core_Controller_Front_Action
{
    public function addAction()
    {

        // $id = $this->getRequest()->getParams('product_id');
        // $qty = $this->getRequest()->getParams('quantity'); 
        // $request = ['product_id' => $id, 'qty' => $qty];
        $request = $this->getRequest()->getParams('cart');
        $quote = Mage::getSingleton("sales/quote")
            ->addProduct($request);
        $this->setRedirect('catalog/category/view');

    }
    public function deleteAction()
    {
        $quoteId = $this->getRequest()->getParams('quote_id');
        $itemId = $this->getRequest()->getParams('item_id');

        $request = ['quote_id' => $quoteId, 'item_id' => $itemId];
        $quote = Mage::getSingleton("sales/quote")
            ->deleteProduct($request);

        $this->setRedirect('cart/cart/view');
    }

    public function updateAction()
    {
        $request = $this->getRequest()->getParams('update_item');

        $quote = MAge::getSingleton("sales/quote")
            ->updateProduct($request);

        $this->setRedirect('cart/cart/view');
    }

    // public function editAction()
    // {
    //     $this->linkActionProceed();
    // }

    // public function postdataAction()
    // {
    //     $this->postdataActionProceed();
    // }

}