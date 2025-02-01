<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

	<script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">

	<script type="text/javascript " src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

	<script src="https://kit.fontawesome.com/2c04e2da54.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">


</head>
<body>
 
	<nav class="navbar navbar-expand-lg navbar-info custom-navbar">
		<img src="img/logo.png" width="70px" height="55px" style="padding-left: 10px;">
		<h5 class="text-white px-3 py-2" style="padding-top:8px; font-size: 20px;">Newlife Hospital</h5>

		<div class="mr-auto"></div>

		<ul class="navbar-nav ms-auto">
			<?php

				if(isset($_SESSION['admin'])){

					$user = $_SESSION['admin'];
					echo '

			<li class="nav-item"><a href="#" class="nav-link text-white">'.$user.'</a></li>
			<li class="nav-item"><a href="logout.php" class="nav-link text-white">Logout</a></li>

					';
				}else if(isset($_SESSION['doctor'])){
					$user = $_SESSION['doctor'];
					echo '

			<li class="nav-item"><a href="#" class="nav-link text-white">'.$user.'</a></li>
			<li class="nav-item"><a href="logout.php" class="nav-link text-white">Logout</a></li>

					';

				}else if(isset($_SESSION['patient'])){
					$user = $_SESSION['patient'];
					echo '

			<li class="nav-item"><a href="#" class="nav-link text-white">'.$user.'</a></li>
			<li class="nav-item"><a href="logout.php" class="nav-link text-white">Logout</a></li>

					';

				}
				 else{
					echo '
						<li class="nav-item"><a href="index.php" class="nav-link text-white" >Home</a></li>
						<li class="nav-item"><a href="adminlogin.php" class="nav-link text-white" >Admin</a></li>
						<li class="nav-item"><a href="doctorlogin.php" class="nav-link text-white">Doctor</a></li>
						<li class="nav-item"><a href="patientlogin.php" class="nav-link text-white">Patient</a></li>
						<li class="nav-item"><a href="about.php" class="nav-link text-white">About</a></li>

					';
				}
			?>

		</ul>
	</nav>

</body>
</html>