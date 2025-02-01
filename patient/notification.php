<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
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
 				<h4 class="text-center my-2">Notifications</h4>
				<br>	
 				<?php 

 				$query = "SELECT *FROM notification";
 				$res = mysqli_query($connect,$query);

 				$output = "";

 				$output .="
 					<table class='table table-bordered'>
 					<tr>
 					
 					<th>Title</th>
 					<th>Message</th>
 					<th>Date Send</th>
 					</tr>
 				";

 					if(mysqli_num_rows($res)<1){
 						$output .="
 						<tr>
 						<td class='text-center' colspan='6'>No Report Yet</td>
 						</tr>
 						";
 					}

 					while($row = mysqli_fetch_array($res)){
 						$output .="
 							<tr>
 							
 							<td>".$row['title']."</td>
 							<td>".$row['message']."</td>
 							<td>".$row['date_sent']."</td>
 							</tr>
 						";
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