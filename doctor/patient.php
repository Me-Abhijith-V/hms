<?php 
session_start();
 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>Total Patient</title>
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
 			<div class="col-md-2" style="margin-left: -30px;">
 				<?php 
 				include("sidenav.php");
 				 ?>
 			</div>
 			<div class="col-md-10">
 				<h4 class="text-center my-3">Total patient</h4>

 				<?php 

 				$query = "SELECT *FROM patient";

 				$res = mysqli_query($connect,$query);

 				$output = "";

 				$output .= "
						<table class='table table-bordered'>
							<tr>
								<th>ID</th>
								<th>FirstName</th>
								<th>Surname</th>
								<th>Username</th>
								<th>Email</th>
								<th>Gender</th>
								<th>Phone</th>
								<th>Country</th>
								<th>Date Registered</th>
								<th>Action</th>
							</tr>

					";

					if(mysqli_num_rows($res)< 1){

			$output .= "

				<tr>
				<td colspan='9' class='text-center'> No Patient Yet..</td>
				</tr>

			";
		}else{

	
while($row = mysqli_fetch_array($res)){

	$output .= "

		<tr>
		<td>".$row['pid']."</td>
		<td>".$row['firstname']."</td>
		<td>".$row['surname']."</td>
		<td>".$row['username']."</td>
		<td>".$row['email']."</td>
		<td>".$row['gender']."</td>
		<td>".$row['phone']."</td>
		<td>".$row['country']."</td>
		
		<td>".$row['date_reg']."</td>
		<td>
			<a href='viewpatient.php?pid=".$row['pid']."'>
				<button class='btn btn-info'>View</button>
			</a>
		</td>
		
	";
}}

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