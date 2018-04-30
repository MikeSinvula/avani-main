<?php  
 session_start();  
 if(isset($_SESSION["user"]))  
 {  
      header("location:login.php");  
 }  
 
 ?>
<?php
   include('db.php');


   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myfirstname = mysqli_real_escape_string($con,$_POST['fname']);
      $mylastname = mysqli_real_escape_string($con,$_POST['lname']); 
      $myphone = mysqli_real_escape_string($con,$_POST['phone']); 
      $myusername = mysqli_real_escape_string($con,$_POST['user']); 
        $mybirthday = mysqli_real_escape_string($con,$_POST['dob']); 
      $mypassword = mysqli_real_escape_string($con,$_POST['pass']); 

   
       
    
      
     $sql="INSERT INTO `members`(`first_name`, `last_name`, `phone`, `username`, `Birthday`, `password`) VALUES ('$myfirstname','$mylastname','$myphone','$myusername','$mybirthday','$mypassword')";
       
      $result = mysqli_query($con,$sql);
       
         $today = date("m.d.y");    
    $sqlb = "SELECT `first_name`, `last_name`, `phone`  FROM `members` WHERE Birthday = '$today'";               
    $userz = mysqli_query($con,$sqlb);

    foreach ($userz as $row) {   
        $myfirstname = $row['first_name'];
        $mylastname = $row['last_name'];
        $myphone= $row['phone'];
        
       // $message ='Avani Hotel and Resorts Wish you a Happy Birthday '.$myfirstname.''.$mylast_name;
        echo 'Todays is'.$first_name.' '.$lastname.' birthday'; 
     //$status = httpRequest("http://41.205.135.19:9501/api?action=sendmessage&username=admin&password=Lex@Admin2007&recipient=".urlencode($myphone)."&messagetype=SMS:TEXT&messagedata=".urlencode($message));
                        
    }    
      
 header("location: login.php");
 
} 
         
         
      
   
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>AVANI HOTEL &amp; CASINO REGISTRATION</title>
  
  
     <link rel="icon" href="assets/img/avani.png">
      <link rel="stylesheet" href="css/style.css">

  
</head>
  
<div class="top" style="background-image:url(../images/3.png)"><h3><a href="../index.php"><img src="assets/img/avaniRegistration.png"></a></h3></div>
<body style="background-image:url(../images/3.png)">
 

 <div class="container">


      <div id="login">

        <form method="post">

          <fieldset class="clearfix">

            <p><span style="background-color:purple; color:white" class="fontawesome-user"></span><input style="background-color:white" type="text"  class="form-control"  name="fname" placeholder="Firstname"  required></p> <!-- JS because of IE support; better: placeholder="Firstname" -->
            <p><span style="background-color:purple; color:white" class="fontawesome-user"></span><input style="background-color:white" type="text" name="lname"  placeholder="Lastname"  required></p> <!-- JS because of IE support; better: placeholder="Lastname" -->
            <p><span style="background-color:purple; color:white" class="fontawesome"></span><input style="background-color:white" type="number" class="form-control" name="phone"  placeholder="Phone NO:"  required></p><br>
            
              <p><span style="background-color:purple; color:white" class="fontawesome-user"></span><input style="background-color:white" type="text"  name="user" placeholder="Username"  required></p> <!-- JS because of IE support; better: placeholder="Username" -->
                <p><span style="background-color:purple; color:white">DOB</span><input style="background-color:white" type="date"  name="dob" placeholder="Date Of Birth" style="background-color:#3a4149; color:#505559"  required></p> <!-- JS because of IE support; better: placeholder="Date Of Birth" --><br>
            <p><span style="background-color:purple; color:white" class="fontawesome-lock"></span><input style="background-color:white" type="password" name="pass"  placeholder="Password"  required></p>
              <p><span style="background-color:purple; color:white" class="fontawesome-lock"></span><input style="background-color:white" type="password" name="pass1"  placeholder="Confirm Password"  required></p>
              <!-- JS because of IE support; better: placeholder="Password" -->
            <p><input type="submit" style="background-color:purple" name="sub"  value="Register"></p><a href="login.php">Already a member?</a>

          </fieldset>

        </form>

       

      </div> <!-- end login -->

    </div>
    
  
  
</body>
</html>


