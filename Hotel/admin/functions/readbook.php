<?php

$tsql = "select * from roombook";
$tre = mysqli_query($con,$tsql);
while($trow=mysqli_fetch_array($tre) ){	
$co =$trow['stat']; 
    $de = $trow['stat'];
if($co=="Not Confirm"){
echo"<tr>
<th>".$trow['id']."</th>
<th>".$trow['FName']." ".$trow['LName']."</th>
<th>".$trow['Email']."</th>
<th>".$trow['Country']."</th>
<th>".$trow['TRoom']."</th>
<th>".$trow['Bed']."</th>
<th>".$trow['Meal']."</th>
<th>".$trow['cin']."</th>
<th>".$trow['cout']."</th>
<th>".$trow['stat']."</th>												
												
<th><a href='roombook.php?rid=".$trow['id']." ' class='btn btn-success'>Action</a></th></tr>";
										
}	
									
    }
?>