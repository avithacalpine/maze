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
$installer = $this;
$installer->startSetup();
$installer->run("
-- DROP TABLE IF EXISTS {$this->getTable('customerfollowup')};
CREATE TABLE {$this->getTable('customerfollowup')} (
  `customerfollowup_id` int(11) unsigned NOT NULL auto_increment,
  `customer_name` varchar(255) NOT NULL default '',
  `customer_email` varchar(255) NOT NULL default '',
  `order_id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `amount_in_cart` int(11) NOT NULL,  
  `created_time` datetime NULL,
  `update_time` timestamp NULL,
  PRIMARY KEY (`customerfollowup_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
    ");
$installer->endSetup(); 