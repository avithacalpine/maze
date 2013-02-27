<?php

/**
 * @name         :  Apptha Customer Follow Up
 * @version      :  1.0
 * @author       :  Apptha - http://www.apptha.com
 * @copyright    :  Copyright (C) 2011 Powered by Apptha
 * @license      :  http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @Creation Date:  August 2012
 *
 * */
class Apptha_Customerfollowup_IndexController extends Mage_Core_Controller_Front_Action {

    /**
     * fucntion to redirect cart page or account page
     */
    public function cartpageAction() {
        if (!Mage::getSingleton('customer/session')->isLoggedIn()) {  // if not logged in
            Mage::getSingleton('customer/session')->setBeforeAuthUrl(Mage::getBaseurl() . "customer/account");
            //redirect to login page
            $this->_redirectUrl(Mage::helper('customer')->getLoginUrl());
        } else {
            $session = Mage::getSingleton('checkout/session');//get session
            $cart_items = $session->getQuote()->getAllItems();//get cart items in the session for logged in customer
            if ($cart_items) {
                //items in cart rediect to cart page
                $this->_redirectUrl(Mage::getBaseUrl() . "checkout/cart");
            } else {
                //no items in cart means redirect to login page
                $this->_redirectUrl(Mage::getBaseUrl() . "customer/account");
            }
        }
    }

}