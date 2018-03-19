<?php  
 session_start();  
 if(isset($_SESSION["user"]))  
 {  
      header("location:home.php");  
 }  
 
 ?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>AVANI HOTEL &amp; CASINO ADMIN</title>
  
  
     <link rel="icon" href="assets/img/avani.png">
      <link rel="stylesheet" href="css/style.css">

  
</head>
   <center> 
<div class="top" style="background-color:#e729f3"><h3><a href="../index.php"><img src="assets/img/avaniwhite.png"></a></h3></div></center>
<body style="background-color:#e729f3">
 

 <div class="container">


      <div id="login">

        <form method="post">

          <fieldset class="clearfix">

            <p><span class="fontawesome-user"></span><input type="text"  name="user" value="Username" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fontawesome-lock"></span><input type="password" name="pass"  value="Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
            <p><input type="submit" style="background-color:purple" name="sub"  value="Login"></p>
              <a href="login.php">Not an Avani staff?</a>
          </fieldset>

        </form>

       

      </div> <!-- end login -->

    </div>
    
  
  
</body>
</html>

<?php
include('functions/adminlogin.php');
?>