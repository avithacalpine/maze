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
class Apptha_Customerfollowup_Block_Adminhtml_Customerfollowup_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
  public function __construct()
  {
      parent::__construct();
      $this->setId('customerfollowupGrid');
      $this->setDefaultSort('customerfollowup_id');
      $this->setDefaultDir('ASC');
      $this->setSaveParametersInSession(true);
  }

  protected function _prepareCollection()
  {
      $collection = Mage::getModel('customerfollowup/customerfollowup')->getCollection();
      $this->setCollection($collection);
      return parent::_prepareCollection();
  }

  protected function _prepareColumns()
  {
      $this->addColumn('customerfollowup_id', array(
          'header'    => Mage::helper('customerfollowup')->__('ID'),
          'align'     =>'right',
          'width'     => '50px',
          'index'     => 'customerfollowup_id',
      ));

      $this->addColumn('customer_name', array(
          'header'    => Mage::helper('customerfollowup')->__('Customer Name'),
          'align'     =>'left',
          'index'     => 'customer_name',
      ));

       $this->addColumn('customer_email', array(
          'header'    => Mage::helper('customerfollowup')->__('Customer Email'),
          'align'     =>'left',
          'index'     => 'customer_email',
      ));

       $this->addColumn('order_id', array(
          'header'    => Mage::helper('customerfollowup')->__('Order Id'),
          'align'     =>'left',
          'index'     => 'order_id',
      ));

       $this->addColumn('cart_id', array(
          'header'    => Mage::helper('customerfollowup')->__('Cart Id'),
          'align'     =>'left',
          'index'     => 'cart_id',
      ));

        $this->addColumn('amount_in_cart', array(
          'header'    => Mage::helper('customerfollowup')->__('Amount in cart'),
          'align'     =>'left',
          'index'     => 'amount_in_cart',
      ));	

	  
        $this->addColumn('action',
            array(
                'header'    =>  Mage::helper('customerfollowup')->__('Action'),
                'width'     => '100',
                'type'      => 'action',
                'getter'    => 'getId',
                'actions'   => array(
                    array(
                        'caption'   => Mage::helper('customerfollowup')->__('Send Email'),
                        'url'       => array('base'=> '*/*/sendmail'),
                        'field'     => 'id'
                    )
                ),
                'filter'    => false,
                'sortable'  => false,
                'index'     => 'stores',
                'is_system' => true,
        ));
		
		$this->addExportType('*/*/exportCsv', Mage::helper('customerfollowup')->__('CSV'));
		$this->addExportType('*/*/exportXml', Mage::helper('customerfollowup')->__('XML'));
	  
      return parent::_prepareColumns();
  }

    protected function _prepareMassaction()
    {
        $this->setMassactionIdField('customerfollowup_id');
        $this->getMassactionBlock()->setFormFieldName('customerfollowup');

        $this->getMassactionBlock()->addItem('delete', array(
             'label'    => Mage::helper('customerfollowup')->__('Delete'),
             'url'      => $this->getUrl('*/*/massDelete'),
             'confirm'  => Mage::helper('customerfollowup')->__('Are you sure?')
        ));

        $this->getMassactionBlock()->addItem('send mail', array(
             'label'    => Mage::helper('customerfollowup')->__('Send Mail'),
             'url'      => $this->getUrl('*/*/massMail'),
             'confirm'  => Mage::helper('customerfollowup')->__('Are you sure?')
        ));
        
        return $this;
    }

 

}