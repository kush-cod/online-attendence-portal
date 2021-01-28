<?php
session_start();

if(!isset($_GET['email']))
        header("location:login.php");
//-----------------------------Db connection start--------

include("dbconnection.php");
//-----------------------------------

$e = $_GET['email'];

$s1= "select * from faculty where Femailid='$e'";	
     $rs= $con->query($s1); 
     $row= $rs->fetch_array();

$s2= "select * from login_table where USERNAME='$e'";	
     $rs2= $con->query($s2); 
     $row2= $rs2->fetch_array();
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

<!-- Page Header end-->
<!-- Page content start -->
<div class="container" style="margin-top:30px">
<h4 class="display-4 text-center" style = "font-size:40px;">EDIT PROFILE</h1><br>
  <div class="row">
    <div class = "col-md-1"></div>
        <div class="col-md-10">
        <form method="post" action="FacultyProfileEdited.php?email=<?php echo $e; ?>">
	       <div class="table-responsive">
                <table class="table">
                <tr><td><b>Name: </b><input type="text" class="form-control" name="Fname" value="<?php echo $row[1];?>" required ></td><td><b>Password:</b><input type="text" class="form-control" name="password" value="<?php echo $row2[2];?>" required></td>
                <td><b> Mobile No:</b><input type="text" class="form-control" name="Fmobno" value="<?php echo $row[2];?>" required></td><td></td>
                </tr>
                </table>
            </div>
            <div class = "row" style = "margin-bottom:100px;" >
                <div class = "col-md-3"></div>
                <div class = "col-md-6" style = "text-align:center;" >
                    <button type="submit" name = "view" class="btn button mt-3">UPDATE</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a class ="btn button mt-3" href = "FacultyProfile.php?email=<?php echo $e;?>" role = "button" >Back</a>
                </div>
            </div>
         
          </form>
	 </div>
	 
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