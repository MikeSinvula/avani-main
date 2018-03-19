<?php  
 session_start();  
 if(isset($_SESSION["user"]))  
 {  
      header("location:login.php");  
 }  
 
 ?>
<?php
   include('db.php');
  include('sms.php');
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myfirstname = mysqli_real_escape_string($con,$_POST['fname']);
      $mylastname = mysqli_real_escape_string($con,$_POST['lname']); 
      $myphone = mysqli_real_escape_string($con,$_POST['phone']); 
      $myusername = mysqli_real_escape_string($con,$_POST['user']); 
        $mybirthday = mysqli_real_escape_string($con,$_POST['dob']); 
      $mypassword = mysqli_real_escape_string($con,$_POST['pass']); 
       
       dd(var_dump(mysqli_real_escape_string($con,$_POST['phone'])))
       
    
      
     $sql="INSERT INTO `members`(`first_name`, `last_name`, `phone`, `username`, `Birthday`, `password`) VALUES ('$myfirstname','$mylastname','$myphone','$myusername','$mybirthday','$mypassword')";
       
      $result = mysqli_query($con,$sql);
      
 
//header("location: login.php");
 
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
  
<!--<div class="top" style="background-image:url(../images/3.png)"><h3><a href="../index.php"><img src="assets/img/avaniRegistration.png"></a></h3></div>-->
<!--<body style="background-image:url(../images/3.png)">-->
 

 <div class="container">


      <div id="login">

        <form method="post">

          <fieldset class="clearfix">

            <p><span class="fontawesome-user"></span><input type="text"  name="fname" placeholder="Firstname"  required></p> <!-- JS because of IE support; better: placeholder="Firstname" -->
            <p><span class="fontawesome-user"></span><input type="text" name="lname"  placeholder="Lastname"  required></p> <!-- JS because of IE support; better: placeholder="Lastname" -->
            <p><span class="fontawesome"></span><input type="number" class="form-control" name="phone"  placeholder="Phone NO:"  required></p> <!-- JS because of IE support; better: placeholder="PhoneNo" -->
            
              <p><span class="fontawesome-user"></span><input type="text"  name="user" placeholder="Username"  required></p> <!-- JS because of IE support; better: placeholder="Username" -->
                <p><span>DOB</span><input type="date"  name="dob" placeholder="Date Of Birth" style="background-color:#3a4149; color:#505559"  required></p> <!-- JS because of IE support; better: placeholder="Date Of Birth" --><br>
            <p><span class="fontawesome-lock"></span><input type="password" name="pass"  placeholder="Password"  required></p>
              <p><span class="fontawesome-lock"></span><input type="password" name="pass1"  placeholder="Confirm Password"  required></p>
              <!-- JS because of IE support; better: placeholder="Password" -->
            <p><input type="submit" style="background-color:purple" name="sub"  value="Register"></p><a href="login.php">Already a member?</a>

          </fieldset>

        </form>

       

      </div> <!-- end login -->

    </div>
    
  
  
</body>
</html>


