<?php  
session_start(); 
include('db.php');

include('points.php');



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
                        <li><a href="points.php"><i class="fa fa-user fa-fw"></i> Points</a>
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
                        <a href="member.php"><i class="fa fa-dashboard"></i> Status</a>
                    </li>
                    
					<li>
                        <a href="reservation.php"><i class="fa fa-bar-chart-o"></i> Book reservation</a>
                    </li>
                    
                     
					<li>
                        <a  style="background-color:#b59146"  href="#"><i class="fa fa-bar-chart-o"></i> View reservation</a>
                    </li>
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                   


                    
					</ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           <small>MY Reservation</small>
                        </h1>
                    </div>
                </div> 
                 
                                 
            <?php
						include ('db.php');
               
						$sql = "SELECT * FROM `roombook` WHERE `email`='$_SESSION[user]'";
						$re = mysqli_query($con,$sql)
				?>
                
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>User ID</th>
											<th>User name</th>
                                            <th>Password</th>
                                            
											<th>Account</th>
											
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
									<?php
										while($row = mysqli_fetch_array($re))
										{
										
											$id = $row['id'];
											$us = $row['username'];
											$ps = $row['password'];
											if($id % 2 ==0 )
											{
												echo"<tr class='gradeC'>
													<td>".$id."</td>
													<td>".$us."</td>
													<td>".$ps."</td>
													
													<td><button class='btn btn-primary btn' data-toggle='modal' data-target='#myModal'>
															 Update 
													</button></td>";
											}
											else
											{
												echo"<tr class='gradeU'>
													<td>".$id."</td>
													<td>".$us."</td>
													<td>".$ps."</td>
													
													<td><button class='btn btn-success' data-toggle='modal' data-target='#myModal'>
                                                    Edit 
                                                    </button></td>";
											
											}
										
										}
										
									?>
			
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