<?php
require('sms.php');

/**
 * Created by PhpStorm.
 * User: mikes.
 * Date: 4/24/2018
 * Time: 11:46 AM
 */

/**
 * @param $message
 * @param $alert_message
 * @param $cell
 */
function send_sms($message, $alert_message, $cell){
    echo "<script type='text/javascript'> alert($alert_message)</script>";
//    $message = "Booking Request successfully sent for further processing, Confirmation Message will be sent to you shortly ";
    $status = httpRequest("http://41.205.135.19:9501/api?action=sendmessage&username=admin&password=Lex@Admin2007&recipient=".urlencode($cell)."&messagetype=SMS:TEXT&messagedata=".urlencode($message));
}

//send_sms('testing', 'test', '+264816190776');