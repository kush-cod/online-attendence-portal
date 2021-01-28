<?php
    session_start();
    
    if(!isset($_GET['student_email']))
		header("location:login.php");

	include("dbconnection.php");
    
    $email = $_GET['student_email'];   
    
    $_SESSION['student_emailid'] = $email;

	$sq = "select * from student_info where EMAIL_ID = '$email'";
	
	$rs = $con->query($sq);

    $row = $rs->fetch_array();
    
    $sq1 = "select * from login_table where USERNAME = '$email'";
	
	$rs1 = $con->query($sq1);

	$row1 = $rs1->fetch_array();
	
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

<!--------------------------Header complete--------------------------------->

	<div class="container" style="margin-top: 30px">
		<div class="row">
			<div class="col-md-2 "></div>
			<div class = "col-md-9">
                <form action="update_student_profile_data.php?s=1" method="post">
                    
                    <table class="table table-responsive" style="margin-top: 28px; margin-left: auto;margin-right: auto;">
                        <div class = row>
                            <div class = "col-md-3"></div>
                            <div class = "col-md-6">
                                <h4 class = "display-4" style="font-size:40px;text-align: center;">UPDATE YOUR PROFILE</h4>
                            </div>
                        </div>
                        <tr><td><b>Email-Id - </b></td><td><?php echo $row[16];?></td><td><b>Roll No - </b></td><td><?php echo $row[1];?></td></tr>
                        <tr><td><b>Subject 1 - </b></td><td><?php echo $row[18];?></td><td><b>Subject 2 - </b></td><td><?php echo $row[19];?></td></tr>
                        <tr><td><b>Subject 3 - </b></td><td><?php echo $row[20];?></td><td><b>Subject 4 - </b></td><td><?php echo $row[21];?></td></tr>
                        <tr><td><b>Subject 5 - </b></td><td><?php echo $row[22];?></td><td><b>Subject 6 - </b></td><td><?php echo $row[23];?></td></tr>
                        
                        <tr><td>NAME - </td><td><input type = "text" class = form-control name = "name" value = "<?php echo $row[0];?>"></td><td>BRANCH - </td><td>
                            <select class="form-control" name = "branch" required>
                                <option va34e="<?php echo $row[2];?>"><?php echo $row[2];?></option>
                                <option value="CSE">CSE</option>
                                <option value="IT">IT</option>
                                <option value="CEIT">CEIT</option>
                                <option value="EC">EC</option>
                                <option value="EN">EN</option>
                                <option value="ME">ME</option>
                            </select></td></tr>
                        <tr><td>SECTION - </td><td>
                            <select class="form-control" name = "sec" required>
                                <option value="<?php echo $row[3];?>"><?php echo $row[3];?></option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                            </select></td><td>SEMESTER - </td><td>
                            <select class="form-control" name = "sem" required>
                                <option value="<?php echo $row[4];?>"><?php echo $row[4];?></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                            </select></td></tr>
                        <tr><td>FATHER'S NAME - </td><td><input type = "text" class = form-control name = "fname" value = "<?php echo $row[5];?>"></td><td>MOTHER'S NAME - </td><td><input type = "text" name = "mname" class = "form-control" value = "<?php echo $row[6];?>"></td></tr>
                        <tr><td>FATHER CONTACT NO - </td><td><input type = "text" class = form-control name = "fno" value = "<?php echo $row[7];?>"></td><td>MOTHER CONTACT NO - </td><td><input type = "text" name = "mno" class = "form-control" value = "<?php echo $row[8];?>"></td></tr>
                        <tr><td>STUDENT CONTACT NO - </td><td><input type = "text" class = form-control name = "sno" value = "<?php echo $row[9];?>"></td><td>DATE OF BIRTH - </td><td><input type = "date" name = "dob" class = "form-control" value = "<?php echo $row[10];?>"></td></tr>
                        <tr><td>GENDER - </td><td>
                            <select class="form-control" name = "gen" required>
                                <option value="<?php echo $row[11];?>"><?php echo $row[11];?></option>
                                <option value="MALE">MALE</option>
                                <option value="FEMALE">FEMALE</option>
                                <option value="OTHERS">OTHERS</option>
                            </select></td><td>ADDRESS - </td><td><input type = "text" name = "address" class = "form-control" value = "<?php echo $row[12];?>"></td></tr>
                        <tr><td>CITY - </td><td><input type = "text" class = form-control name = "city" value = "<?php echo $row[13];?>"></td><td>STATE - </td><td><input type = "text" name = "state" class = "form-control" value = "<?php echo $row[14];?>"></td></tr>
                        <tr><td>PINCODE - </td><td><input type = "text" class = form-control name = "pin" value = "<?php echo $row[15];?>"></td><td>PASSWORD - </td><td><input type = "text" class = form-control name = "pass" value = "<?php echo $row1[2];?>"></td></tr>
                        
                    </table>

                    <div class = "row" style = "margin-bottom:100px;" >
                        <div class = "col-md-3"></div>
                        <div class = "col-md-6" style = "text-align:center;" >
                            <button type="submit" name = "view" class="btn button mt-3">UPDATE</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a class ="btn button mt-3" href = "view_profile_student.php?student_email=<?php echo $email;?>" role = "button" >Back</a>
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


