<?php
session_start();
if(!isset($_GET['email']))
        header("location:login.php");

$e = $_GET['email'];
$sem = $_POST['Semester'];
$b = $_POST['Branch'];
$sec = $_POST['Section'];

include("dbconnection.php");
$s = "select * from student_info where SEMESTER='$sem' and BRANCH='$b' and SECTION='$sec'";						
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
<title>HOD</title>

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
     <h4 class="text-center display-4" style = "font-size:40px;">LIST OF STUDENTS OF <?php echo $b?>-<?php echo $sec?></h1><br>
	       <div class="table-responsive">
	    <table class="table table-strip table-hover">
		   <thead>
           <tr><th>Name</th><th>Roll No.</th><th>Email Id</th><th>Contact No.</th><th>Attendence</th></tr>
           </thead>
           <tbody>
                <?php while($row = $rs->fetch_array()){?>
                    <?php
                $s1 = "select * from subject_attendance where Status='P' and Email='$row[16]'";
                $s2 = "select * from subject_attendance where Status='A' and Email='$row[16]'";
                $rs1 = $con->query($s1);
                $pr = $rs1->num_rows;
                $rs2 = $con->query($s2);
                $ab = $rs2->num_rows;
                $total = $pr + $ab;
                if($total ==0){
                    $att = 0;
                }
                else{
                    $att = ($pr/$total)*100;
                }
                ?>
                <tr><td> <?php echo $row[0];?></td><td> <?php echo $row[1];?></td><td> <?php echo $row[16];?></td><td> <?php echo $row[9];?></td><td><?php echo $att;?>%</td></tr>
                <?php } ?>    
            </tbody>
		  </table>
	       </div>
	 </div>
	 
  </div>
</div>

<div class = "row" style = "margin-bottom:100px;" >
    <div class = "col-md-3"></div>
    <div class = "col-md-6" style = "text-align:center;">
        <a class ="btn button mt-3" href = "ViewForm.php?e=<?php echo $e;?>" role = "button" >Back</a>
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