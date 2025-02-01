<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
</head>
<body style="font-size:16px; background-image: url('img/admin-home.png');">
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
      <div class="col-md-2" style="margin-left: -20px;">
        
        <?php
        include("sidenav.php");
        ?>

      </div>
      <div class="col-md-10">

        <h3 class="my-2 text-white">Admin Dashboard</h3>
        <br>  
        <div class="col-md-12 my-3">
          <div class="row">
          <div class="col-md-3 mx-2" style="height: 130px; background-image: url('img/home-bg.jpg');">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-7">
                  <?php
                    $ad = mysqli_query($connect,"SELECT *FROM admin");
                    $num = mysqli_num_rows($ad);
                  ?>
                  <h5 class="my-2 text-white" style="font-size: 30px;"><?php echo $num;?> </h5>
                  <h5 class="text-white"><b>Admin</b></h5>
                </div>
                <div class="col-md-3">
                  <a href="admin.php"><i class="fa fa-users-cog fa-3x my-3 mx-0" style="color:white;"></i></a>
                </div>          
              </div>
              
            </div>  
          </div>

            <div class="col-md-3 mx-2" style="height: 130px; background-image: url('img/home-bg.jpg');">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-8">
                    <?php 

                      $doctor = mysqli_query($connect,"SELECT * FROM doctors WHERE status='Approved'");
                      $num2 = mysqli_num_rows($doctor);

                     ?>
                      <h5 class="my-2 text-white" style="font-size: 30px;"><?php echo $num2; ?></h5>
                    <h5 class="text-white"><b>Doctors</b></h5>
                  </div>
                  <div class="col-md-3">
                    <a href="doctor.php"><i class="fa fa-user-md fa-3x my-3" style="color:white;"></i></a>
                  </div>          
                </div>
              
              </div>
              
            </div>

            <div class="col-md-3 mx-2" style="height: 130px; background-image: url('img/home-bg.jpg');">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-7">
                    <?php 

                      $patient = mysqli_query($connect,"SELECT * FROM patient");
                      $p = mysqli_num_rows($patient);

                     ?>
                      <h5 class="my-2 text-white" style="font-size: 30px;"><?php echo $p; ?></h5>
                    <h5 class="text-white"><b>Patients</b></h5>
                  </div>
                  <div class="col-md-3">
                    <a href="patient.php"><i class="fa fa-procedures fa-3x my-3" style="color:white;"></i></a>
                  </div>          
                </div>
              
              </div>

              
            </div>

            <div class="col-md-4 mx-2 my-2" style="height: 130px; background-image: url('img/home-bg.jpg');">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-7">
                    <?php 

                    $report = mysqli_query($connect,"SELECT *from feedback ");
                    $rep = mysqli_num_rows($report);

                     ?>
                      <h5 class="my-2 text-white" style="font-size: 30px;"><?php echo $rep; ?></h5>
                    <h5 class="text-white"><b>Feedbacks</b></h5>
                  </div>
                  <div class="col-md-3">
                    <a href="report.php"><i class="fa fa-book-open fa-3x my-3" style="color:white;"></i></a>
                  </div>          
                </div>
              
              </div>
            </div>

            <div class="col-md-4 mx-2 my-2" style="height: 130px; background-image: url('img/home-bg.jpg');">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-7">

                    <?php 

                    $job = mysqli_query($connect,"SELECT *from doctors where status='Pendding'");
                    $num1 = mysqli_num_rows($job);

                     ?>

                      <h5 class="my-2 text-white" style="font-size: 30px;"><?php echo $num1; ?></h5>
                    <h5 class="text-white" style="font-size:18px;"><b>Job Requests</b></h5>
                  </div>
                  <div class="col-md-3">
                    <a href="job_request.php"><i class="fa fa-user-edit fa-3x my-3" style="color:white;"></i></a>
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

    $query = "INSERT INTO notification(title,message,date_sent) VALUES('$title','$message',NOW())";

    $res = mysqli_query($connect,$query);

    if($res){
      echo "<script>alert('You have Sent your Notification')</script>";
    }
  }

}

 ?>

<div class="col-md-12">
  <div class="row">
    <div class="col-md-6 my-5" style="background-image: url('img/notification.png');">
      <h5 class="text-center my-2 text-white"><strong>Send Notification</strong></h5>
      <form method="post">
        <label class="text-white">Title</label>
        <input type="text" name="title" autocomplete="off" class="form-control" placeholder="Enter Title">
        <label class="text-white">Message</label>
        <input type="text" name="message" autocomplete="off" class="form-control" placeholder="Enter Message">
        <br>
        <input type="submit" name="send" value="Send " class="btn btn-success my-2">
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