<?php 
session_start();
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Invoice</title>
</head>
<body style="background-color: #c5facc;">
<div style="background-color: black;">
	<?php 
	include("../include/header.php");
	?>
	</div>
	<?php
	include("../include/connection.php");
	 ?>
 <div class="container-fluid">
 	<div class="col-md-12">
 		<div class="row">
 			<div class="col-md-2" style="margin-left:-30px">
 				<?php 
 				include 'sidenav.php';
 				 ?>
 			</div>
 			<div class="col-md-10">
 				<h4 class="text-center my-2">My Prescription</h4>

 				<?php 

 				$pat = $_SESSION['patient'];

 				$query = "SELECT *from patient where username='$pat'";

 				$res = mysqli_query($connect,$query);

 				$row = mysqli_fetch_array($res);

 				$fname = $row['firstname'];

 				$querys = mysqli_query($connect,"SELECT *from income where patient='$fname'");

 				$output = "";

 				$output .= "
 				<table class='table table-bordered'>
 				<tr>
 					<td>Id</td>
 					<td>Doctor</td>
 					<td>Patient</td>
 					<td>Date Discharge</td>
 					<td>Amount paid</td>
 					<td>description</td>
 					<td>Action</td>
 				</tr>
 				
 				";

 				if(mysqli_num_rows($querys)<1){
 					$output .="
 					<tr>
 						<td class='text-center' colspan='7'>No Prescription Yet</td>
 					</tr>
 					";
 				}

 				while($row = mysqli_fetch_array($querys)){
 					$output .="
 					<tr>
 						<td>".$row['inc_id']."</td>
 						<td>".$row['doctor']."</td>
 						<td>".$row['patient']."</td>

 						<td>".$row['date_discharge']."</td>
 						<td>".$row['amount_paid']."</td>
 						<td>".$row['description']."</td>
 						<td>
 							<a href='check.php?inc_id=".$row['inc_id']."'>
 								<button class='btn btn-info'>View</button>
 							</a>
 						</td>
 					
 					";
 				}
 				$output .="
 				</tr></table>
 				";
 				echo $output;
 				 ?>

 			</div>
 		</div>
 	</div>
 </div>
</body>
</html>