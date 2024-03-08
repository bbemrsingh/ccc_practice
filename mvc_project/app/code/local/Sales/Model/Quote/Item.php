<?php
class Sales_Model_Quote_Item extends Core_Model_Abstract
{
    public function init()
    {
        $this->_modelClass = 'sales/quote_item';
        $this->_resourceClass = 'Sales_Model_Resource_Quote_Item';
        $this->_collectionClass = 'Sales_Model_Resource_Collection_Quote_Item';
    }
    public function getProduct()
    {
        return Mage::getModel('catalog/product')->load($this->getProductId());
    }

    public function _beforeSave()
    {
        if ($this->getProductId()) {
            $price = $this->getProduct()->getPrice();
            $this->addData('price', $price); // _data ke ander price (key-value) pair add kar raha hai  
            $this->addData('row_total', $price * $this->getQty());
        }
    }

    public function addItem(Sales_Model_Quote $quote, $productId, $qty)
    {
        $item = $this->getCollection()
            ->addFieldToFilter('product_id', $productId)
            ->addFieldToFilter('quote_id', $quote->getId())
            ->getFirstItem()
        ;
        // row which has both product and quote id matching will be fetched and stored in $item.
        if ($item) {
            $qty = $qty + $item->getQty();
        }
        $this->setData(
            [
                'quote_id' => $quote->getId(),
                'product_id' => $productId,
                'qty' => $qty,
            ]
        );
        if ($item) {
            $this->setId($item->getId()); // updating fields of table on same id (agar nahi karenge to new row ki entry ho jayegi table me)
        }
        $this->save();
        return $this;
    }
    public function updateItem(Sales_Model_Quote $quote, $productId, $qty)
    {
        $item = $this->getCollection()
            ->addFieldToFilter('product_id', $productId)
            ->addFieldToFilter('quote_id', $quote->getId())
            ->getFirstItem()
        ;
        $this->setData(
            [
                'quote_id' => $quote->getId(),
                'product_id' => $productId,
                'qty' => $qty,
            ]
        );

        if ($item) {
            $this->setId($item->getId());
        }

        $this->save();
        return $this;
    }
    public function deleteItem(Sales_Model_Quote $quote, $productId)
    {
        $item = $this->getCollection()
            ->addFieldToFilter('product_id', $productId)
            ->addFieldToFilter('quote_id', $quote->getId())
            ->getFirstItem()
        ;
        // print_r($item);

        if ($item->getId()) {
            $item->delete();
        }
        return $this;
    }
}
