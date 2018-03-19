<?php

require('PHPMailer-master/src/PHPMailer.php');

     $to = $email;
     $from = "support@lexconsult.na";
     $subject ="Room Booking";
     $message = "Hello '$username',\n Your room no. ".$roomNumber." \n";
     $message = "has been successfully booked, thank you for choosing AVANI\n";
     if(mail($to,$from,$message)){
         echo "Message have been successfully sent!";
     }else{
         echo "Error occured, message could not be sent!";
     }

?>