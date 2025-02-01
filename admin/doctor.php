<?php 
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Total Doctors</title>
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

 					include("sidenav.php")

 					 ?>
 				</div>
 				<div class="col-md-10">
 					<h3 class="text-center">Total Doctors</h3>
 					<br>
 					<?php 

 						$query = "SELECT *FROM doctors WHERE status='Approved' ORDER BY data_reg ASC";

 						$res = mysqli_query($connect,$query);


$output = "";

$output .= "
	<table class='table table-bordered'>
		<tr>
			<th>ID</th>
			<th>FirstName</th>
			<th>Surname</th>
			<th>Username</th>
			<th>Specialization</th>
			<th>Experience</th>
			<th>Gender</th>
			<th>Phone</th>
			<th>Country</th>
			<th>Salary</th>
			<th>Date Registered</th>
			<th>Action</th>
		</tr>

";
		if(mysqli_num_rows($res)< 1){

			$output .= "

				<tr>
				<td colspan='10' class='text-center'> No Job Request Yet..</td>
				</tr>

			";
		}else{

	
while($row = mysqli_fetch_array($res)){

	$output .= "

		<tr>
		<td>".$row['id']."</td>
		<td>".$row['firstname']."</td>
		<td>".$row['surname']."</td>
		<td>".$row['username']."</td>
		<td>".$row['specialization']."</td>
		<td>".$row['experience']."</td>
		<td>".$row['gender']."</td>
		<td>".$row['phone']."</td>
		<td>".$row['country']."</td>
		<td>".$row['salary']."</td>
		<td>".$row['data_reg']."</td>
		<td>
			<a href='editdoctor.php?id=".$row['id']."'>
				<button class='btn btn-info'>Edit</button>
			</a>
			&nbsp
			<a href='remove_doc.php?id=".$row['id']."' >
				<button class='btn btn-danger'>Remove</button>
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