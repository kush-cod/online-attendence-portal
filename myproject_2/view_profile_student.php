<?php
    session_start();

    if(!isset($_GET['student_email']))
		header("location:login.php");
    
    $e = $_GET['student_email'];

    include("dbconnection.php");

    $sq = "select * from student_info where EMAIL_ID = '$e'";

    $rs = $con->query($sq);

    $row= $rs->fetch_array();  
    
?>
<!DOCTYPE>
<html>
<head>
<!-- All Meta tags -->
    <meta charset = "utf-8">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1, shrink-to-fit = no">

<!-- Bootstrap CSS and other CSS files-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/header.css">


<!-- Bootstrap JS and other JS files-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>

<!--title tag-->
<title>STUDENT</title>

</head>
<body>

	<div class="container-fluid cont">
    
        <div class="row heading">
            <div class="col-md-1 form-group"></div>
            <div class="col-md-10 form-group">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-1 float-center mx-auto d-block">
                        <img src="https://resume.abes.ac.in/assets/images/ABESEC_logo.png"  height="50" width="60" class="flaot-center mt-2" alt="Abes Logo" >
                    </div>
                    <div class="col-md-7">
                        <h1 class="text-center">ABES ENGINEERING COLLEGE</h1>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
            <div class="col-md-1 form-group"></div>
        </div>
    </div>

<!--------------------------Header complete--------------------------------->
<p class = "text-danger text-center"><?php 
                if(isset($_SESSION['m'])){
                    echo $_SESSION['m'];
                    session_destroy();
                }
                ?>  </p>

	<div class="container" style="margin-top: 20px">
		<div class="row">
			<div class="col-md-1"></div>
			<div class = "col-md-11">
			<form action="update_student_profile.php?student_email=<?php echo $e;?>" method="post">
                    <h4 class = "display-4 text-center" style = "font-size:40px;">WELCOME - <?php echo $row[0];?></h4>
                <div class = "row">

                <div class = "col-md-12">
                    <table class="table table-responsive mt-3">
                        <tr><td><b> NAME: </b></td><td><?php echo $row[0];?></td><td><b>ROLL NO: </b></td><td><?php echo $row[1];?></td><td><b>BRANCH: </b></td><td><?php echo $row[2];?></td></tr>
                        <tr><td><b> SECTION: </b></td><td><?php echo $row[3];?></td><td><b>SEMESTER: </b></td><td><?php echo $row[4];?></td><td><b>EMAIL-ID: </b></td><td><?php echo $row[16];?></td></tr>
                        <tr><td><b> FATHER NAME: </b></td><td><?php echo $row[5];?></td><td><b>MOTHER NAME: </b></td><td><?php echo $row[6];?></td><td><b>FATHER CONTACT NO: </b></td><td><?php echo $row[7];?></td></tr>
                        <tr><td><b> MOTHER CONTACT NO: </b></td><td><?php echo $row[8];?></td><td><b>STUDENT CONTACT NO: </b></td><td><?php echo $row[9];?></td><td><b>DATE OF BIRTH : </b></td><td><?php echo $row[10];?></td></tr>
                        <tr><td><b> GENDER: </b></td><td><?php echo $row[11];?></td><td><b>ADDRESS: </b></td><td><?php echo $row[12];?></td><td><b>CITY: </b></td><td><?php echo $row[13];?></td></tr>
                        <tr><td><b> STATE: </b></td><td><?php echo $row[14];?></td><td><b>PINCODE: </b></td><td><?php echo $row[15];?></td><td><b>SUBJECT 1: </b></td><td><?php echo $row[18];?></td></tr>
                        <tr><td><b>SUBJECT 2: </b></td><td><?php echo $row[19];?></td><td><b>SUBJECT 3: </b></td><td><?php echo $row[20];?></td><td><b> SUBJECT 4: </b></td><td><?php echo $row[21];?></td></tr>
                        <tr><td><b>SUBJECT 5: </b></td><td><?php echo $row[22];?></td><td><b>SUBJECT 6: </b></td><td><?php echo $row[23];?></td></tr>
                    </table>
                </div>
                </div>
				
                
                <div class = "row" style = "margin-bottom:30px;" >
                    <div class = "col-md-3"></div>
                    <div class = "col-md-6" style = "text-align:center;" >
                        <button type="submit" name = "add" class="btn button mt-3">UPDATE</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a class ="btn button mt-3" href = "student_dashboard.php?email=<?php echo $e;?>" role = "button" >Back</a>
                    </div>
                </div>
			</form>
			</div>
			<div class = "col-md-1"></div>
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
