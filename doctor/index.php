<?php 
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Doctor's Dashboard</title>
</head>
<body style="font-size:16px; background-color: #c5facc; background-image: url('img/doc-back2.png');">
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
	 				
	 				<h2 class="my-2 text-white">Doctor Dashboard</h2>
				
				<div class="col-md-12 my-3">
					<div class="row">
					

						<div class="col-md-3 my-2 bg-info mx-3" style="height: 150px; background-image: url('img/doc-card.png');">
	 								<div class="col-md-12">
	 									<div class="row">
	 										<div class="col-md-8">
	 											<h5 class="text-white my-4"><b>My profile</b></h5>
	 										</div>
	 										<div class="col-md-4">
	 											<a href="profile.php"><i class="fa fa-user-circle fa-3x my-4" style="color: white;"></i></a>
	 										</div>
	 									</div>
	 									
	 								</div>
	 							</div>

						<div class="col-md-3 my-2 bg-warning mx-3" style="height: 150px; background-image: url('img/doc-card.png');">
	 								<div class="col-md-12">
	 									<div class="row">
	 										<div class="col-md-7">
	 											<?php 

											$pat = mysqli_query($connect,"SELECT * FROM patient");
											$p = mysqli_num_rows($pat);

										 ?>
	 											<h2 class="text-white my-4"><b><?php echo $p; ?></b></h2>
	 											<h5 class="text-white my-4"><b>Total Patient</b></h5>
	 											
	 										</div>
	 										<div class="col-md-3">
	 											<a href="patient.php"><i class="fa fa-procedures fa-3x my-3 mx--2" style="color: white;"></i></a>
	 										</div>
	 									</div>
	 									
	 								</div>
	 							</div>

						

						<div class="col-md-3 my-2 bg-success mx-3" style="height: 150px; background-image: url('img/doc-card.png');">
	 								<div class="col-md-12">
	 									<div class="row">
	 										<div class="col-md-8">
	 											<?php 
	 											$app = mysqli_query($connect,"SELECT *FROM appointment WHERE status='Pendding'");
	 											$appoint = mysqli_num_rows($app);
	 											 ?>
	 											<h3 class="text-white my-4"><b><?php echo $appoint; ?></b></h3>
	 											<h5 class="text-white my-4"><b>Total Appointment</b>s</h5>

	 											
	 										</div>
	 										<div class="col-md-4">
	 											<a href="appointment.php"><i class="fa fa-calendar fa-3x my-4" style="color: white;"></i></a>
	 										</div>
	 									</div>
	 									
	 								</div>
	 							</div>


					</div>

				</div>		
	 					
	 			</div>
	 			
	 		</div>
	 		
	 	</div>
	 	
	 </div>
	 

</body>
</html>