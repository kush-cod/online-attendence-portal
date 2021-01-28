<?php
session_start();
if(!isset($_GET['email']))
        header("location:login.php");
    $em = $_GET['email'];
?>
<!DOCTYPE html>
<html>
<head>
<!-- All Meta tags -->
    <meta charset = "utf-8">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1"> 

	<!-- Bootstrap CSS and other CSS files-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" ></link>
<link rel="stylesheet" href="css/header.css">
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
<p class = "text-danger text-center"><?php 
    if(isset($_SESSION['m'])){
        echo $_SESSION['m'];
        session_destroy();
    }
    ?>  </p>
</div>
  <div class="container mt-3">
  <h4 class="display-4 text-center" style = "font-size:40px;">DELETE ATTENDENCE</h4><hr><br>
  <form action="DeleteAttendenceData.php?email=<?php echo $em;?>" method="post">
  <div class="form-row">
  <div class="form-group col-6">
     <select class= "form-control" name="LectureNo" id="Lecture" required>
     <option value=''>Enter Lecture Number</option>
     <option value='1'>1</option>
     <option value='2'>2</option>
     <option value='3'>3</option>
     <option value='4'>4</option>
     <option value='5'>5</option>
     <option value='6'>6</option>
     <option value='7'>7</option>
     <option value='8'>8</option>
      </select>
     </div>
     <div class="form-group col-6">
	 <input type="date" class= "form-control" name="Date" id="Date" placeholder="Enter Date">
    </div>
     </div>
     <div class="form-row">
     <div class="form-group col-6">
     <select class= "form-control" name="Section" id="Section" required>
      <option value="">Enter Section</option>
      <option value="A">A</option>
      <option value="B">B</option>
      <option value="C">C</option>
      <option value="D">D</option>
      <option value="E">E</option>
      </select>
     </div>
     <div class="form-group col-6">
     <select class="form-control" name="Subject" id="Subject" required>
      <option value="">Enter Subject</option>
      <option value="DS">DS</option>
      <option value="MP">MP</option>
      <option value="DBMS">DBMS</option>
      <option value="COA">COA</option>
      <option value="TAFL">TAFL</option>
      <option value="PYTHON">PYTHON</option>
      </select>
     </div>
     </div>
     <div class="form-row">
     <div class="form-group col-6">
     <select class= "form-control" name="Semester" id="Semester" required>
     <option value=''>Enter Semester</option>
     <option value='1'>1</option>
     <option value='2'>2</option>
     <option value='3'>3</option>
     <option value='4'>4</option>
     <option value='5'>5</option>
     <option value='6'>6</option>
     <option value='7'>7</option>
     <option value='8'>8</option>
      </select>
     </div>
     <div class="form-group col-6">
     <select class= "form-control" name="Branch" id="Branch" required>
      <option value="">Enter Branch</option>
      <option value="CSE">CSE</option>
      <option value="IT">IT</option>
      <option value="CEIT">CEIT</option>
      <option value="EC">EC</option>
      <option value="EN">EN</option>
      <option value="ME">ME</option>
      </select>
     </div>
     </div>
     
     </div>
     <div class = "row" style = "margin-bottom:30px;" >
        <div class = "col-md-3"></div>
        <div class = "col-md-6" style = "text-align:center;" >
            <button type="submit" name = "add" class="btn button mt-3">DELETE</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a class ="btn button mt-3" href = "faculty_dashboard.php?email=<?php echo $em;?>" role = "button" >Back</a>
        </div>
    </div>
     </form>
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