<?php

class Sms_Receivesms_SmsController extends Mage_Core_Controller_Front_Action
{
    public function smsAction(){

    // $postData = Mage::app()->getRequest()->getPost();

    // if (isset($postData['From'])) {

     //	Mage::log('Mate go fuck youself'.isset($postData['SmsSid']));

//	 }

	$phonenumber = Mage::app()->getRequest()->getParam('From');

        Mage::log('Mate go fuck youself111'.$phonenumber);


    }
}
