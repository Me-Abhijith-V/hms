<?php 
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Total Appointment</title>
</head>
<body style="font-size:16px; background-color: #c5facc;">
<div style="background-color: black;">
	<?php 
	include("../include/header.php");
	?>
	</div>
	<?php
	include("../include/connection.php");
	 ?>
	 </div>
 <div class="container-fluid">
 	<div class="col-md-12">
 		<div class="row">
 			<div class="col-md-2" style="margin-left:-30px">
 				<?php 
 				 include 'sidenav.php';
 				?>
 			</div>
 			<div class="col-md-10">
 				<h4 class="text-center my-2">Total Appointment</h4>
 				<?php 

 				$query = "SELECT *FROM appointment WHERE status='Pendding'";

 				$res = mysqli_query($connect,$query);

 				$output = "";

 				$output .= "
 				<table class='table table-bordered'>
 				<tr>
 					<th>Id</th>
 					<th>Firstname</th>
 					<th>Surname</th>
 					<th>Gender</th>
 					<th>Phone</th>
 					<th>Appointment Date</th>
 					<th>Symptoms</th>
 					<th>Date Booked</th>
 					<th>Action</th>
 				</tr>
 				";

 				if(mysqli_num_rows($res)<1){
 					$output .= "
 						<tr>
 							<td colspan='9' class='text-center'>No Appointment Yet..</td>
 						</tr>

 					";
 				}

 				while($row = mysqli_fetch_array($res)){
 					$output .= "
 						<tr>
 							<td>".$row['appoint_id']."</td>
 							<td>".$row['firstname']."</td>
 							<td>".$row['surname']."</td>
 							<td>".$row['gender']."</td>
 							<td>".$row['phone']."</td>
 							<td>".$row['appointment_date']."</td>
 							<td>".$row['symptoms']."</td>
 							<td>".$row['date_booked']."</td>
 							<td>
 								<a href='discharge.php?appoint_id=".$row['appoint_id']."'>
 								<button class='btn btn-info'>Check</button>
 								</a>
 							</td>

 						</tr>

 					";
 				}
 				$output .= "
		</tr>
		</table>
	";

echo $output;

 				 ?>
 			</div>
 		</div>
 	</div>
 </div>
</body>
</html>