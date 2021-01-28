<?php
    session_start();

    if(!isset($_SESSION['email']))
		header("location:login.php");
    
    $e = $_SESSION['email'];

    $t_ds = $_SESSION['t_ds']; 
    $t_coa = $_SESSION['t_coa'];
    $t_dbms = $_SESSION['t_dbms'] ;
    $t_tafl = $_SESSION['t_tafl'] ;
    $t_python = $_SESSION['t_python']  ;
    $t_mp = $_SESSION['t_mp'];
    $t_p_ds = $_SESSION['t_p_ds'];
    $t_p_coa = $_SESSION['t_p_coa'];
    $t_p_dbms = $_SESSION['t_p_dbms'];
    $t_p_tafl = $_SESSION['t_p_tafl'];
    $t_p_python = $_SESSION['t_p_python'];
    $t_p_mp = $_SESSION['t_p_mp'];
    
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
<title></title>

</head>
<body>
	<div class="container-fluid cont">
        <div class="row heading">
            <div class="col-md-1 form-group"></div>
            <div class="col-md-10 form-group">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-1 float-center mx-auto d-block">
                        <img src="img/logo_abes2.png"  height="50" width="60" class="flaot-center rounded-circle mt-2" alt="Abes Logo" >
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
			<div class="col-md-2"></div>
			<div class = "col-md-9">
			<form action="view_attendance_data.php?student_email=<?php echo $e;?>" method="post">
                <div class = row>
                    <div class = "col-md-3"></div>
                    <div class = "col-md-6">
                        <h4 style="text-align: center;">Your Attendance Record</h4>
                    </div>
                </div>
				
                <div class = "row">

                <div class = "col-md-12">
                    <table class="table table-responsive mt-4">
                    <tr>
                        <th>Subject 1:</th>
                        <td><?php echo $t_p_ds;?></td>
                        <td><?php echo $t_ds;?></td>
                    </tr>
                    <tr>
                        <th>Subject 2:</th>
                        <td><?php echo $t_p_ds;?></td>
                        <td><?php echo $t_ds;?></td>
                    </tr>
                    <tr>
                        <th>Subject 3:</th>
                        <td><?php echo $t_p_ds;?></td>
                        <td><?php echo $t_ds;?></td>
                    </tr>
                    <tr>
                        <th>Subject 4:</th>
                        <td><?php echo $t_p_ds;?></td>
                        <td><?php echo $t_ds;?></td>
                    </tr>
                    <tr>
                        <th>Subject 5:</th>
                        <td><?php echo $t_p_ds;?></td>
                        <td><?php echo $t_ds;?></td>
                    </tr>
                    <tr>
                        <th>Subject 6:</th>
                        <td><?php echo $t_p_ds;?></td>
                        <td><?php echo $t_ds;?></td>
                    </tr>


                    </table>
                </div>
                </div>
                
                <div class = "row" style = "margin-bottom:100px;" >
                    <div class = "col-md-3"></div>
                    <div class = "col-md-6" style = "text-align:center;" >
                        <button type="submit" name = "view" class="btn button mt-3">VIEW</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
