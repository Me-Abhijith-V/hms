<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Patient Profile</title>
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
			<div class="col-md-2" style="margin-left: -30px;">
				<?php 
				include("sidenav.php");

				#$patient = $_SESSION['patient'];
				#$query = "SELECT *FROM patient WHERE username=''";
				 #$res = mysqli_query($connect,$query);
				 #$row = mysqli_fetch_array($res);
				 ?>
			</div>
			<div class="col-md-10">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-6">
							<h3>My Profile</h3>
							<?php 
	 									$patient = $_SESSION['patient'];
	 									$query = "SELECT *FROM patient WHERE username='$patient'";

	 									$res =mysqli_query($connect,$query);
	 									$row = mysqli_fetch_array($res);

	 									if(isset($_POST['upload'])){
	 										$img = $_FILES['img']['name'];

	 										if(empty($img)){

	 										}else{
	 											$query = "UPDATE patient SET profile='$img' WHERE username='$patient'";

	 											$res = mysqli_query($connect,$query);
	 											if($res){
	 												move_uploaded_file($_FILES['img']['tmp_name'],"img/$img");
	 											}
	 										}
	 									}

	 								 ?>
							<form method="post" enctype="multipart/form-data">
	 								 	<?php 

	 								 	echo "<img src='img/".$row['profile']."' alt='Upload Profile Picture' style='height:200px; width:200px;' class='col-md-12 my-3'>";


	 								 	 ?>
	 								 	 <br>

	 								 	 <input type="file" name="img" class="form-control my-1">
	 								 	 <br>
	 								 	 <input type="submit" name="upload" class="btn btn-success" value="Update Profile">
	 								 </form>

	 								 <div class="my-3">
	 								 	<table class="table table-bordered">
	 								 		<tr><th colspan="2" class="text-center">My Details</th></tr>
	 								 		<tr>
	 								 			<td>Firstname</td>
	 								 			<td><?php echo $row['firstname']; ?></td>
	 								 		</tr>

	 								 		<tr>
	 								 			<td>Surname</td>
	 								 			<td><?php echo $row['surname']; ?></td>
	 								 		</tr>

	 								 		<tr>
	 								 			<td>Username</td>
	 								 			<td><?php echo $row['username']; ?></td>
	 								 		</tr>

											  <tr>
	 								 			<td>Blood group</td>
	 								 			<td><?php echo $row['blood_group']; ?></td>
	 								 		</tr>

	 								 		<tr>
	 								 			<td>Email</td>
	 								 			<td><?php echo $row['email']; ?></td>
	 								 		</tr>

	 								 		<tr>
	 								 			<td>Phone</td>
	 								 			<td><?php echo $row['phone']; ?></td>
	 								 		</tr>

	 								 		<tr>
	 								 			<td>Gender</td>
	 								 			<td><?php echo $row['gender']; ?></td>
	 								 		</tr>

	 								 		<tr>
	 								 			<td>Country</td>
	 								 			<td><?php echo $row['country']; ?></td>
	 								 		</tr>

	 								 		
	 								 	</table>
	 								 </div>
							<div >
								
							</div>


						</div>
						<div class="col-md-6">
							<h5 class="text-center my-2">Change Username</h5>
	 								<?php 

	 								if(isset($_POST['change_uname'])){

	 									$uname = $_POST['uname'];

	 									if (empty($uname)) {
	 										// code...
	 									}else{
	 										$query = "UPDATE patient SET username='$uname' WHERE username='$patient'";
	 										$res = mysqli_query($connect,$query);
	 										if($res){
	 											$_SESSION['patient'] = $uname;
	 										}
	 									}
	 								}


	 								 ?>
	 								<form method="post">
	 									<label>Change Username</label>
	 									<input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Enter username">
	 									<br>
	 									<input type="submit" name="change_uname" class="btn btn-success" value="Change Username">
	 								</form>
	 								<br>

	 								<h5 class="text-center my-2">Change password</h5>
	 								<?php 

	 								if(isset($_POST['changepass'])){

	 									$old = $_POST['oldpass'];
	 									$new = $_POST['newpass'];
	 									$con = $_POST['conpass'];

	 									$ol = "SELECT password FROM patient WHERE username='$patient'";
	 									$ols = mysqli_query($connect,$ol);
	 									$row = mysqli_fetch_array($ols);

	 									if($old != $row['password']) {
	 										 echo "<p class='text-danger'>Incorrect old password!</p>";
	 									}else if(empty($new)){
	 										echo "<p class='text-danger'>New password cannot be empty!</p>";
	 									}else if($con != $new){
	 										echo "<p class='text-danger'>New passwords do not match!</p>";
	 									}else{

	 										$query = "UPDATE patient SET password='$new' WHERE username='$patient'";
	 										 mysqli_query($connect,$query);
	 									}
	 								}


	 								 ?>
	 								<form method="post">
	 									<label>Old Password</label>
	 									<input type="password" name="oldpass" class="form-control" autocomplete="off" placeholder="Enter old password">
	 									<br>
	 									

	 									<label>New Password</label>
	 									<input type="password" name="newpass" class="form-control" autocomplete="off" placeholder="Enter new password">
	 									<br>
	 									
	 									<label>Confirm New Password</label>
	 									<input type="password" name="conpass" class="form-control" autocomplete="off" placeholder="Enter new password">
	 									<br>
	 									<input type="submit" name="changepass" class="btn btn-success" value="Change Password">
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