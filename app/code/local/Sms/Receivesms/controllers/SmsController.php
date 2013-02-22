<?php

class Sms_Receivesms_SmsController extends Mage_Core_Controller_Front_Action
{
    public function smsAction(){

     $postData = Mage::app()->getRequest()->getPost();

     if (isset($postData['From'])) {

     	Mage::log(isset($postData['From']));

	 }


    }
}