
<?php  
session_start(); 
include('db.php');
include('points.php');
include('sms.php');


if(!isset($_SESSION["user"]))
{
 header("location:login.php");
}
?> 
<?php
include('includes/header.php');
?>

<body>
    
 <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="member.php"> <h6>Welcome <?php echo $_SESSION["user"]; ?></h6> </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i style="color:#b59146" class="fa fa-user fa-fw"></i> <i style="color:#b59146" class="fa fa-caret-down"></i><span style="color:#b59146">Points <?php echo $points; ?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="membersetting.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                       
                        
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="member.php"><i class="fa fa-dashboard"></i> Status</a>
                    </li>
                    
					<li>
                        <a style="background-color:#b59146" href="#"><i class="fa fa-bar-chart-o"></i> Book reservation</a>
                    </li>
                    <li>
                        <a href="viewreservation.php"><i class="fa fa-bar-chart-o"></i> View reservation</a>
                    </li>
                   
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                   


                    
					</ul>

            </div>

        </nav>
       
       
         <div id="page-wrapper">
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            <img src="assets/img/avani.png" style="height:100px;"> <small>BOOKING RESERVATION </small>
                            
                        </h1>
                        
                    </div>
                </div> 
                 
                                
            <div class="row">
                
                <div class="col-md-5 col-sm-5">
                    <div class="panel" style="background-color:#47244b; color:white;">
                        <div class="panel-heading">
                            PERSONAL INFORMATION
                        </div>
                        <div class="panel-body">
						<form name="form" method="post">
                            <div class="form-group">
                                            <label>Title*</label>
                                            <select name="title" class="form-control" required >
												<option value selected ></option>
                                                <option value="Dr.">Dr.</option>
                                                <option value="Miss.">Miss.</option>
                                                <option value="Mr.">Mr.</option>
                                                <option value="Mrs.">Mrs.</option>
												<option value="Prof.">Prof.</option>
												<option value="Rev .">Rev .</option>
												
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>First Name</label>
                                            <input name="fname" class="form-control" required>
                                            
                               </div>
							   <div class="form-group">
                                            <label>Last Name</label>
                                            <input name="lname" class="form-control" required>
                                            
                               </div>
							   <div class="form-group">
                                            <label>Email</label>
                                            <input name="email" type="email" class="form-control" required>
                                            
                               </div>
							   <div class="form-group">
                                            <label>Nationality*</label>
                                            <label class="radio-inline">
                                                <input type="radio" id="ournation" name="nation"  value="Namibian" checked="">Namibian
                                            </label>
                                      
                                   <script>
                             $('#ournation').toggle(function(){
                                 $('#hiding').hide();
                             });
                                       $('#othernation')function(){
                                 $('#hiding').show();
                             });
                                   
                                   </script>
                                            <label class="radio-inline">
                                                <input type="radio" id="othernation" name="nation"  value="Non Namibian ">Non Namibian 
                                            </label>
                         
                                </div>
								<?php

								$countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");

								?>
								<div class="form-group">
                                            <label>Passport Country*</label>
                                            <select id="hiding" name="country" class="form-control" required>
												<option value selected ></option>
                                                <?php
												foreach($countries as $key => $value):
												echo '<option value="'.$value.'">'.$value.'</option>'; //close your tags!!
												endforeach;
												?>
                                            </select>
								</div>
								<div class="form-group">
                                            <label>Phone Number</label>
                                            <input name="phone" type ="text" class="form-control" required>
                                            
                               </div>
					
                        
                  
                </div>
                        </div></div>
                  
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="panel" style="background-color:#47244b; color:white;">
                        <div class="panel-heading">
                            RESERVATION INFORMATION
                        </div>
                        <div class="panel-body">
								<div class="form-group">
                                            <label>Type Of Room *</label>
                                            <select name="troom"  class="form-control" required>
												<option value selected ></option>
                                                <option value="Superior Room">SUPERIOR ROOM</option>
                                                <option value="Deluxe Room">DELUXE ROOM</option>
												<option value="Guest House">GUEST HOUSE</option>
												<option value="Single Room">SINGLE ROOM</option>
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>Bedding Type</label>
                                            <select name="bed" class="form-control" required>
												<option value selected ></option>
                                                <option value="Single">Single</option>
                                                <option value="Double">Double</option>
												<option value="Triple">Triple</option>
                                                <option value="Quad">Quad</option>
												<option value="None">None</option>
                                                
                                             
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>No.of Rooms *</label>
                                            <select name="nroom" class="form-control" required>
												<option value selected ></option>
                                                <option value="1">1</option>
                                              <!--  <option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option> -->
                                            </select>
                              </div>
							 
							 
							  <div class="form-group">
                                            <label>Meal Plan</label>
                                            <select name="meal" class="form-control"required>
												<option value selected ></option>
                                                <option value="Room only">Room only</option>
                                                <option value="Breakfast">Breakfast</option>
												<option value="Half Board">Half Board</option>
												<option value="Full Board">Full Board</option>
												
                                                
                                             
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>Check-In</label>
                                            <input name="cin" type ="date" class="form-control">
                                            
                               </div>
							   <div class="form-group">
                                            <label>Check-Out</label>
                                            <input name="cout" type ="date" class="form-control">
                                            
                               </div>
                       </div>
                        
                    </div>
                </div>
				
				
                <div class="col-md-12 col-sm-12">
                    <div class="well">
                        <h4>HUMAN VERIFICATION</h4>
                        <p>Type Below this code <?php $Random_code=rand(); echo$Random_code; ?> </p><br />
						<p>Enter the random code<br /></p>
							<input  type="text" name="code1" title="random code" />
							<input type="hidden" name="code" value="<?php echo $Random_code; ?>" />
						<input type="submit" name="submit" value="Submit" class="btn btn-success">
						<?php
                        
                                	if(isset($_POST['submit']))
							{ 
							$points=0.5;
							
							$code1=$_POST['code1'];
							$code=$_POST['code']; 
							if($code1!="$code")
							{
							$msg="Invalide code"; 
							}
							else
							{
                               
    
    
							
									$con=mysqli_connect("localhost","root","","application");
									$check="SELECT * FROM roombook WHERE email = '$_POST[email]'";
									$rs = mysqli_query($con,$check);
									$data = mysqli_fetch_array($rs, MYSQLI_NUM);
                                
									if($data[0] > 1) {
										echo "<script type='text/javascript'> alert('User Already in Exists')</script>";
										
									}

									else
									{
                                         $roomNumber=$_POST['nroom'];
    
                                        $cell=$_POST['phone'];
                                        $fname= $_POST['fname'];
                                        $lname= $_POST['lname'];
                                        $email= $_POST['email'];
										$new ="Not Confirm";
										$newUser="INSERT INTO `roombook`(`Title`, `FName`, `LName`, `Email`, `National`, `Country`, `Phone`, `TRoom`, `Bed`, `NRoom`, `Meal`, `cin`, `cout`,`stat`,`nodays`) VALUES ('$_POST[title]','$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[nation]','$_POST[country]','$_POST[phone]','$_POST[troom]','$_POST[bed]','$_POST[nroom]','$_POST[meal]','$_POST[cin]','$_POST[cout]','$new',datediff('$_POST[cout]','$_POST[cin]'))";
                                       


    
										if (mysqli_query($con,$newUser))
										{
										echo "<script type='text/javascript'> alert('An sms has been sent to you regarding your booking, Thank you for choosing Avani Hotel & Resorts')</script>";
                                         $points = $points +0.5;
                                            $message = stripcslashes("Your Booking application has been sent for further processing, Thank you for choosing Avani Hotel & Resorts ");                                          



     $status = httpRequest("http://41.205.135.19:9501/api?action=sendmessage&username=admin&password=Lex@Admin2007&recipient=".urlencode($cell)."&messagetype=SMS:TEXT&messagedata=".urlencode($message));
          $to = $email;
         $subject = "Booking Reservation";
         
         $message = "<b>Your Booking application has been sent for further processing,</b>";
         $message .= "<h1>Thank you for choosing Avani Hotel & Resorts.</h1>";
         
         $header = "From:avani@hotel.com \r\n";
         $header .= "Cc:booking@services.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
    //$to = $email;
     //$from = "avanihotel@resorts.na";
     //$subject ="Reservation Booking";
     //$messages = "Hello '$username',\n Your room no. ".$roomNumber." \n";
     //$messages = "has been successfully booked, thank you for choosing AVANI\n";
     //if(mail($to,$from,$messages)){
         //echo "Message have been successfully sent!";
 //}else{
       //  echo "Error occured, message could not be sent!";
    // }

if(!empty($_POST)){
	extract($_POST);
	$valid = false;
	
   
   
    

    //$to = $email;
    //$from = "support@lexconsult.na";
    //$subject ="Room Booking";
    //$messages = "Hello '$fname','$lname',\n Your room no. ".$roomNumber." \n";
    //$messages = "has been successfully booked, thank you for choosing AVANI\n";
    // if(mail($to,$from,$messages)){
      //   echo "Message have been successfully sent!";
    //}else{
        // echo "Error occured, message could not be sent!";
    // }

}



											
										
										else
										{
											echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
											
										}
									}

							$msg="Your code is correct";
							}
                                    }
                                    }
							?>
      
       
     
							
                    </div>
                </div>
            </div>
           
                
                </div>
                    </div>
                    
            </div>
				
					</div>
			 <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <?php
    include('includes/scripts.php');    
    ?>
    
   
</body>
</html>
