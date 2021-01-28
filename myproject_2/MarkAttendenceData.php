<?php
session_start();
if(!isset($_GET['email']))
        header("location:login.php");

$em = $_GET['email'];
$d = $_POST['Date'];
$l = $_POST['LectureNo'];
$sem = $_POST['Semester'];
$b = $_POST['Branch'];
$sec = $_POST['Section'];
$sub = $_POST['Subject'];
include("dbconnection.php");
$s = "select * from student_info where SEMESTER='$sem' and BRANCH='$b' and SECTION='$sec' and (SUB1= '$sub' or SUB2= '$sub' or SUB3= '$sub' or SUB4= '$sub' or SUB5= '$sub' or SUB6= '$sub')";						
$rs = $con->query($s);						
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
  <div class="row">
     <div class="col-md-12">
     <form action="MarkedAtt.php?count=<?php echo mysqli_num_rows($rs);?>&email=<?php echo $em;?>" method="post">
        <h4 class="text-center display-4" style = "font-size:40px;">LIST OF STUDENTS</h4><br>
	
        <div class="row">
            <div class = "col-md-4"></div>
            <div class="col-md-8">
                <table class="table table-strip table-responsive table-hover">
                <thead>
                    <tr><th>Sr. No.</th><th>Email Id</th><th>Status</th></tr>
                </thead>
                <tbody>
                        <?php $c=1; ?>
                        <?php while($row = $rs->fetch_array()){?>
                            <tr><td><?php echo $c; ?></td><td><input type="hidden" name="email[]" value="<?php echo $row[16] ?>"><label><?php echo $row[16] ?></label></td><td>
                            <select name="status[]" required>
                            <option value=''>P/A</option>
                            <option value='P'>P</option>
                            <option value='A'>A</option>
                            </select>
                            </td></tr>
                            <tr><td><input type="hidden" name="date" value="<?php echo $d; ?>"></td><td><input type="hidden" name="lecture" value="<?php echo $l; ?>"></td><td><input type="hidden" name="semester" value="<?php echo $sem; ?>"></td><td><input type="hidden" name="branch" value="<?php echo $b; ?>"></td><td><input type="hidden" name="section" value="<?php echo $sec; ?>"></td><td><input type="hidden" name="subject" value="<?php echo $sub; ?>"></td></tr>
                        <?php $c++;} ?>    
                    </tbody>
                </table>
            </div>
        </div>
        <div class = "row" style = "margin-bottom:100px;" >
              <div class = "col-md-3"></div>
              <div class = "col-md-6" style = "text-align:center;" >
                  <button type="submit" name = "view" class="btn button mt-3">SUBMIT</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <a class ="btn button mt-3" href = "faculty_dashboard.php?email=<?php echo $em;?>" role = "button" >BACK</a>
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