<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
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
			<div class="col-md-2" style="margin-left: -20px">
				<?php
				include("sidenav.php");
				include("../include/connection.php")
				?>
			</div>
			<div class="col-md-10">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-6"> 
							<h3 class="text-center">All Admin</h3>

							<?php
								$ad = $_SESSION['admin'];
								$query = "SELECT * FROM admin WHERE username !='$ad'";
								$res = mysqli_query($connect,$query);
								$output ="
									<table class='table table-bordered'>
									<tr>
								<th>Id</th>
								<th>Username</th>
								<th style='width:10%;'>Action</th>
								<tr>
								";

								if (mysqli_num_rows($res) < 1) {
									$output .= "<tr><td colspan='3' class='text-center'>No New Admin</td></tr>";
								}

								while($row = mysqli_fetch_array($res)){
									$id = $row['a_id'];
									$username = $row['username'];

									$output .="
										<tr>
									<td>$id</td>
									<td>$username</td>
									<td>
										<a href='admin?a_id=$id'><button id='$id' class='btn btn-danger'>Remove</button></a>	
									</td>
									"; 
								}
								$output .="
								</tr>
								</table>";

								echo $output;


								if (isset($_GET['a_id'])) {
									$id = $_GET['a_id'];

									$query = "DELETE FROM admin WHERE a_id='$id'";
									mysqli_query($connect,$query);
								}

							?>

						</div>
						<div class="col-md-6"> 
							<?php
								if (isset($_POST['add'])) {

									$uname = $_POST['uname'];
									$pass = $_POST['pass'];
									$image = $_FILES['img']['name'];

									$error = array();

									if(empty($uname)){
										$error['u'] = "Enter Admin Username";
									}else if(empty($pass)){
										$error['u'] = "Enter Admin Password";
									}else if(empty($image)){
										$error['u'] = "Add Admin Picture";

									}

									if(count($error) ==0){
										$q = "INSERT INTO admin(username,password,profile) VALUES('$uname','$pass','$image')";
										$result = mysqli_query($connect,$q);
										if($result){
											move_uploaded_file($_FILES['img']['tmp_name'], "img/$image");
										}else{

										}
									}
									
								}

								if(isset($error['u'])){
									$er = $error['u'];

									$show = "<h5 class='text-center alert alert-danger'>$er</h5>";
								}else{
									$show = "";
								}

							?>
							<h3 class="text-center">Add Admin</h3>
							<form method="post" enctype="multipart/form-data">
								<div>
									<?php echo $show; ?> 
								</div>
								<div class="form-group">
									<label>Username</label>
									<input type="text" name="uname" class="form-control" autocomplete="off">
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="password" name="pass" class="form-control">
								</div>
								<br>
								<div class="form-group">
									<label>Add Admin Picture</label>
									<input type="file" name="img" class="form-control">
								</div>
								<br>
								<input type="submit" name="add" value="Add New Admin" class="btn btn-success">
								
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