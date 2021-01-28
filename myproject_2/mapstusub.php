<?php
    session_start();

    if(!isset($_GET['e']))
		header("location:login.php");

    $email = $_GET['e'];
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
    ?>  
	<div class="container" style="margin-top: 30px">
		<div class="row">
			<div class="col-md-2"></div>
			<div class = "col-md-8">
			<form action="mapstusub_save.php?e=<?php echo $email;?>" method="post">
				<h4 class = "display-4" style="text-align: center;font-size:40px;">ENTER DETAILS FOR MAPPING</h4>
				
                <div class = "row">
                    <div class = "col-md-2"></div>
                    <div class = "col-md-9">
                        <table class="table table-responsive" style="margin-top: 20px">
                            <tr><td>Semester</td><td>
                            <select class="form-control" name = "sem" required>
                                <option selected></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                            </select></td>
                            <td>Section</td><td>
                            <select class="form-control" name = "sec" required>
                                <option selected></option>
                                <option value="a">A</option>
                                <option value="b">B</option>
                                <option value="c">C</option>
                                <option value="d">D</option>
                                <option value="e">E</option>
                            </select></td></tr>      

                            <tr><td>Subject1</td><td>
                            <select class="form-control" name = "sub1" required>
                                <option selected></option>
                                <option value="DS">DS</option>
                                <option value="MP">MP</option>
                                <option value="DBMS">DBMS</option>
                                <option value="COA">COA</option>
                                <option value="TAFL">TAFL</option>
                                <option value="PYTHON">PYTHON</option>
                            </select></td><td>Subject2</td><td>
                            <select class="form-control" name = "sub2" required>
                                <option selected></option>
                                <option value="DS">DS</option>
                                <option value="MP">MP</option>
                                <option value="DBMS">DBMS</option>
                                <option value="COA">COA</option>
                                <option value="TAFL">TAFL</option>
                                <option value="PYTHON">PYTHON</option>
                            </select></td></tr>
                            
                            <tr><td>Subject3</td><td>
                            <select class="form-control" name = "sub3" required>
                                <option selected></option>
                                <option value="DS">DS</option>
                                <option value="MP">MP</option>
                                <option value="DBMS">DBMS</option>
                                <option value="COA">COA</option>
                                <option value="TAFL">TAFL</option>
                                <option value="PYTHON">PYTHON</option>
                            </select></td><td>Subject4</td><td>
                            <select class="form-control" name = "sub4" required>
                                <option selected></option>
                                <option value="DS">DS</option>
                                <option value="MP">MP</option>
                                <option value="DBMS">DBMS</option>
                                <option value="COA">COA</option>
                                <option value="TAFL">TAFL</option>
                                <option value="PYTHON">PYTHON</option>
                            </select></td></tr>

                            <tr><td>Subject5</td><td>
                            <select class="form-control" name = "sub5" required>
                                <option selected></option>
                                <option value="DS">DS</option>
                                <option value="MP">MP</option>
                                <option value="DBMS">DBMS</option>
                                <option value="COA">COA</option>
                                <option value="TAFL">TAFL</option>
                                <option value="PYTHON">PYTHON</option>
                            </select></td><td>Subject6</td><td>
                            <select class="form-control" name = "sub6" required>
                                <option selected></option>
                                <option value="DS">DS</option>
                                <option value="MP">MP</option>
                                <option value="DBMS">DBMS</option>
                                <option value="COA">COA</option>
                                <option value="TAFL">TAFL</option>
                                <option value="PYTHON">PYTHON</option>
                            </select></td></tr>

                            
                        </table>
                    </div>
                </div>
				
				<div class = "row" style = "margin-bottom:100px;" >
                    <div class = "col-md-3"></div>
                    <div class = "col-md-6" style = "text-align:center;" >
                        <button type="submit" name = "view" class="btn button mt-3">UPDATE</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a class ="btn button mt-3" href = "hod_dashboard.php?ema=<?php echo $email;?>" role = "button" >Back</a>
                    </div>
                </div>
			</form>
			</div>
			<div class = "col-md-2"></div>
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
