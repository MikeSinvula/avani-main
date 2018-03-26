
<?php
include('includes/invoice.php');
?>
	
	
	
	
	<?php
	ob_start();	
	include ('db.php');
        include('points.php');
	$pid = $_GET['pid'];
	
	
	
	$sql ="select * from payment where id = '$pid' ";
	$re = mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($re))
	{
		$id = $row['id'];
		$title = $row['title'];
		$fname = $row['fname'];
		$lname = $row['lname'];
		$troom = $row['troom'];
		$bed = $row['tbed'];
		$nroom = $row['nroom'];
		$cin = $row['cin'];
		$cout = $row['cout'];
		$meal = $row['meal'];
		$ttot = $row['ttot'];
		$mepr = $row['mepr'];
		$btot = $row['btot'];
		$fintot = $row['fintot'];
		$days = $row['noofdays'];
		
		
		
	
	}
	
									$type_of_room = 0;       
									if($troom=="Superior Room")
									{
										$type_of_room = 3200 * $points;
									$points= $points - 0.2;
									}
									else if($troom=="Deluxe Room")
									{
										$type_of_room = 2200 * $points;
                                        $points= $points - 0.2;
									}
									else if($troom=="Guest House")
									{
										$type_of_room = 1800 * $points;
                                        $points= $points - 0.2;
									}
									else if($troom=="Single Room")
									{
										$type_of_room = 1500 * $points;
                                        $points= $points - 0.2;
									}
									
									if($bed=="Single")
									{
										$type_of_bed = $type_of_room * 1/100;
									}
									else if($bed=="Double")
									{
										$type_of_bed = $type_of_room * 2/100;
									}
									else if($bed=="Triple")
									{
										$type_of_bed = $type_of_room * 3/100;
									}
									else if($bed=="Quad")
									{
										$type_of_bed = $type_of_room * 4/100;
									}
									else if($bed=="None")
									{
										$type_of_bed = $type_of_room * 0/100;
									}
									
									if($meal=="Room only")
									{
										$type_of_meal=$type_of_bed * 0;
									}
									else if($meal=="Breakfast")
									{
										$type_of_meal=$type_of_bed * 2;
									}else if($meal=="Half Board")
									{
										$type_of_meal=$type_of_bed * 3;
									
									}else if($meal=="Full Board")
									{
										$type_of_meal=$type_of_bed * 4;
									}
	
	?>
		<header>
           
			<h1 style="background-color:purple;">Invoice</h1>
			<address >
				<p>AVANI HOTEL &amp; CASINO,</p>
				<p>Gustav Voigts Centre, 129 Independence Avenue,  <br>Windhoek,<br>Namibia.</p>
				<p>+27 10 003 8977</p>
			</address>
			<span><img alt="avani logo" src="assets/img/avani.png"></span>
		</header>
		<article>
			<h1>Recipient</h1>
			<address >
				<p><?php echo $title.$fname." ".$lname ?> <br></p>
			</address>
			<table class="meta">
				<tr>
					<th><span >Invoice #</span></th>
					<td><span ><?php echo $id; ?></span></td>
				</tr>
				<tr>
					<th><span >Date</span></th>
					<td><span ><?php echo $cout; ?> </span></td>
				</tr>
				
			</table>
			<table class="inventory">
				<thead>
					<tr>
						<th><span >Item</span></th>
						<th><span >No of Days</span></th>
						<th><span >Rate</span></th>
						<th><span >Quantity</span></th>
						<th><span >Price</span></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><span ><?php echo $troom; ?></span></td>
						<td><span ><?php echo $days; ?> </span></td>
						<td><span data-prefix>N$</span><span ><?php  echo $type_of_room;?></span></td>
						<td><span ><?php echo $nroom;?> </span></td>
						<td><span data-prefix>N$</span><span><?php echo $ttot; ?></span></td>
					</tr>
					<tr>
						<td><span ><?php echo $bed; ?>  Bed </span></td>
						<td><span ><?php echo $days; ?></span></td>
						<td><span data-prefix>N$</span><span ><?php  echo $type_of_bed;?></span></td>
						<td><span ><?php echo $nroom;?> </span></td>
						<td><span data-prefix>N$</span><span><?php echo $btot; ?></span></td>
					</tr>
					<tr>
						<td><span ><?php echo $meal; ?>  </span></td>
						<td><span ><?php echo $days; ?></span></td>
						<td><span data-prefix>N$</span><span ><?php  echo $type_of_meal?></span></td>
						<td><span ><?php echo $nroom;?> </span></td>
						<td><span data-prefix>N$</span><span><?php echo $mepr; ?></span></td>
					</tr>
				</tbody>
			</table>
			
			<table class="balance">
				<tr>
					<th><span >Total</span></th>
					<td><span data-prefix>N$</span><span><?php echo $fintot; ?></span></td>
				</tr>
				<tr>
					<th><span >Amount Paid</span></th>
					<td><span data-prefix>N$</span><span >0.00</span></td>
				</tr>
				<tr>
					<th><span >Balance Due</span></th>
					<td><span data-prefix>N$</span><span><?php echo $fintot; ?></span></td>
				</tr>
			</table>
		</article>
		<aside>
			<h1><span >Contact us</span></h1>
			<div >
				<p align="center">Email :- reservations.africa@minorhotels.com  || Web :- windhoek@avanihotels.com|| Phone :-  +264 61 280 0000 </p>
			</div>
		</aside>
	</body>
</html>
<?php
$free="Free";
$nul = null;
$rpsql = "UPDATE `room` SET `place`='$free',`cusid`='$nul' where `cusid`='$id'";
if(mysqli_query($con,$rpsql))
{
	$delsql= "DELETE FROM `roombook` WHERE id='$id' ";
	
	if(mysqli_query($con,$delsql))
	{
	
	}
}
?>
<?php 

ob_end_flush();

?>