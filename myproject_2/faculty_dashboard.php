<?php
session_start();
//if(!isset($_GET['email'])){
	//header("location: Login.php");
//}
//-----------------------------Db connection start--------
if(!isset($_GET['email']))
        header("location:login.php");
include("dbconnection.php");
//-----------------------------------

$e = $_GET['email'];

$s1= "select * from faculty where Femailid='$e'";	
     $rs=  $con->query($s1); 
	 $row= $rs->fetch_array();
	
//=======================================
?>

<!DOCTYPE html>
<html>
<head>
<!-- All Meta tags -->
    <meta charset = "utf-8">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1, shrink-to-fit = no">

<!-- Bootstrap CSS and other CSS files-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/navigation.css">

<!-- Bootstrap JS and other JS files-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>

<!--title tag-->
<title>FACULTY</title>

</head>
<body>
<!-- Page Header start-->
<div class="container-fluid cont">
<div class="row heading">
    <div class="col-md-1 form-group"></div>
    <div class="col-md-10 form-group">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-1 float-center mx-auto d-block">
                <img src="https://resume.abes.ac.in/assets/images/ABESEC_logo.png"  height="50" width="60" class="float-center mt-2" alt="Abes Logo" >
            </div>
            <div class="col-md-7">
                <h1 class="text-center abes"> ABES ENGINEERING COLLEGE</h1>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <div class="col-md-1 form-group"></div>
</div>

</div>


<div class="container-fluid">
<!--start navbar-->
<nav class="navbar navbar-expand-lg navbar-dark background">
<a href= "faculty_dashboard.php?email=<?php echo $e;?>" class="navbar-brand"><img src="img/all.jpg" height="50" width="150"></a>
  
<p style = "color:white; font-size:24px;">WELCOME, <?php echo $row[1];?></p>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#m" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon">
              </span>
            </button>
  <div id="m" class="collapse navbar-collapse">
  <ul class="navbar-nav ml-auto">
     <li class="nav-item"><a href = "faculty_dashboard.php?email=<?php echo $e;?>" class="nav-link point" >HOME</a></li>
	 <li class="nav-item dropdown"><a href = "FacultyProfile.php" class="nav-link dropdown-toggle" data-toggle="dropdown">PROFILE</a>
	 <ul class="dropdown-menu">
	      <li><a href="FacultyProfile.php?email=<?php echo $e; ?>" class="dropdown-item text-info" >VIEW PROFILE</a> </li>
		   <li><a href="FacultyEditProfile.php?email=<?php echo $e; ?>" class="dropdown-item text-info">UPDATE PROFILE</a> </li>	 
	  </ul>
	 <li class="nav-item dropdown"><a class="nav-link dropdown-toggle point" data-toggle="dropdown">STUDENT MANAGEMENT</a>
	 <!-- desinging dropdown start-->
	  <ul class="dropdown-menu">
	      <li><a href="ShowStudentForm.php?email=<?php echo $e; ?>" class="dropdown-item text-info" >SHOW STUDENT</a> </li>
		   <li><a href="DeleteStudentForm.php?email=<?php echo $e; ?>" class="dropdown-item text-info">DELETE STUDENT</a> </li>	 
	  </ul>	 
	 <!-- dropdown end-->
	 </li>
	 <!-- desinging dropdown start-->
	 <li class="nav-item dropdown"><a class="nav-link dropdown-toggle point" data-toggle="dropdown">ATTENDENCE</a>
	 
	 <!-- desinging dropdown start-->
	  <ul class="dropdown-menu">
	      <li><a href="MarkAttendence.php?email=<?php echo $e; ?>" class="dropdown-item text-info" >MARK ATTENDENCE</a> </li>
		   <li><a href="UpdateAttendence.php?email=<?php echo $e; ?>" class="dropdown-item text-info">UPDATE ATTENDENCE</a> </li>
		    <li><a href="DeleteAttendence.php?email=<?php echo $e; ?>" class="dropdown-item text-info">DELETE ATTENDENCE</a> </li>	 
	  </ul>	 
	 <!-- dropdown end-->
	</li>
	
	 <li class="nav-item text-white"><a class="nav-link point" href="logout.php">LOGOUT&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
  </ul>
</nav>
</div>


<!-- Page Header end-->
<!-- Page content start -->
<div class = "container-fluid">
<table class="table table-hover">
<h2 class="text-center display-4" style = "font-size:45px;">YOUR TIME TABLE FOR THIS SEMESTER</h2><hr class = "bg-dark">
<thead>
<tr>
<th class="text-center table-dark">DAY/PERIOD</th>
<th class="text-center">1st</th>
<th class="text-center">2nd</th>
<th class="text-center">3rd</th>
<th class="text-center">4th</th>
<th class="text-center"></th>
<th class="text-center">5th</th>
<th class="text-center">6th</th>
<th class="text-center">7th</th>
<th class="text-center">8th</th>
</tr>
</thead>
<tbody>

<tr>
  <td class="bg-primary text-white text-center">MONDAY</td>
  
  <td class="table-primary text-center">CSE-A<br>(MP)</td>
  <td class="table-secondary text-center">FREE</td>
  <td class="table-success text-center">IT-A<br>(DBMS)</td>
  <td class="table-danger text-center">FREE</td>
  <td class="table-warning text-center">L</td>
  <td class="table-info text-center">EN-B<br>(PYTHON)</td>
  <td class="table-light text-center">FREE</td>
  <td class="table-dark text-center">CEIT-A<br>(TAFL)</td>
  <td class="table-primary text-center">FREE</td>
</tr>
<tr>
  <td class="bg-secondary text-white text-center">TUESDAY</td>
  
  <td class="table-primary text-center">FREE</td>
  <td class="table-secondary text-center">CSE-A<br>(PYTHON)</td>
  <td class="table-success text-center">FREE</td>
  <td class="table-danger text-center">IT-B<br>(DBMS)</td>
  <td class="table-warning text-center">U</td>
  <td class="table-info text-center">ME-B<br>(TAFL)</td>
  <td class="table-light text-center">FREE</td>
  <td class="table-dark text-center">CEIT-B<br>(DS)</td>
  <td class="table-primary text-center">FREE</td>
</tr>
<tr>
  <td class="bg-success text-white text-center">WEDNESDAY</td>
  
  <td class="table-primary text-center">CEIT-B<br>(MP)</td>
  <td class="table-secondary text-center">FREE</td>
  <td class="table-success text-center">IT-C<br>(DBMS)</td>
  <td class="table-danger text-center">FREE</td>
  <td class="table-warning text-center">N</td>
  <td class="table-info text-center">CSE-A<br>(TAFL)</td>
  <td class="table-light text-center">FREE</td>
  <td class="table-dark text-center">ME-A<br>(DS)</td>
  <td class="table-primary text-center">FREE</td>
</tr>
<tr>
  <td class="bg-danger text-white text-center">THRUSDAY</td>
  
  <td class="table-primary text-center">CSE-A<br>(MP)</td>
  <td class="table-secondary text-center">FREE</td>
  <td class="table-success text-center">CEIT-B<br>(TAFL)</td>
  <td class="table-danger text-center">FREE</td>
  <td class="table-warning text-center">C</td>
  <td class="table-info text-center">EN-A<br>(DS)</td>
  <td class="table-light text-center">FREE</td>
  <td class="table-dark text-center">EC-A<br>(DBMS)</td>
  <td class="table-primary text-center">FREE</td>
</tr>
<tr>
  <td class="bg-warning text-white text-center">FRIDAY</td>
  
  <td class="table-primary text-center">CSE-A<br>(MP)</td>
  <td class="table-secondary text-center">FREE</td>
  <td class="table-success text-center">IT-A<br>(DBMS)</td>
  <td class="table-danger text-center">FREE</td>
  <td class="table-warning text-center">H</td>
  <td class="table-info text-center">CEIT-A<br>(DS)</td>
  <td class="table-light text-center">EC-B<br>(TAFL)</td>
  <td class="table-dark text-center">FREE</td>
  <td class="table-primary text-center">ME-A<br>(PYTHON)</td>
</tr>
<tr>
  <td class="table-light text-center">SATURDAY</td>
  <td colspan="9" class="table-light text-center bg-danger text-white">WEEKEND HOLIDAY</td>  

</tr>
<tr>
  <td class="bg-dark text-white text-center">SUNDAY</td>
  <td colspan="10" class="table-light text-center bg-danger text-white">WEEKEND HOLIDAY</td>

</tr>
</tbody>
</table>
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