<?php  
session_start(); 

include('db.php');
include('points.php');

$today = date("m.d.y");    
    $sqlb = "SELECT `first_name`, `last_name`, `phone`  FROM `members` WHERE Birthday = '$today'";               
    $userz = mysqli_query($con,$sqlb);

    foreach ($userz as $row) {   
        $first_name = $row['first_name'];
        $lastname = $row['last_name'];
        $cell= $row['phone'];
        
      //  $message ='Avani Hotel and Resorts Wish you a Happy Birthday '.$first_name.''.$last_name;
       // echo 'Todays is'.$first_name.' '.$lastname.' birthday';
    // $status = httpRequest("http://41.205.135.19:9501/api?action=sendmessage&username=admin&password=Lex@Admin2007&recipient=".urlencode($cell)."&messagetype=SMS:TEXT&messagedata=".urlencode($message));
                        
    } 

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
                <a class="navbar-brand" href="member.php">  <h6 style="background-color:"><b>WELCOME</b> <?php echo $_SESSION["user"]; ?></h6> </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                       <i style="color:#b59146" class="fa fa-user fa-fw"></i> <i style="color:#b59146" class="fa fa-caret-down"></i><span style="color:#b59146">Points <?php echo $points;?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="membersetting.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="points.php"><i style="color:#b59146" class="fa fa-user fa-fw"></i> Points</a>
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
                        <a href="reservation.php"><i class="fa fa-bar-chart-o"></i> Book reservation</a>
                    </li>
                    
                     <li>
                        <a style="background-color:#b59146" href="#"><i class="fa fa-bar-chart-o"></i>Points</a>
                    </li>
                    
                    
					
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                   


                    
					</ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                             <img src="assets/img/avani.png" style="height:100px;"> <small>Home </small><br>
                            <small>Remaining balance: <?php echo $points;?></small>
                        </h1>
                        <h2>Earn Points Now</h2>
                        <h5>Don't miss out on a chance to earn points when you book in advance</h5>
                        <img src="assets/img/cover1.jpg" style="height:100%; width:100%">
                    </div>
                </div>
                <!-- /. ROW  -->
				<?php
						include ('db.php');
						$sql = "select * from roombook";
						$re = mysqli_query($con,$sql);
						$c =0;
						while($row=mysqli_fetch_array($re) )
						{
								$new = $row['stat'];
								$cin = $row['cin'];
								$id = $row['id'];
								if($new=="Not Confirm")
								{
									$c = $c + 1;
									
								
								}
						
						}
						
									
									

						
				?>

					
            </div>
            
			
				<!-- DEOMO-->
			
                        </div>
				
				<!--DEMO END-->
				
										
                    

                <!-- /. ROW  -->
				
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