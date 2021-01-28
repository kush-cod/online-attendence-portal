<?php
	session_start();

	if(!isset($_GET['ema']))
		header("location:login.php");


	include("dbconnection.php");
	$email = $_GET['ema'];
	$_SESSION['em'] = $email;

	$s1 ="select * from hod where email_id = '$email'";
	$rs= $con->query($s1); 

	$row= $rs->fetch_array();
	
	$s2= "select * from faculty";
	$rs2 = $con->query($s2);
	$f = $rs2->num_rows;

	$s3 = "select * from student_info";
	$rs3 = $con->query($s3);
	$student = $rs3->num_rows;

?>

<!-- html5 Declaration -->
<!DOCTYPE>
<html>
<head>
<!-- All Meta tags -->
    <meta charset = "utf-8">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1, shrink-to-fit = no">

<!-- Bootstrap CSS and other CSS files-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/header.css">
<link rel="stylesheet" type="text/css" href="css/navigation.css">

<!-- Bootstrap JS and other JS files-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>

<!--title tag-->
<title>HOD</title>

</head>
<body>
<!-- Page Header start-->
<div class="container-fluid">
	<div class="row heading">
        <div class="col-md-1 form-group"></div>
        <div class="col-md-10 form-group">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-1 float-center mx-auto d-block">
                    <img src="https://resume.abes.ac.in/assets/images/ABESEC_logo.png"  height="50" width="60" class="flaot-center	 mt-2" alt="Abes Logo" >
                </div>
                <div class="col-md-7">
                    <h1 class="text-center">ABES ENGINEERING COLLEGE</h1>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
        <div class="col-md-1 form-group"></div>
    </div>
	
<!--start navbar-->
<nav class="navbar navbar-expand-sm navbar-dark background">
<a href= "hod_dashboard.php?ema=<?php echo $email;?>" class="navbar-brand"><img src="img/all.jpg" height="60" width="100" class="rounded"></a>
  
<p style = "color:white; font-size:24px;margin-top:15px">WELCOME, <?php echo $row[0];?></p>
  
  <button class="navbar-toggler" data-toggle="collapse" data-target="#m">
  <span class="navbar-toggler-icon"></span>
  
  </button>
  <div id="m" class="collapse navbar-collapse float-right">
  <ul class="navbar-nav ml-auto">
     <li class="nav-item"><a href="hod_dashboard.php?ema=<?php echo $email;?>" class="nav-link point">HOME</a></li>
	 <li class="nav-item dropdown"><a class="nav-link dropdown-toggle point" data-toggle = "dropdown">PROFILE</a>
	 	<ul class="dropdown-menu">
	      <li><a href="view_profile_hod.php?hod_email=<?php echo $email;?>" class="dropdown-item text-info point">VIEW PROFILE</a> </li>
		  <li><a href="update_profile_hod.php?hod_email=<?php echo $email;?>" class="dropdown-item text-info point">UPDATE PROFILE</a> </li>
		   	 
	  </ul>

	 </li>
	 <li class="nav-item dropdown"><a class="nav-link dropdown-toggle point" data-toggle="dropdown">FACULTY MANAGEMENT</a>
	 <!-- desinging dropdown start-->
	  <ul class="dropdown-menu">
	      <li><a href="AddFacultyForm.php?e=<?php echo $email;?>" class="dropdown-item text-info point" >ADD FACULTY</a> </li>
		   <li><a href="DeleteFacultyForm.php?e=<?php echo $email;?>" class="dropdown-item text-info point">DELETE FACULTY</a> </li>
		    <li><a href="UpdateFacultyForm.php?e=<?php echo $email;?>" class="dropdown-item text-info point">UPDATE FACULTY</a> </li>	 
	  </ul>	 
	 <!-- dropdown end-->
	 </li>
	 <li class="nav-item dropdown"><a class="nav-link dropdown-toggle point" data-toggle="dropdown">STUDENT MANAGEMENT</a>
	 
	 <!-- desinging dropdown start-->
	  <ul class="dropdown-menu">
	      <li><a href="mapstusub.php?e=<?php echo $email;?>" class="dropdown-item text-info point" >MAP STUDENT-SUBJECT</a> </li>
		   <li><a href="deletemapstu.php?e=<?php echo $email;?>" class="dropdown-item text-info point">DELETE MAP STUDENT-SUBJECT</a> </li>
		    <li><a href="updatemapstu.php?e=<?php echo $email;?>" class="dropdown-item text-info point">UPDATE MAP STUDENT-SUBJECT </a> </li>	
			<li><a href="ViewForm.php?e=<?php echo $email;?>" class="dropdown-item text-info point">VIEW ATTENDENCE </a> </li> 
	  </ul>	 
	 <!-- dropdown end-->
	 
	 </li>

	 <!--<li class="nav-item"><a href = "take_branch.php?ema=<?php echo $email;?>" class="nav-link point">VIEW ATTENDENCE&nbsp;</a></li>
	 -->
	 <li class="nav-item"><a href = "logout.php" class="nav-link point">LOGOUT&nbsp;</a></li>
  </ul>
  </div>
</nav>
</div>
<!-- Page Header end-->
<!-- Page content start -->
<div class="container mt-5">
<div class="row">
		<div class="col-md-3 bg-danger text-white">
			<i class="fa fa-dumbbell text-danger fa-5x"></i>
			<h4 class="display-4" style="font-size:50px;">Your Department</h4>
			<hr class="bg-white">
		<h1 class="display-1 text-center"><?php echo $row[1];?></h1>
		</div><div class="col-md-1"></div>
		<div class="col-md-3 bg-success text-white">
			<i class="fa fa-heartbeat text-danger fa-5x"></i>
			<h4 class="display-4" style="font-size:50px;">Total Faculties Registered</h4>
			<hr class="bg-white">
			<h1 class="display-1 text-center"><?php echo $f;?></h1>
		</div><div class="col-md-1"></div>
		<div class="col-md-3 bg-primary text-white">
			<i class="fa fa-fire-alt text-danger fa-5x"></i>
			<h4 class="display-4" style="font-size:50px;">Total Students Registered</h4>
			<hr class="bg-white">
			<h1 class="display-1 text-center"><?php echo $student;?></h1>
    	</div>
    </div>
</div>

<footer style="position: fixed; bottom: 0px; background-color: #000000; left: 0px; right: 0px; margin-bottom: 0px;">
  <div class="container">
      <div class="footer-copyright text-center text-white">
        ©️ 2020 developed by Aaditya Bhargav, Arpit Verma, Kush Jindal under guidance of Mr. Anand Kr Srivastava
      </div>
  </div>
</footer>

</body>
</html>
