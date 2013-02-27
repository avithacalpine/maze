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
class Apptha_Customerfollowup_Block_Customerfollowup extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getCustomerfollowup()     
     { 
        if (!$this->hasData('customerfollowup')) {
            $this->setData('customerfollowup', Mage::registry('customerfollowup'));
        }
        return $this->getData('customerfollowup');
        
    }
}