<?php
    session_start();
    
    if(!isset($_GET['email']))
		header("location:login.php");

	include("dbconnection.php");
    
    $e = $_GET['email'];

	$sq = "select * from admin where email = '$e'";
	
	$rs = $con->query($sq);

    $rw = $rs->fetch_array();
    
    $sq1 = "select * from login_table where USERNAME = '$e'";
	$rs1 = $con->query($sq1);
    $rw1 = $rs1->fetch_array();

	
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
<title>ADMIN</title>

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

	<div class="container" style="margin-top: 50px">
		<div class="row">
			<div class="col-md-2 "></div>
			<div class = "col-md-8">
                <form action="updatedata_admin.php?email=<?php echo $e;?>" method="post">
                    
                    <table class="table table-responsive" style="margin-top: 35px; margin-left: auto;margin-right: auto;">
                        <h4 class = "display-4" style="text-align: center;font-size:40px;">UPDATE YOUR PROFILE</h4>
                        <tr><td><b>EMAIL-ID :-</b></td><td><?php echo $rw[1];?></td><td><b>USERNAME :-</b></td><td><?php echo $rw[1];?></td></tr>
                        <tr><td>NAME :-</td><td><input type="text" name="sub2" value="<?php echo $rw[0];?>" class="form-control"></td><td>MOBILE NUMBER:-</td><td><input type="text" name="sub3" value="<?php echo $rw[2];?>" class="form-control"></td></tr>
                        <tr><td>PASSWORD:-</td><td><input type="text" name="sub4" value="<?php echo $rw1[2];?>" class="form-control"></td></tr>	
                    </table>
                    
                    <div class = "row" style = "margin-bottom:100px;" >
                        <div class = "col-md-3"></div>
                        <div class = "col-md-6" style = "text-align:center;" >
                            <button type="submit" name = "view" class="btn button mt-3">UPDATE</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a class ="btn button mt-3" href = "viewprofile_admin.php?email=<?php echo $e;?>" role = "button" >Back</a>
                        </div>
                    </div>
                
                </form>
			</div>
			<div class = "col-md-2 "></div>
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
