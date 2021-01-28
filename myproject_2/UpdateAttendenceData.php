<?php
session_start();
if(!isset($_GET['email']))
        header("location:login.php");

$em = $_GET['email'];
$d = $_POST['Date'];
$l = $_POST['LectureNo'];
$e = $_POST['Email'];
$sub = $_POST['Subject'];

include("dbconnection.php");
$s = "select * from subject_attendance where Date='$d' and LectureNo=$l and Subject='$sub' and Email='$e'";						
$rs = $con->query($s);
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
                            <h1 class="text-center"> ABES ENGINEERING COLLEGE</h1>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
                <div class="col-md-1 form-group"></div>
            </div>
    </div>
<div class="container" style="margin-top:30px">
     <h4 class="display-4 text-center" style="font-size:40px;">UPDATE ATTENDENCE</h4><br>
    <form action="UpdatedAtt.php?email=<?php echo $em;?>" method="post">
	    <table class="table table-strip table-hover">
		   <thead>
           <tr><th>Email Id</th><th>Status</th><th>Date</th></tr>
           </thead>
           <tbody>
           <tr><td><input type="hidden" name="Email" value="<?php echo $row[1];?>"><label><?php echo $row[1];?></label></td></td><td>
           <select name="Status" required>
                    <option value='<?php echo $row[8];?>'><?php echo $row[8];?></option>
                    <option value='P'>P</option>
                    <option value='A'>A</option>
            </select>
           </td><td><input type="hidden" name="Date" value="<?php echo $row[2]; ?>"><label><?php echo $row[2];?></label></td></tr>
           <tr><td><input type="hidden" name="Lecture" value="<?php echo $row[7]; ?>"></td><td><input type="hidden" name="Subject" value="<?php echo $row[6]; ?>"></td></tr>
            
            </tbody>
		  </table>
          <div class = "row" style = "margin-bottom:100px;" >
              <div class = "col-md-3"></div>
              <div class = "col-md-6" style = "text-align:center;" >
                  <button type="submit" name = "view" class="btn button mt-3">UPDATE</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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