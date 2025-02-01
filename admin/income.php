<?php 
session_start();
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Total Income</title>
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
			<div class="col-md-2" style="margin-left:-30px;">
				<?php 
				include 'sidenav.php';
				 ?>
			</div>
			<div class="col-md-10">
				<h4 class="text-center my-2">Total Income</h4>

				<?php 

				$query = "SELECT *FROM income";

				$res = mysqli_query($connect,$query);

				$output = "";

				$output .= "

				<table class='table table-bordered'>
				<tr>
					<td>Id</td>
					<td>Doctor</td>
					<td>Patient</td>
					<td>Discharge Date</td>
					<td>Fee</td>
				</tr>

				";
				if (mysqli_num_rows($res)<1) {
					$output .="
					<tr>
						<td class='text-center' colspan='4'>No Patient Discharge yet</td>
					</tr>
					";
				}
				while($row = mysqli_fetch_array($res)){
					$output .="<tr>
						<td>".$row['id']."</td>
						<td>".$row['doctor']."</td>
						<td>".$row['patient']."</td>
						<td>".$row['date_discharge']."</td>
						<td>".$row['amount_paid']."</td>
					</tr>";
				}
				$output .= "</tr></table>";

				echo $output;
				 ?>

				

			</div>
		</div>
	</div>
</div>
</body>
</html>