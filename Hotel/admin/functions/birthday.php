<?php

include('db.php');
include('sms.php');


 ate_default_timezone_set("Asia/Calcutta");
$date = date("Y-m-d"); //Today date 
$birth=substr("$date",5);
$result = mysqli_query($con,"SELECT * FROM members where Birthday='$birth' and phone= '$cell'");
									
 $messages = stripcslashes('Avani Hotel and Resorts wish you a Happy birthday'); 
									
 


     $status = httpRequest("http://41.205.135.19:9501/api?action=sendmessage&username=admin&password=Lex@Admin2007&recipient=".urlencode($cell)."&messagetype=SMS:TEXT&messagedata=".urlencode($message));

?>