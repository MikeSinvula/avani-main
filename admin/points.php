<?php
include("db.php");

$bronze = 0.2;
$silver = 0.3;
$gold = 0.4;
$platnium = 0.5;
$titanium = 0.6;
$points= 0;


if(isset($_POST['submit']))
{

    $rsql ="select * from room";

    $rre= mysqli_query($con,$rsql);

    $type = $_POST['troom'];

    if($type == "Superior Room"  ){
    $points= $points + $titanium;

}
if($type == "Guest House"){
    $points= $points + $gold;

}
if($type == "Deluxe Room"  ){
    $points= $points + $platnium;

}
if($type == "Single Room"  ) {
    $points = $points + $bronze;

}
    $newpointssql ="INSERT INTO `members`(points) VALUES ('$points')";
    $po= mysqli_query($con,$newpointssql);
}






