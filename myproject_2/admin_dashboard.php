<?php
	session_start();
	
	if(!isset($_GET['email']))
		header("location:login.php");

	include("dbconnection.php");

	$email = $_GET['email'];
	$_SESSION['e'] = $email;
	
	$s1 = "select * from admin where email = '$email'";
	$rs=  $con->query($s1); 
	$row= $rs->fetch_array();

	$s2= "select * from faculty";
	$rs2 = $con->query($s2);
	$f = $rs2->num_rows;

	$s3 = "select * from student_info";
	$rs3 = $con->query($s3);
	$student = $rs3->num_rows;

	$s4 = "select * from hod";
	$rs4 = $con->query($s4);
	$hod = $rs4->num_rows;

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
<link rel="stylesheet" type="text/css" href="css/navigation.css">
<link rel="stylesheet" type="text/css" href="css/header.css">

<!-- Bootstrap JS and other JS files-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>

<!--title tag-->
<title>ADMIN</title>
	

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
                    <img src="https://resume.abes.ac.in/assets/images/ABESEC_logo.png" height="50" width="60" class="float-center mt-2" alt="Abes Logo" >
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
	
	<a href= "admin_dashboard.php?email=<?php echo $email ;?>" class="navbar-brand"><img src="img/all.jpg" height="60" width="100" class="rounded"></a>
	  
	<p style = "color:white; font-size:24px;margin-top:15px">WELCOME, <?php echo $row[0];?></p>
	  
	  <button class="navbar-toggler float-right" data-toggle="collapse" data-target="#m">
	  		<span class="navbar-toggler-icon"></span>
	  </button>

	  <div id="m" class="collapse navbar-collapse">
		  <ul class="navbar-nav ml-auto">
		    <li class="nav-item"><a href="admin_dashboard.php?email=<?php echo $email;?>" class="nav-link point">HOME</a></li>
			<li class="nav-item dropdown"><a class="nav-link dropdown-toggle point dropbtn" data-toggle = "dropdown">PROFILE</a>
			 	<ul class="dropdown-menu">
			      <li><a href="viewprofile_admin.php?email=<?php echo $email ;?>" class="dropdown-item text-info point">VIEW PROFILE</a> </li>
				  <li><a href="updateprofile_admin.php?email=<?php echo $email ;?>" class="dropdown-item text-info point">UPDATE PROFILE</a> </li>
				</ul>
			</li>

			<li class="nav-item dropdown"><a class="nav-link dropdown-toggle point" data-toggle="dropdown">HOD MANAGEMENT</a>
				 <!-- desinging dropdown start-->
				<ul class="dropdown-menu">
				      <li><a href="add_hod.php?email=<?php echo $email ;?>" class="dropdown-item text-info point" >ADD HOD</a> </li>
					   <li><a href="del_hod.php?email=<?php echo $email ;?>" class="dropdown-item text-info point">DELETE HOD</a> </li>
					    <li><a href="update_hod.php?email=<?php echo $email ;?>" class="dropdown-item text-info point">UPDATE HOD</a> </li>	 
				</ul>	 
				 <!-- dropdown end-->
			</li>

			<li class="nav-item dropdown"><a class="nav-link dropdown-toggle point" data-toggle="dropdown">VIEW DATA</a>
				 <!-- desinging dropdown start-->
				<ul class="dropdown-menu">
				      <li><a href="	view_data_hod.php?email=<?php echo $email ;?>" class="dropdown-item text-info point" >VIEW HOD</a> </li>
					   <li><a href="view_data_faculty.php?email=<?php echo $email ;?>" class="dropdown-item text-info point">VIEW FACULTY</a> </li>
					    <li><a href="view_data_student.php?email=<?php echo $email ;?>" class="dropdown-item text-info point">VIEW STUDENT</a> </li>	 
				</ul>	 
				 <!-- dropdown end-->
			</li>

			<li class="nav-item"><a href = "logout.php" class="nav-link point">LOGOUT&nbsp;</a></li>
		  </ul>
	  </div>

	</nav>
</div>
<!-- Page Header end-->
<!-- Page content start -->

<!--<div class="container" style="margin-top:80px">
  	<div class="row">
     	<div class="col-md-12">
	       	<div class="table-responsive">
		       	<table class="table">
		      		<tr><td><b> NAME: </b><?php echo $row[0];?></td><td><b>EMAIL - ID: </b><?php echo $row[1];?></td><td><b>MOBILE NUMBER: </b><?php echo $row[2];?></td></tr>
		       	</table>
	      	 </div>
	 	</div>
	</div>
</div>-->

<div class="container mt-5">
<div class="row">
		<div class="col-md-3 bg-danger text-white">
			<i class="fa fa-dumbbell text-danger fa-5x"></i>
			<h4 class="display-4" style="font-size:50px;">Total Head of Depts. Registered</h4>
			<hr class="bg-white">
		<h1 class="display-1 text-center"><?php echo $hod;?></h1>
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
<!-- Page contents end-->
<!-- All script code start -->
</body>
</html>