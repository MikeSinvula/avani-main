<?php
session_start();

include('db.php');
include('points.php');
require_once('functions/smsfunction.php');


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
                    <a style="background-color:#b59146" href="#"><i class="fa fa-bar-chart-o"></i> Weekly news</a>
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
                        <img src="assets/img/avani.png" style="height:100px;"> <small>Weekly NewsLetter </small><br>

                        <!-- contact -->
                        <section class="contact-w3ls" id="contact">
                            <div class="container">
                                <div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
                                    <div class="contact-agileits">
                                        <h4></h4>
                                        <p class="contact-agile2">Sign Up For Our News Letters</p>
                                        <form  method="post" name="sentMessage" id="contactForm" >
                                            <div class="control-group form-group">

                                                <label class="contact-p1">Full Name:</label>
                                                <input type="text" class="form-control" name="name" id="name" required >
                                                <p class="help-block"></p>

                                            </div>
                                            <div class="control-group form-group">

                                                <label class="contact-p1">Phone Number:</label>
                                                <input type="number" class="form-control" name="phone" id="phone" required >
                                                <p class="help-block"></p>

                                            </div>
                                            <div class="control-group form-group">

                                                <label class="contact-p1">Email Address:</label>
                                                <input type="email" class="form-control" name="email" id="email" required >
                                                <p class="help-block"></p>

                                            </div>


                                            <input type="submit" name="sub" value="Send Now" class="btn btn-primary">
                                        </form>
                                        <?php
                                        if(isset($_POST['sub']))
                                        {
                                            $name =$_POST['name'];
                                            $cell = $_POST['phone'];
                                            $email = $_POST['email'];
                                            $approval = "Not Allowed";
                                            $sql = "INSERT INTO `contact`(`fullname`, `phoneno`, `email`,`cdate`,`approval`) VALUES ('$name','$cell','$email',now(),'$approval')" ;


                                            if(mysqli_query($con,$sql))
                                                send_sms("thank you for signing up for the Avani news feed, we will get back to shortly via sms","thank you for signing up for the Avani news feed, we will get back to shortly via sms",$cell);

                                        }
                                        ?>
                                    </div>
                                </div>
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