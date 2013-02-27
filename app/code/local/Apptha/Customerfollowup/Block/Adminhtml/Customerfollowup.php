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
class Apptha_Customerfollowup_Block_Adminhtml_Customerfollowup extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
    $this->_controller = 'adminhtml_customerfollowup';
    $this->_blockGroup = 'customerfollowup';
    $this->_headerText = Mage::helper('customerfollowup')->__('Manage Follow Up Customers');
    $this->_addButtonLabel = Mage::helper('customerfollowup')->__('Add Item');
    parent::__construct();
    $this->_removeButton('add');
  }
}