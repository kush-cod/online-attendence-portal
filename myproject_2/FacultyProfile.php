<?php
session_start();
// if(!isset($_SESSION['e'])){
// 	header("location: Login.php");
// }
//-----------------------------Db connection start--------
if(!isset($_GET['email']))
        header("location:login.php");
include("dbconnection.php");
//-----------------------------------

$e = $_GET['email'];
$_SESSION['e']=$e;
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
<!-- Bootstrap JS and other JS files-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>

<!--title tag-->
<title>FACULTY</title>

</head>
<body>
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
                <h1 class="text-center"> ABES ENGINEERING COLLEGE</h1>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <div class="col-md-1 form-group"></div>
</div>

</div>

<!-- Page Header start-->
<!--start navbar-->

<!-- Page Header end-->
<!-- Page content start -->
<p class="text-center text-danger">
<?php
if(isset($_SESSION['m'])){
    echo $_SESSION['m'];
    session_destroy();
}
?>
</p>

<div class="container" style="margin-top:30px">
<h4 class="display-4 text-center" style = "font-size:40px;">WELCOME - <?php echo $row[1];?></h4><br>
  <div class="row">
     <div class="col-md-12">
	       <div class="table-responsive">
	      <table class="table table-hover">
		   <tr><td><b>Faculty ID:</b><?php echo $row[0];?></td><td><b>Name: </b><?php echo $row[1];?></td><td><b> Mobile No:</b><?php echo $row[2];?></td><td><b>E-Mail Id: </b><?php echo $row[3];?></td></tr>
             <tr><td><b> Subject1: </b><?php echo $row[4];?></td><td><b>Subject1 Semester: </b><?php echo $row[5];?></td><td><b>Subject1 Branch: </b><?php echo $row[6];?></td><td><b>Subject1 Section: </b><?php echo $row[7];?></td></tr>    
              <tr><td><b>Subject2: </b><?php echo $row[8];?></td><td><b>Subject2 Semester: </b><?php echo $row[9];?></td><td><b>Subject2 Branch: </b><?php echo $row[10];?></td><td><b>Subject2 Section: </b><?php echo $row[11];?></td></tr>
			  <tr><td><b>Subject3: </b><?php echo $row[12];?></td><td><b>Subject3 Semester: </b><?php echo $row[13];?></td><td><b>Subject3 Branch: </b><?php echo $row[14];?></td><td><b>Subject3 Section: </b><?php echo $row[15];?></td></tr>
		  </table>
	       </div>
	 </div>
	 
  </div>
</div>

<div class = "row" style = "margin-bottom:100px;" >
    <div class = "col-md-3"></div>
    <div class = "col-md-6" style = "text-align:center;" >
        <a class ="btn button mt-3" href = "FacultyEditProfile.php?email=<?php echo $e; ?>" role = "button" >UPDATE</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a class ="btn button mt-3" href = "faculty_dashboard.php?email=<?php echo $e; ?>" role = "button" >BACK</a>
    </div>
</div>

<!-- Page contents end-->
<!-- All script code start -->

<footer style="position: fixed; bottom: 0px; background-color: #000000; left: 0px; right: 0px; margin-bottom: 0px;">
  <div class="container">
      <div class="footer-copyright text-center text-white">
        ©️ 2020 developed by Aaditya Bhargav, Arpit Verma, Kush Jindal under guidance of Mr. Anand Kr Srivastava
      </div>
  </div>
</footer>
</body>
</html>