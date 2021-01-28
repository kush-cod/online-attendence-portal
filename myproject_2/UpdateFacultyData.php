<?php
session_start();
if(!isset($_GET['e']))
        header("location:login.php");
$em = $_GET['e'];

$i = $_POST['Femailid'];

$_SESSION['email'] = $i;
include("dbconnection.php");

$s = "select * from Faculty where Femailid='$i'";
    $rs=  $con->query($s); 
    if($con->query($s)){
      $row= $rs->fetch_array();
    }
?>
<!DOCTYPE html>
<html>
<head>
<!-- All Meta tags -->
    <meta charset = "utf-8">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1"> 
	<title>HOD</title>
	<!-- Bootstrap CSS and other CSS files-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" ></link>
<link rel="stylesheet" href="css/header.css">
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
  <div class="container mt-3">
  <h4 class="display-4 text-center" style = "font-size:40px;">UPDATE <?php echo $row[1] ;?></h4><br>
  <form method="post" action="UpdatedFaculty.php?e=<?php echo $em;?>">
  <table class="table ">
  <tr>
  <th>Faculty ID: </th>
  <td><?php echo $row[0]  ?></td><td></td><td></td><td></td>
  <th>Name: </th>
  <td><?php echo $row[1]  ?></td>
  </tr>
  <tr>
  <th>Mobile No.: </th>
  <td><?php echo $row[2]  ?></td><td></td><td></td><td></td>
  <th>Email Id: </th>
  <td><?php echo $row[3]  ?></td>
  </tr>
  <tr>
  <th>Subject1:</th>
  <td>
  <select class="form-control" name="Sub1" id="Sub1">
      <option value="<?php echo $row[4] ?>"><?php echo $row[4] ?></option>
      <option value="DS">DS</option>
      <option value="MP">MP</option>
      <option value="DBMS">DBMS</option>
      <option value="COA">COA</option>
      <option value="TAFL">TAFL</option>
      <option value="PYTHON">PYTHON</option>
  </select>
  </td>
  <th>Semester(Sub1): </th>
  <td>
  <select class= "form-control" name="Semester1" id="Semester1">
     <option value='<?php echo $row[5] ?>'><?php echo $row[5] ?></option>
     <option value='1'>1</option>
     <option value='2'>2</option>
     <option value='3'>3</option>
     <option value='4'>4</option>
     <option value='5'>5</option>
     <option value='6'>6</option>
     <option value='7'>7</option>
     <option value='8'>8</option>
      </select>
  </td>
  <th>Branch(Sub1): </th>
  <td>
  <select class= "form-control" name="Branch1" id="Branch1">
      <option value="<?php echo $row[6] ?>"><?php echo $row[6] ?></option>
      <option value="CSE">CSE</option>
      <option value="IT">IT</option>
      <option value="CEIT">CEIT</option>
      <option value="EC">EC</option>
      <option value="EN">EN</option>
      <option value="ME">ME</option>
      </select>
  </td>
  <th>Section(Sub1): </th>
  <td>
  <select class= "form-control" name="Section1" id="Section1">
      <option value="<?php echo $row[7] ?>"><?php echo $row[7] ?></option>
      <option value="A">A</option>
      <option value="B">B</option>
      <option value="C">C</option>
      <option value="D">D</option>
      <option value="E">E</option>
      </select>
  </td>
  </tr>
  <tr>
  <th>Subject2: </th>
  <td>
  <select class="form-control" name="Sub2" id="Sub2">
      <option value="<?php echo $row[8] ?>"><?php echo $row[8] ?></option>
      <option value="DS">DS</option>
      <option value="MP">MP</option>
      <option value="DBMS">DBMS</option>
      <option value="COA">COA</option>
      <option value="TAFL">TAFL</option>
      <option value="PYTHON">PYTHON</option>
  </select>
  </td>
  <th>Semester(Sub2): </th>
  <td>
  <select class= "form-control" name="Semester2" id="Semester2">
     <option value='<?php echo $row[9] ?>'><?php echo $row[9] ?></option>
     <option value='1'>1</option>
     <option value='2'>2</option>
     <option value='3'>3</option>
     <option value='4'>4</option>
     <option value='5'>5</option>
     <option value='6'>6</option>
     <option value='7'>7</option>
     <option value='8'>8</option>
      </select>
  </td>
  <th>Branch(Sub2): </th>
  <td>
  <select class= "form-control" name="Branch2" id="Branch2">
      <option value="<?php echo $row[10] ?>"><?php echo $row[10] ?></option>
      <option value="CSE">CSE</option>
      <option value="IT">IT</option>
      <option value="CEIT">CEIT</option>
      <option value="EC">EC</option>
      <option value="EN">EN</option>
      <option value="ME">ME</option>
      </select>
  </td>
  <th>Section(Sub2): </th>
  <td>
  <select class= "form-control" name="Section2" id="Section2">
      <option value="<?php echo $row[11] ?>"><?php echo $row[11] ?></option>
      <option value="A">A</option>
      <option value="B">B</option>
      <option value="C">C</option>
      <option value="D">D</option>
      <option value="E">E</option>
      </select>
  </td>
  </tr>
  <tr>
  <th>Subject3: </th>
  <td><select class="form-control" name="Sub3" id="Sub3">
      <option value="<?php echo $row[12] ?>"><?php echo $row[12] ?></option>
      <option value="DS">DS</option>
      <option value="MP">MP</option>
      <option value="DBMS">DBMS</option>
      <option value="COA">COA</option>
      <option value="TAFL">TAFL</option>
      <option value="PYTHON">PYTHON</option>
  </select>
  </td>
  <th>Semester(Sub3): </th>
  <td>
  <select class= "form-control" name="Semester3" id="Semester3">
     <option value='<?php echo $row[14] ?>'><?php echo $row[14] ?></option>
     <option value='1'>1</option>
     <option value='2'>2</option>
     <option value='3'>3</option>
     <option value='4'>4</option>
     <option value='5'>5</option>
     <option value='6'>6</option>
     <option value='7'>7</option>
     <option value='8'>8</option>
      </select>
  </td>
  <th>Branch(Sub3): </th>
  <td>
  <select class= "form-control" name="Branch3" id="Branch3">
      <option value="<?php echo $row[15] ?>"><?php echo $row[15] ?></option>
      <option value="CSE">CSE</option>
      <option value="IT">IT</option>
      <option value="CEIT">CEIT</option>
      <option value="EC">EC</option>
      <option value="EN">EN</option>
      <option value="ME">ME</option>
      </select>
  </td>
  <th>Section(Sub3): </th>
  <td>
      <select class= "form-control" name="Section3" id="Section3">
      <option value="<?php echo $row[13] ?>"><?php echo $row[13] ?></option>
      <option value="A">A</option>
      <option value="B">B</option>
      <option value="C">C</option>
      <option value="D">D</option>
      <option value="E">E</option>
      </select>
  </td>
  </tr>
  </table>
  <div class = "row" style = "margin-bottom:100px;" >
        <div class = "col-md-3"></div>
        <div class = "col-md-6" style = "text-align:center;" >
            <button type="submit" name = "view" class="btn button mt-3">UPDATE</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a class ="btn button mt-3" href = "hod_dashboard.php?ema=<?php echo $em;?>" role = "button" >BACK</a>
        </div>
    </div>
  </form>
  <footer style="position: fixed; bottom: 0px; background-color: #000000; left: 0px; right: 0px; margin-bottom: 0px;">
  <div class="container">
      <div class="footer-copyright text-center text-white">
        ©️ 2020 developed by Aaditya Bhargav, Arpit Verma, Kush Jindal under guidance of Mr. Anand Kr Srivastava
      </div>
  </div>
</footer>
</body>
</html>