<?php
class Cart_Controller_Cart extends Core_Controller_Front_Action
{
    public function viewAction()
    {
        $layout = $this->getLayout();
        $layout->getchild('head')->addCss('cart.css');
        $cart = $layout->createBlock('cart/cart');
        $layout->getChild('content')->addChild('cart', $cart);
        $layout->toHtml();
    }
}