<?php

/**
 * Customer Cron Model that handles points notification emails
 *
 */
class TBT_Rewards_Model_Customer_Cron extends Varien_Object 
{
	const XML_PATH_POINT_SUMMARY_EMAIL_TEMPLATE = 'rewards/display/point_summary_email_template';
    
	public function __construct() 
	{	
	}
	
	/**
     * Customer Cron Model that handles points notification emails
     *
     */
    public function sendPointNotifications()
    {
        if (!Mage::getStoreConfigFlag('rewards/display/allow_points_summary_email')) {
            return $this;
        }
        
        //get all customers that need notification
        $customerCollection = Mage::getModel('rewards/customer')->getCollection()
            ->addAttributeToFilter('rewards_points_notification', array('neq'=>0));
        
        foreach ($customerCollection as $customer) {
            $customer = Mage::getModel('rewards/customer')->load($customer->getId());
            $this->_sendEmail($customer);
        }
        
        return $this;
        
    }
    
    
    /**
     * Send out Point Summary Notification Email
     * 
     * @param TBT_Rewards_Model_Customer $customer
     * @return boolean send successful? 
     */
    private function _sendEmail($customer) 
    {
        $template = Mage::getStoreConfig(self::XML_PATH_POINT_SUMMARY_EMAIL_TEMPLATE, $customer->getStoreId());
        
        /* @var $translate Mage_Core_Model_Translate */
        $translate = Mage::getSingleton('core/translate');
        $translate->setTranslateInline(false);
        /* @var $email Mage_Core_Model_Email_Template */
        $email = Mage::getModel('core/email_template');
        $sender = array(
            'name' => strip_tags(Mage::helper('rewards/expiry')->getSenderName($customer->getStoreId())),
            'email' => strip_tags(Mage::helper('rewards/expiry')->getSenderEmail($customer->getStoreId()))
        );
        $email->setDesignConfig(array(
            'area' => 'frontend',
            'store' => $customer->getStoreId())
        );
        
        $unsubscribeUrl = Mage::getUrl('rewards/customer_notifications/unsubscribe/') . 'customer/' . urlencode(serialize($customer->getId()));
        
        $vars = array(
            'customer_name' => $customer->getName(),
            'customer_email' => $customer->getEmail(),
            'store_name' => $customer->getStore()->getName(),
            'points_balance' => (string) $customer->getPointsSummary(),
            'pending_points' => (string) $customer->getPendingPointsSummary(),
            'has_pending_points' => $customer->hasPendingPoints(),
            'unsubscribe_url' => $unsubscribeUrl
        );
        $email->sendTransactional($template, $sender, $customer->getEmail(), $customer->getName(), $vars);
        $translate->setTranslateInline(true);
        
        return $email->getSentSuccess();
    }
  
}