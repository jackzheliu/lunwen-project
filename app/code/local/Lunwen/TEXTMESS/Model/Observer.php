<?php
class Lunwen_TEXTMESS_Model_Observer extends Mage_Core_Model_Abstract
{
    public function sendtext($observer)
    {

    	//get all the info first
    	$enable_sms_checkout = Mage::getStoreConfig('lunwen_textmess/general/enable_sms_checkout'); 
    	$enable_sms_status = Mage::getStoreConfig('lunwen_textmess/general/enable_sms_status');
    	$enable_comments = Mage::getStoreConfig('lunwen_textmess/general/enable_comments');
    	$owner_phonenumber = Mage::getStoreConfig('lunwen_textmess/settings/owner_phonenumber');
    	$checkout_message = Mage::getStoreConfig('lunwen_textmess/general/checkout_message');
    	$sms_api = Mage::getStoreConfig('lunwen_textmess/settings/sms_api');
    	$sms_key = Mage::getStoreConfig('lunwen_textmess/settings/sms_key');
    	$sms_number = Mage::getStoreConfig('lunwen_textmess/settings/sms_number');

        $ownercontrol_messagemyself = Mage::getStoreConfig('lunwen_textmess/ownercontrol/ownercontrol_messagemyself');
        $ownercontrol_statusChange  = Mage::getStoreConfig('lunwen_textmess/ownercontrol/ownercontrol_statusChange');
        $ownercontrol_commitsubmit  = Mage::getStoreConfig('lunwen_textmess/ownercontrol/ownercontrol_commitsubmit');



    	if ($enable_sms_checkout){

    		$event = $observer->getEvent();
    		$orderID = $event->getOrderIds();
 			$order=Mage::getModel('sales/order')->load($orderID);
 			$customerPhoneNumber = '+44'.$order->getShippingAddress()->getTelephone();

 			//send a message to the customer
 			$sendInfoText = Mage::helper('lunwen_textmess')->sendingText($customerPhoneNumber,$sms_api, $sms_key, $sms_number, $checkout_message);
 			//send a message to the store owner
 			$sendInfoText = Mage::helper('lunwen_textmess')->sendingText($owner_phonenumber,$sms_api, $sms_key, $sms_number, $ownercontrol_messagemyself);

    	}

          public function textStatus($observer)
        {
        $enable_sms_status = Mage::getStoreConfig('lunwen_textmess/general/enable_sms_status');
        $ownercontrol_statusChange  = Mage::getStoreConfig('lunwen_textmess/ownercontrol/ownercontrol_statusChange');    
        $enable_comments = Mage::getStoreConfig('lunwen_textmess/general/enable_comments');


        if($enable_comments){    

            $event = $observer->getEvent();
            $orderID = $event->getOrderIds();
            $order=Mage::getModel('sales/order')->load($orderID);
            $customerPhoneNumber = '+44'.$order->getBillingAddress()->getTelephone();
            $orderStatus = $order->getStatus();

            $message = 'Hi Dear Customer, you order status has changed'.$orderStatus;

            $sendInfoText = Mage::helper('lunwen_textmess')->sendingText($customerPhoneNumber,$message);
        }
        return $this;
    }


    	



 		
        return $this;
    }
}
