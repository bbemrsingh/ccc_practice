<?php
class Cart_Controller_Checkout extends Core_Controller_Front_Action
{
    protected $_customerAllowedAction = [];

    public function checkoutAction()
    {
        $layout = $this->getLayout();
        $layout->getchild('head')->addCss('checkout.css');

        $checkout = $layout->createBlock('cart/checkout');
        $layout->getchild('content')->addChild('checkout', $checkout);
        $layout->toHtml();
    }
}