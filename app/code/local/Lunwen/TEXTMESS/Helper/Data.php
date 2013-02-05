<?php
/**
 * MGT-Commerce GmbH
 * http://www.mgt-commerce.com
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to info@mgt-commerce.com so we can send you a copy immediately.
 *
 * @category    Mgt
 * @package     Mgt_Base
 * @author      Stefan Wieczorek <stefan.wieczorek@mgt-commerce.com>
 * @copyright   Copyright (c) 2012 (http://www.mgt-commerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Lunwen_TEXTMESS_Helper_Data extends Mage_Core_Helper_Abstract
{


	public function sendingText($phoneNumber, $sms_api, $sms_key, $sms_number, $sendMessage){

		$customerPhoneNumber = $phoneNumber;
 		
                require_once('lib/Twilio/Services/Twilio.php');
                
                $sid = $sms_api; // Your Account SID from www.twilio.com/user/accoun
                $token = $sms_key; // Your Auth Token from www.twilio.com/user/accoun
                $client = new Services_Twilio($sid, $token);
                $message = $client->account->sms_messages->create(
                $sms_number, // From a valid Twilio numbe
                $customerPhoneNumber, // Text this number
                $sendMessage
        ); 
	}	
}

