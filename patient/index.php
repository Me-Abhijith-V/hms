<?php 
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Patient Dashboard</title>
</head>
<body style="font-size:16px; background-image: url('img/patient-back2.png'); background-repeat: no-repeat;">
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
	 			<div class="col-md-2" style="margin-left: -30px; ">
	 				<?php 
	 					include("sidenav.php");
	 				 ?>
	 			</div>
	 			<div class="col-md-10">
	 				<h3 class="my-2 text-white">Patient Dashboard</h3>
	 				<br>
	 				<div class="col-md-12">
	 					<div class="row">
	 						<div class="col-md-3 mx-3" style="height: 150px; background-image: url('img/pat-card.png');">
	 							<div class="col-md-12">
	 								<div class="row">
	 									<div class="col-md-8">
	 										<h5 class="text-white my-4"><b>My Profile</b></h5>
	 									</div>
	 									<div class="col-md-4">
	 										<a href="profile.php">
	 											<i class="fa fa-user-circle fa-3x my-4" style="color:white;"></i>
	 										</a>
	 									</div>
	 								</div>
	 							</div>
	 						</div>
	 						<div class="col-md-3 mx-3" style="height: 150px; background-image: url('img/pat-card.png');">
	 							<div class="col-md-12">
	 								<div class="row">
	 									<div class="col-md-8">
	 										<h5 class="text-white my-4"><b>Book Appointment</b></h5>
	 									</div>
	 									<div class="col-md-4">
	 										<a href="appointment.php">
	 											<i class="fa fa-calendar fa-3x my-4" style="color:white;"></i>
	 										</a>
	 									</div>
	 								</div>
	 							</div>
	 						</div>
	 						<div class="col-md-3 mx-3" style="height: 150px; background-image: url('img/pat-card.png');">
	 							<div class="col-md-12">
	 								<div class="row">
	 									<div class="col-md-8">
	 										<h5 class="text-white my-4"><b>My Prescription</b></h5>
	 									</div>
	 									<div class="col-md-4">
	 										<a href="invoice.php">
	 											<i class="fas fa-file-invoice-dollar fa-3x my-4" style="color:white;"></i>
	 										</a>
	 									</div>
	 								</div>
	 							</div>
	 						</div>
	 					</div>
	 				</div>


	 				<?php 

	 				if(isset($_POST['send'])){

	 					$title = $_POST['title'];
	 					$message = $_POST['message'];

	 					if(empty($title)){
	 						echo "<p class='text-danger'>Title cannot be empty</p>";
	 					}else if(empty($message)){
	 						echo "<p class='text-danger'>Message cannot be empty</p>";
	 					}else{

	 						$user =$_SESSION['patient'];
	 						$query = "INSERT INTO feedback(title,message,username,date_reg) VALUES('$title','$message','$user',NOW())";

	 						$res = mysqli_query($connect,$query);

	 						if($res){
	 							echo "<script>alert('You have Sent your feedback')</script>";
	 						}
	 					}

	 				}

	 				 ?>

	 				<div class="col-md-12">
	 					<div class="row">
	 						<div class="col-md-6 my-5" style="background-image: url('img/report.png');">
	 							<h5 class="text-center my-2 text-white"><strong>Send Feedback</strong></h5>
	 							<form method="post">
	 								<label class="text-white">Title</label>
	 								<input type="text" name="title" autocomplete="off" class="form-control" placeholder="Enter title of the report">
	 								<label class="text-white">Message</label>
	 								<input type="text" name="message" autocomplete="off" class="form-control" placeholder="Enter Message">
	 								<br>
	 								<input type="submit" name="send" value="Send Report" class="btn btn-success my-2">
	 							</form>
	 						</div>
	 						<div class="col-md-6 my-5">
	 							
	 						</div>
	 					</div>
	 				</div>
	 			</div>
	 		</div>
	 	</div>
	 </div>
</body>
</html>
