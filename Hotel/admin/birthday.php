<?php
include('sms.php');
    $conn = new PDO('mysql:host=localhost;dbname=application', 'root', '');
    $today = date("m.d.y");    
    $sqlb = "SELECT `first_name`, `last_name`, `phone`  FROM `members` WHERE Birthday = '$today'";               
    $userz = $conn->query($sqlb);

    foreach ($userz as $row) {   
        $first_name = $row['first_name'];
        $lastname = $row['last_name'];
        $cell= $row['phone'];
        
        $message ='Avani Hotel and Resorts Wish you a Happy Birthday '.$first_name.''.$last_name;
        echo 'Todays is'.$name.' '.$surename.' birthday'; 
     $status = httpRequest("http://41.205.135.19:9501/api?action=sendmessage&username=admin&password=Lex@Admin2007&recipient=".urlencode($cell)."&messagetype=SMS:TEXT&messagedata=".urlencode($message));
                        
    }    
?>