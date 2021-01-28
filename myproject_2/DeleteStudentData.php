<?php
session_start();
if(!isset($_GET['email']))
        header("location:login.php");
$e1 = $_GET['email'];
$e = $_POST['Email'];
include("dbconnection.php");
$s = "select * from student_info where EMAIL_ID='$e'";	
$rs=  $con->query($s);					
if($con->query($s)){
    $row= $rs->fetch_array();
  }						
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
                  <h1 class="text-center abes"> ABES ENGINEERING COLLEGE</h1>
              </div>
              <div class="col-md-2"></div>
          </div>
      </div>
      <div class="col-md-1 form-group"></div>
</div>

</div>


<div class="container" style="margin-top:30px">
  <div class="row">
     <div class="col-md-12">
     <h4 class="text-center display-4" style = "font-size:40px;"><?php echo $row[0];?> STUDING</h4><br>
	    <form action="DeletedSubject.php?email1=<?php echo $e;?>&email2=<?php echo $e1;?>" method="post">
      <div class = "row">
        <div class = "col-md-2"></div>
        <div class = "col-md-10">
            <table class="table table-responsive" style="margin-top: 20px">
            <tr><th>Subject 1</th><td><input type="text" name="Sub1" value="<?php echo $row[18];?>"></td><th>Subject 2</th><td><input type="text" name="Sub2" value="<?php echo $row[19];?>"></td></tr>
            <tr><th>Subject 3</th><td><input type="text" name="Sub3" value="<?php echo $row[20];?>"></td><th>Subject 4</th><td><input type="text" name="Sub4" value="<?php echo $row[21];?>"></td></tr>
            <tr><th>Subject 5</th><td><input type="text" name="Sub5" value="<?php echo $row[22];?>"></td><th>Subject 6</th><td><input type="text" name="Sub6" value="<?php echo $row[23];?>"></td></tr>

                
            </table>
        </div>
      </div>

        <div class = "row" style = "margin-bottom:100px;" >
              <div class = "col-md-3"></div>
              <div class = "col-md-6" style = "text-align:center;" >
                  <button type="submit" name = "view" class="btn button mt-3">DELETE</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <a class ="btn button mt-3" href = "faculty_dashboard.php?email=<?php echo $e1;?>" role = "button" >Back</a>
              </div>
        </div>
      </form>

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