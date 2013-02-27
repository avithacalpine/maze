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
class Apptha_Customerfollowup_Model_Mysql4_Customerfollowup extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the customerfollowup_id refers to the key field in your database table.
        $this->_init('customerfollowup/customerfollowup', 'customerfollowup_id');
    }
}