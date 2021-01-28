<?php
    session_start();

    if(!isset($_GET['email']))
		header("location:login.php");

    include("dbconnection.php");

    $hod ="select * from hod";
    $rs_hod = $con->query($hod);
    $row_hod = $rs_hod->fetch_array();

    //---------------------HOD--------------------------------------

    //-------------Fetching all data-------------------------------------------------

    if(!isset($_GET['page'])) {
        $page=1;
    }
    else{
        $page= $_GET['page'];
    }

    $lowerlimit= ($page-1)*10;
    $noofrow= 10;

    $s= "select * from hod limit $lowerlimit,$noofrow";
    $result =$con->query($s);
    
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

    <div class="container" style = "margin-top:20px;">
        
            <h4 class="text-center display-3" style = "font-size:40px;"> LIST OF HOD</h4>
                
            <div class = "row">
                <div class = "col-md-2"></div>
                <div class = "col-md-8">
                    <table class="child-div table table-responsive" style = "margin-top:20px; text-align:center;">
                            <thead>
                                <tr><th>NAME</th><th>HOD-Id</th><th>BRANCH</th><th>E-MAIL</th><th>MOBILE NO</th><th>ADDRESS</th></tr>
                            </thead>
                            <tbody>
                                <?php while($row_hod = $result->fetch_array()){ ?>
                                <tr><td><?php echo $row_hod[0];?></td><td><?php echo $row_hod[5];?></td><td><?php echo $row_hod[1];?></td><td><?php echo $row_hod[4];?></td><td><?php echo $row_hod[2];?></td><td><?php echo $row_hod[3];?></td></tr>
                                <?php }	?>		 
                            </tbody>
                    </table>
                </div>
                
            </div>
    </div>
            

    <p style = "text-align:center; margin-top:30px; margin-bottom:50px;">
        <?php 
        $s2= "select * from hod";
        $result1= $con->query($s2);
        
        $page = ceil($result1->num_rows/$noofrow); 
        for($i=1;$i<=$page;$i++)
        { ?>
        <a class ="button btn mt-3" style = "width:auto" role = "button"  href= "view_data_hod.php?page=<?php echo $i; ?>"><?php echo $i;?> </a>
        <?php }	   ?>
    </p>
    <footer style="position: fixed; bottom: 0px; background-color: #000000; left: 0px; right: 0px; margin-bottom: 0px;">
  <div class="container">
      <div class="footer-copyright text-center text-white">
        ©️ 2020 developed by Aaditya Bhargav, Arpit Verma, Kush Jindal under guidance of Mr. Anand Kr Srivastava
      </div>
  </div>
</footer>
</body>
</html>
