<?php
session_start();

include("include/connection.php");

if(isset($_POST['login'])){

	$username = $_POST['uname'];
	$password = $_POST['pass'];

	$error = array();

	if(empty($username)){
		$error['admin'] = "Enter Username";
	}else if(empty($password)){
		$error['admin'] = "Enter Password";
	}

	if(count($error)==0){
		$query = "SELECT *FROM admin WHERE username='$username' AND password='$password'";

		$result = mysqli_query($connect,$query);

		if(mysqli_num_rows($result)== 1){
			echo "<script>alert('You have login as admin')</script>";

			$_SESSION['admin'] = $username;

			header("Location:admin/index.php");
			exit();
		}else{
			echo "<script>alert('Invalid Username or password')</script>";
		}
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Login page</title>
	<link rel="stylesheet" type="text/css" href="css/loginstyle.css">
	
</head>
<body style="background-image:url(img/care-bg.png); background-size: cover;">	
	<div style="background-color:black;">
		<?php 
			include('include/header.php')
		 ?>
	</div>
<div style="margin-top: 30px"></div>
	<div class="container" >
		<div class ="col-md-12">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
				<div class="login">
					<!--<img src="img/admin.jfif" class="col-md-12">-->
					<form method="post" class="my-2">

						
							<?php

							if(isset($error['admin'])){

								$sh = $error['admin'];

								$show = "<h5 style='color:red;'>$sh</h5>";

							}else{
								$show ="";
							}

							echo $show;
							?>

						<h1 class="login_text">ADMIN LOG IN</h1>
						
							<label>Username</label>
							<input type="text" name="uname" class="inp_field" autocomplete="off" placeholder="Enter Username">
						
						
							<label>Password</label>
							<input type="password" name="pass" class="inp_field" placeholder="Enter Password" autocomplete="off" id="myInput">
						
							<input type="checkbox" onclick="myFunction()" style="margin-left: -280px">
							<p style="margin-top: -23px; margin-left: 30px;">Show Password</p>

						<input  type="submit" name="login" class="login_bt" value="Login">
					</form>
				</div>
			<div class="col-md-4"></div>
			</div>
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