<?php  
 session_start();  
 if(isset($_SESSION["user"]))  
 {  
      header("location:member.php");  
 }  
 
 ?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>AVANI HOTEL &amp; CASINO LOGIN</title>
  
  
     <link rel="icon" href="assets/img/avani.png">
      <link rel="stylesheet" href="css/style.css">

  
</head>
   <center> 
<div class="top" style="background-image:url(../images/VWIN_Dunes_Lunch_1920x1280.jpg)"><h3><a href="../index.php"><img src="assets/img/avaniMember.png"></a></h3></div></center>
<body style="background-image:url(../images/VWIN_Dunes_Lunch_1920x1280.jpg)">
 

 <div class="container">

<br>
<br>
<br>
<br>
      <div id="login"><!--beginning of login-->

        <form method="post">

          <fieldset class="clearfix">

            <p><span class="fontawesome-user"></span><input type="text"  name="user" value="Username" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fontawesome-lock"></span><input type="password" name="pass"  value="Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
            <p><input type="submit" style="background-color:purple" name="sub"  value="Login"></p>
              <h5><a href="register.php" style="color:white font-weight:bolder; font-family:verdana">Not a member yet?</a></h5>
              <h5><a href="../index.php" style="color:white font-weight:bolder; font-family:verdana">Back to home</a></h5>
          </fieldset>

        </form>      

      </div> <!-- end login -->

    </div><!--end of container tag-->
    
  
  
</body>
</html>

<?php
include('functions/memberlogin.php');
?>
