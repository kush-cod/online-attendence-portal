<?php
    session_start();

    if(!isset($_SESSION['email']))
		header("location:login.php");
    
    $em = $_SESSION['email'];

    include("dbconnection.php");

    $start_date = $_POST['start'];
    $end_date = $_POST['end'];

    $sub = "select * from student_info where EMAIL_ID = '$em'";
    $s = $con->query($sub);
    $s_fetch = $s->fetch_array();

    $sub1 = $s_fetch[18];
    $sub2 = $s_fetch[19];
    $sub3 = $s_fetch[20];
    $sub4 = $s_fetch[21];
    $sub5 = $s_fetch[22];
    $sub6 = $s_fetch[23];
    

    $sq_sub1 = "select * from subject_attendance where Email = '$em' and Date>='$start_date' and Date<='$end_date' and Subject ='$sub1'";
    $sq_sub2 = "select * from subject_attendance where Email = '$em' and Date>='$start_date' and Date<='$end_date' and Subject ='$sub2'";
    $sq_sub3 = "select * from subject_attendance where Email = '$em' and Date>='$start_date' and Date<='$end_date' and Subject ='$sub3'";
    $sq_sub4 = "select * from subject_attendance where Email = '$em' and Date>='$start_date' and Date<='$end_date' and Subject ='$sub4'";
    $sq_sub5 = "select * from subject_attendance where Email = '$em' and Date>='$start_date' and Date<='$end_date' and Subject ='$sub5'";
    $sq_sub6 = "select * from subject_attendance where Email = '$em' and Date>='$start_date' and Date<='$end_date' and Subject ='$sub6'";
    

    $rs_sub1 = $con->query($sq_sub1);
    $rs_sub4 = $con->query($sq_sub4);
    $rs_sub3 = $con->query($sq_sub3);
    $rs_sub5 = $con->query($sq_sub5);
    $rs_sub6 = $con->query($sq_sub6);
    $rs_sub2 = $con->query($sq_sub2);
    
    $t_sub1 = $rs_sub1->num_rows;
    $t_sub4 = $rs_sub4->num_rows;
    $t_sub3 = $rs_sub3->num_rows;
    $t_sub5 = $rs_sub5->num_rows;
    $t_sub6 = $rs_sub6->num_rows;
    $t_sub2 = $rs_sub2->num_rows;

    $sq_p_sub1 = "select * from subject_attendance where Email = '$em' and Date>='$start_date' and Date<='$end_date' and Subject ='$sub1' and Status ='P'";
    $sq_p_sub2 = "select * from subject_attendance where Email = '$em' and Date>='$start_date' and Date<='$end_date' and Subject ='$sub2' and Status ='P'";
    $sq_p_sub3 = "select * from subject_attendance where Email = '$em' and Date>='$start_date' and Date<='$end_date' and Subject ='$sub3' and Status ='P'";
    $sq_p_sub4 = "select * from subject_attendance where Email = '$em' and Date>='$start_date' and Date<='$end_date' and Subject ='$sub4' and Status ='P'";
    $sq_p_sub5 = "select * from subject_attendance where Email = '$em' and Date>='$start_date' and Date<='$end_date' and Subject ='$sub5' and Status ='P'";
    $sq_p_sub6 = "select * from subject_attendance where Email = '$em' and Date>='$start_date' and Date<='$end_date' and Subject ='$sub6' and Status ='P'";
    
    $rs_p_sub1 = $con->query($sq_p_sub1);
    $rs_p_sub4 = $con->query($sq_p_sub4);
    $rs_p_sub3 = $con->query($sq_p_sub3);
    $rs_p_sub5 = $con->query($sq_p_sub5);
    $rs_p_sub6 = $con->query($sq_p_sub6);
    $rs_p_sub2 = $con->query($sq_p_sub2);

    
    $t_p_sub1 = $rs_p_sub1->num_rows;
    $t_p_sub4 = $rs_p_sub4->num_rows;
    $t_p_sub3 = $rs_p_sub3->num_rows;
    $t_p_sub5 = $rs_p_sub5->num_rows;
    $t_p_sub6 = $rs_p_sub6->num_rows;
    $t_p_sub2 = $rs_p_sub2->num_rows;


    if($t_sub1 == 0){
        $sub1_per = 0;
    }
    else{
        $sub1_per = ($t_p_sub1 / $t_sub1)*100;
    }
    if($t_sub2 == 0){
        $sub2_per = 0;
    }
    else{
        $sub2_per = ($t_p_sub2 / $t_sub2)*100;
    }
    if($t_sub3 == 0){
        $sub3_per = 0;
    }
    else{
        $sub3_per = ($t_p_sub3 / $t_sub3)*100;
    }
    if($t_sub4 == 0){
        $sub4_per = 0;
    }
    else{
        $sub4_per = ($t_p_sub4 / $t_sub4)*100;
    }
    if($t_sub5 == 0){
        $sub5_per = 0;
    }
    else{
        $sub5_per = ($t_p_sub5 / $t_sub5)*100;
    }
    if($t_sub6 == 0){
        $sub6_per = 0;
    }
    else{
        $sub6_per = ($t_p_sub6 / $t_sub6)*100;
    }

    $total_present = $t_p_sub1+$t_p_sub2+$t_p_sub3+$t_p_sub4+$t_p_sub5+$t_p_sub6;
    $total_lectures = $t_sub1+$t_sub2+$t_sub3+$t_sub4+$t_sub5+$t_sub6;

    if($total_lectures == 0){
        $total_per = 0;
    }
    else{
        $total_per = ($total_present / $total_lectures)*100;
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
<title>STUDENT</title>

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

<!--------------------------Header cosub2lete--------------------------------->

	<div class="container" style="margin-top: 30px">
		<div class="row">
			<div class="col-md-2"></div>
			<div class = "col-md-9">
			<form action="view_attendance_data.php?student_email=<?php echo $e;?>" method="post">
                
                <h4 class = "display-4" style="font-size:40px;text-align: center;">YOUR ATTENDENCE RECORD</h4>
				
                <div class = "row">
                    <div class="col-md-2"></div>
                    <div class = "col-md-8">
                        <table class="table table-responsive mt-4">
                        <tr><th>&nbsp;&nbsp;Subjects</th><th>&nbsp;&nbsp;&nbsp;&nbsp;Attended Lectures</th><th>Total Lectures</th><th>Subject %</th></tr>
                        <tr>
                            <th>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $sub1;?>:</th>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $t_p_sub1;?></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $t_sub1;?></td>
                            <td>&nbsp;&nbsp;&nbsp;<?php echo $sub1_per."%";?></td>
                        </tr>
                        <tr>
                            <th>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $sub2;?>:</th>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $t_p_sub2;?></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $t_sub2;?></td>
                            <td>&nbsp;&nbsp;&nbsp;<?php echo $sub2_per."%";?></td>
                        </tr>
                        <tr>
                            <th>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $sub3;?>:</th>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $t_p_sub3;?></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $t_sub3;?></td>
                            <td>&nbsp;&nbsp;&nbsp;<?php echo $sub3_per."%";?></td>  
                        </tr>
                        <tr>
                            <th>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $sub4;?>:</th>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $t_p_sub4;?></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $t_sub4;?></td>
                            <td>&nbsp;&nbsp;&nbsp;<?php echo $sub4_per."%";?></td>
                        </tr>
                        <tr>
                            <th>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $sub5;?>:</th>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $t_p_sub5;?></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $t_sub5;?></td>
                            <td>&nbsp;&nbsp;&nbsp;<?php echo $sub5_per."%";?></td>
                        </tr>
                        <tr>
                            <th>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $sub6;?>:</th>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $t_p_sub6;?></td>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $t_sub6;?></td>
                            <td>&nbsp;&nbsp;&nbsp;<?php echo $sub6_per."%";?></td>
                        </tr>


                        </table>


                        <div class = "mt-5">
                            <h5 style = "text-align:center;">Total attendance : <?php echo $total_per."%";?></h5>
                        </div>
                        <div class="progress" style="height: 16px;">
                            <div
                            class="progress-bar bg-danger text-mattBlackDark"
                            role="progressbar"
                            style="width: <?php echo $total_per."%";?>;"
                            aria-valuenow="100"
                            aria-valuemin="0"
                            aria-valuemax="100"
                            >
                            <?php echo $total_per."%";?>
                            </div>
                        </div>


                    </div>

                </div>
                
                <div class = "row" style = "margin-bottom:100px;" >
                    <div class = "col-md-3"></div>
                    <div class = "col-md-6" style = "text-align:center;" >
                        <a class ="btn button mt-5" href = "view_attendance.php?email=<?php echo $em;?>" role = "button" >Back</a>
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
