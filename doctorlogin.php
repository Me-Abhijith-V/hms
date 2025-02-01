<?php
session_start();
error_reporting(0);
include("include/connection.php");

if(isset($_POST['login'])){

	$username = $_POST['uname'];
	$password = $_POST['pass'];

	$error = array();

	$q = "SELECT * FROM doctors WHERE username='$username' AND password='$password'";

	$qq = mysqli_query($connect,$q);

	$row = mysqli_fetch_array($qq);

	if(empty($username)){
		$error['login'] = "Enter Username";
	}else if(empty($password)){
		$error['login'] = "Enter Password";
	}else if($row['status']=="Pendding"){
		$error['login'] = "Please wait for the admin to confirm";
	}else if($row['status']=="Rejected"){
		$error['login'] = "Please try again later";
	}
	/* if (isset($row)) {
  if ($row['status'] == "Pending") {
    $error['login'] = "Please wait for the admin to confirm";
  } else if ($row['status'] == "Rejected") {
    $error['login'] = "Please try again later";
  }
} else {
  // Handle the case where $row is null (e.g., display error message)
}
*/

	if(count($error)==0){
		$query = "SELECT *FROM doctors WHERE username='$username' AND password='$password'";

		$res = mysqli_query($connect,$query);

		if(mysqli_num_rows($res)){
			echo "<script>alert('Done')</script>";

			$_SESSION['doctor'] = $username;

			header("Location:doctor/index.php");
			//exit();
		}else{
			echo "<script>alert('Invalid Username or password')</script>";
		}
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Doctor Login page</title>
	<link rel="stylesheet" type="text/css" href="css/loginstyle.css">
</head>
<body style="background-image:url(img/care-bg.png); background-size: cover;">
<div style="background-color: black;">
		<?php 
	include("include/header.php");
	 ?>
	 </div>

	<div style="margin-top: 20px"></div>

	<div class="container" >
		<div class ="col-md-12">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<div class="login">
					
					<br>
					<form method="post" class="my-2">

							<?php

							if(isset($error['login'])){

								$sh = $error['login'];

								$show = "<h5 style='color:red;'>$sh</h5>";

							}else{
								$show ="";
							}

							echo $show;

							?>
					
						<h1 class="login_text">DOCTOR LOG IN</h1>
							<label>Username</label>
							<input type="text" name="uname" class="inp_field" autocomplete="off" placeholder="Enter Username">
						
						
							<label>Password</label>
							<input type="password" name="pass" class="inp_field" placeholder="Enter Password" autocomplete="off" id="myInput">
						
							<input type="checkbox" onclick="myFunction()" style="margin-left: -280px">
							<p style="margin-top: -23px; margin-left: 30px;">Show Password</p>

						<input  type="submit" name="login" class="login_bt" value="Login">

						<p>I don't have an account <a href="apply.php">click here</a> </p>
					</form>
				</div>
				</div>
				<div class="col-md-4"></div>
			</div>
		</div>
	</div>
	<script>
	function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</body>
</html>