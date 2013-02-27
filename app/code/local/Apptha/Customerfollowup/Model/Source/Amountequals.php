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
class Apptha_Customerfollowup_Model_Source_Amountequals extends Mage_Core_Model_Abstract
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'dm', 'label'=>Mage::helper('adminhtml')->__("Doesn't matter")),
            array('value' => 'eq', 'label'=>Mage::helper('adminhtml')->__('Equals to')),
            array('value' => 'gt', 'label'=>Mage::helper('adminhtml')->__('Greater than')),
            array('value' => 'gteq', 'label'=>Mage::helper('adminhtml')->__('Equals or greater than')),
            array('value' => 'lt', 'label'=>Mage::helper('adminhtml')->__('Less than')),
            array('value' => 'lteq', 'label'=>Mage::helper('adminhtml')->__('Equals or less than')),
            array('value' => 'neq', 'label'=>Mage::helper('adminhtml')->__('Not equals to')),

        );
    }

}