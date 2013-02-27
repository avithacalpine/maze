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
class Apptha_Customerfollowup_Helper_Data extends Mage_Core_Helper_Abstract {

    /*function to check if customer follow up enabled */
    public function isCustomerfollowupEnabled() {
        return Mage::getStoreConfig('customerfollowup/general/activate_apptha_customerfollowup');
    }    
}