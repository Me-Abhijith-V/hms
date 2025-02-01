<?php 
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>View Patient Details</title>
</head>
<body style="font-size:16px; background-color: #c5facc;">
<div style="background-color: black;">
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
			<div class="col-md-2" style="margin-left:-30px;">
				<?php 

					include("sidenav.php");

				 ?>
			</div>
			<div class="col-md-10">
				<h4 class="text-center" my-3>View Patient Details</h4>
				<?php 

				if(isset($_GET['pid'])){

					$id = $_GET['pid'];

					$query = "SELECT *FROM patient WHERE pid='$id'";

					$res = mysqli_query($connect,$query);

					$row = mysqli_fetch_array($res);
				}

				 ?>

				 <div class="col-md-12">
				 	<div class="row">
				 		<div class="col-md-3"></div>
				 		<div class="col-md-6">
				 			<?php 
				 			echo "<img src='../patient/img/".$row['profile']."' class='col-md-12 my-2' style='height:200px; width:200px;'>";
				 			 ?>

				 			<table class="table table-bordered">
				 				<tr>
				 					<th class="text-center" colspan="2">Details</th>
				 				</tr>
				 				<tr>
				 					<th >Firstname</th>
				 					<td><?php echo $row['firstname']; ?></td>
				 				</tr>
				 				<tr>
				 					<th >Surname</th>
				 					<td><?php echo $row['surname']; ?></td>
				 				</tr>
				 				<tr>
				 					<th >Username</th>
				 					<td><?php echo $row['username']; ?></td>
				 				</tr>
				 				<tr>
				 					<th >Email</th>
				 					<td><?php echo $row['email']; ?></td>
				 				</tr>
				 				<tr>
				 					<th >Gender</th>
				 					<td><?php echo $row['gender']; ?></td>
				 				</tr>
				 				<tr>
				 					<th >Phone</th>
				 					<td><?php echo $row['phone']; ?></td>
				 				</tr>
				 				<tr>
				 					<th >Country</th>
				 					<td><?php echo $row['country']; ?></td>
				 				</tr>
				 				<tr>
				 					<th >Date Registered</th>
				 					<td><?php echo $row['date_reg']; ?></td>
				 				</tr>
				 			</table>
				 		</div>
				 		<div class="col-md-3"></div>
				 	</div>
				 </div>

			</div>
		</div>
	</div>
</div>

</body>
</html>