<?php 
session_start();
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Book Appointment</title>
</head>
<body style="background-image:url(img/patient.png); background-repeat: no-repeat; background-size: cover;">
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
 			<div class="col-md-2" style="margin-left:-30px;">
 				<?php 
 				include('sidenav.php');
 				 ?>
 				
 			</div>
 			<div class="col-md-10">
 				

 				<?php 

 				$pat = $_SESSION['patient'];
 				$sel = mysqli_query($connect,"SELECT *from patient where username='$pat'");

 				$row = mysqli_fetch_array($sel);

 				$firstname = $row['firstname'];
 				$surname = $row['surname'];
 				$gender = $row['gender'];
 				$phone = $row['phone'];

 				$error = array();

 				if(isset($_POST['book'])){
 					$date = $_POST['date'];
 					$sym = $_POST['sym'];

 					if(empty($sym)){
 						$error['admin'] = "Enter Symptoms";
 					}else if(empty($date)){
 						$error['admin'] = "Enter Date";
 					}else{
 						$query = "INSERT INTO appointment(firstname,surname, gender,phone,appointment_date,symptoms,status, date_booked) values('$firstname','$surname','$gender','$phone','$date','$sym','Pendding',NOW())";

 						$res = mysqli_query($connect,$query);
 						if($res){
 							echo "<script>alert('You Have Booked an appointment.')</script>";
 						}
 					}
 				}

 				 ?>

 				<div class="col-md-12">
 					<div class="row">
 						<div class="col-md-3">
 							
 						</div>
 						<div class="col-md-6" style="background-color: white; margin-top: 20px;">
 							<h4 class="text-center my-2">Book Appointment</h4>
 						<form method="post">
 							<div >
							<?php

							if(isset($error['admin'])){

								$sh = $error['admin'];

								$show = "<h5 class='alert alert-danger'>$sh</h5>";

							}else{
								$show ="";
							}

							echo $show;

							?>
 							<label>Appointment Date</label>
 							<input type="date" name="date" class="form-control">
 							<label>Symptoms</label>
 							<input type="text" name="sym" class="form-control">

 							<br>


 							<input type="submit" name="book" class="btn btn-success my-2" value="Book Appointment">
 							<br>
 							<font color="red" size="1.3px"> &#42; No fees for appointment booking. You only need to pay at the time of discharge. (t&c applied&#42;) </font>
 						</form>	
 						</div>
 						<div class="col-md-3">
 							
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>
</body>
</html>