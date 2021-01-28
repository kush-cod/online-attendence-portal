<?php
	session_start();

	if(!isset($_GET['email']))
		header("location:login.php");

	include("dbconnection.php");
	
	$em = $_GET['email'];

	$e = $_POST['email'];
	$id = $_POST['id'];
	

	$sq = "select * from hod where hod_id = '$id' and email_id = '$e'";
	$rs = $con->query($sq);

	if($rs->num_rows){
		$rw = $rs->fetch_array();
	}
	else{
		$msg2 = "ENTER THE DETAILS CAREFULLY!!!!!!!";
		$_SESSION['m'] = $msg2;
		header("location:update_hod.php");
	}
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
<p class = "text-danger text-center"><?php 
                if(isset($_SESSION['m'])){
                    echo $_SESSION['m'];
                    session_destroy();
                }
                ?>  </p>

	<div class="container" style="margin-top: 30px">
		<div class="row">
			<div class="col-md-2 "></div>
			<div class = "col-md-8">
			<form action="updatevalues_hod.php?email=<?php echo $em;?>&id=<?php echo $id;?>" method="post">
				<h4 class = "display-4" style="text-align: center;font-size:40px;">UPDATE THE MAPPING OF HOD</h4>
				<table class="table table-responsive" style="margin-top: 35px; margin-left: auto;margin-right: auto;">
					<tr><td><b>HOD-Id :-<b></td><td><?php echo $rw[5];?></td><td><b>EMAIL-Id :-</b></td><td><?php echo $rw[4];?></td></tr>
					
					<tr><td>NAME :-</td><td><input type="text" name="name" value="<?php echo $rw[0];?>" class="form-control" required></td><td>BRANCH :-</td><td>
                            <select class="form-control" name = "branch" required>
                                <option selected><?php echo $rw[1];?></option>
                                <option value="CSE">CSE</option>
								<option value="IT">IT</option>
								<option value="CEIT">CEIT</option>
								<option value="EC">EC</option>
								<option value="EN">EN</option>
								<option value="ME">ME</option>
                            </select></td></tr>

					<tr><td>MOBILE NUMBER :-</td><td><input type="text" name="mobno" value="<?php echo $rw[2];?>" class="form-control" required></td><td>ADDRESS :-</td><td><input type="text" name="address" value="<?php echo $rw[3];?>" class="form-control" required></td></tr>
					
					<tr><td>D.O.B :-</td><td><input type="date" name="dob" value="<?php echo $rw[6];?>" class="form-control" required></td></tr>
			
				</table>

				<div class = "row" style = "margin-bottom:100px;" >
                    <div class = "col-md-3"></div>
                    <div class = "col-md-6" style = "text-align:center;" >
                        <button type="submit" name = "view" class="btn button mt-3">UPDATE</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a class ="btn button mt-3" href = "admin_dashboard.php?email=<?php echo $em;?>" role = "button" >Back</a>
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
