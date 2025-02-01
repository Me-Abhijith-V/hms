<?php 
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Check patient Appointment</title>
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
				include 'sidenav.php';
				 ?>
			</div>
			<div class="col-md-10">
				<?php 

				if(isset($_GET['appoint_id'])){
					$id = $_GET['appoint_id'];
					$query = "SELECT *FROM appointment WHERE appoint_id='$id'";

					$res = mysqli_query($connect,$query);

					$row = mysqli_fetch_array($res);
					
				}

				 ?>
				<h4 class="text-center my-2">Appointment Deatils of <?php echo $row['firstname'];?>
					<?php echo $row['surname'];?>
				</h4>
				<br>
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-6">
							<table class="table table-bordered">
								<tr>
									<td class="text-center" colspan="2"><h5>Appointment Details</h5></td>
								</tr>
								<tr>
									<td>Firstname</td>
									<td><?php echo $row['firstname']; ?></td>
								</tr>

								<tr>
									<td>Surname</td>
									<td><?php echo $row['surname']; ?></td>
								</tr>

								<tr>
									<td>Gender</td>
									<td><?php echo $row['gender']; ?></td>
								</tr>

								<tr>
									<td>Phone</td>
									<td><?php echo $row['phone']; ?></td>
								</tr>

								<tr>
									<td>Appointment Date</td>
									<td><?php echo $row['appointment_date']; ?></td>
								</tr>

								<tr>
									<td>Symptoms</td>
									<td><?php echo $row['symptoms']; ?></td>
								</tr>

								
							</table>
						</div>
						<div class="col-md-6">
							<h4 class="text-center my-2">Invoice</h4>
							<?php 

							if(isset($_POST['send'])){
								$fee = $_POST['fee'];
								$des = $_POST['des'];

								if(empty($fee)){

								}else if(empty($des)){

								}else{

									$doc = $_SESSION['doctor'];

									$fname = $row['firstname'];

									$query = "INSERT INTO income(doctor, patient,date_discharge,amount_paid, description) VALUES('$doc','$fname',NOW(),'$fee','$des')";
									$res = mysqli_query($connect,$query);

									if($res){
										echo "<script>alert('You have sent Invoice')</script>";

										mysqli_query($connect,"UPDATE appointment SET status='Discharged' WHERE appoint_id='$id'");
									}
								}
							}

							 ?>

							<form method="post">
								<label>Fee</label>
								<input type="number" name="fee" class="form-control" autocomplete="off" placeholder="Enter patient fee">
								<br>
								<label>Prescription</label>
								<input type="text" name="des" class="form-control" autocomplete="off" placeholder="Enter Prescription">
								<br>
								<input type="submit" name="send" class="btn btn-success my-2" value="Send">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>