<?php
class Vignates_Test_IndexController extends Mage_Core_Controller_Front_Action
{
   public function indexAction ()
   {
      $this->loadLayout();
      $this->renderLayout();
   }
   public function addAction ()
   {
     echo 'test mymethod';
    }
}