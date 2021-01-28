<?php
    session_start();
    if(!isset($_GET['e']))
        header("location:login.php");
    $email = $_GET['e'];
?>

<!DOCTYPE html>
<html>
<head>
<!-- All Meta tags -->
    <meta charset = "utf-8">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1"> 
	
	<!-- Bootstrap CSS and other CSS files-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" ></link>
<link rel="stylesheet" href="css/header.css">
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
    <p class = "text-center text-danger"><?php 
        if(isset($_SESSION['m'])){
            echo $_SESSION['m'];
            session_destroy();
        }
        ?>  
    </p>
  <div class="container mt-3">
  <h1 class="display-4 text-center" style ="font-size:40px;">ADD FACULTY</h1><hr>
  <form action="AddFacultyData.php?e=<?php echo $email;?>" method="post" class="w-75 mx-auto">
  <div class="form-row">
     <div class="form-group col-6">
	 <label >Faculty Id</label>
	 <input type="text" class= "form-control" name="Fid" id="Fid" placeholder="Faculty Id" required>
     </div>

     <div class="form-group col-6">
	 <label >Faculty Name</label>
	 <input type="text" class= "form-control" name="Fname" id="Fname" placeholder="Full Name" required>
     </div>
	 </div>
	 
	 <div class="form-row">
	 <div class="form-group col-6">
	 <label >Faculty Mobile No.</label>
	 <input type="text" class= "form-control" name="Fmobno" id="Fmobno" placeholder="Mobile No." required>
     </div>  
     <div class="form-group col-6">
	 <label >Faculty E-mail ID</label>
	 <input type="email" class= "form-control" name="Femail" id="Femail" placeholder="Email ID" required>
     </div>
     </div>
     
    <div class="form-row">
    <div class="form-group col-3">		  
	 <label >Subject 1</label>
      <select class="form-control" name="Sub1" id="Sub1">
      <option value="">Subject 1</option>
      <option value="DS">DS</option>
      <option value="MP">MP</option>
      <option value="DBMS">DBMS</option>
      <option value="COA">COA</option>
      <option value="TAFL">TAFL</option>
      <option value="PYTHON">PYTHON</option>
      </select>
     </div>
     <div class="form-group col-3">		  
	 <label >Branch(Sub 1)</label>
      <select class= "form-control" name="Branch1" id="Branch1">
      <option value="">Branch Of Subject 1</option>
      <option value="CSE">CSE</option>
      <option value="IT">IT</option>
      <option value="CEIT">CEIT</option>
      <option value="EC">EC</option>
      <option value="EN">EN</option>
      <option value="ME">ME</option>
      </select>
     </div>
     <div class="form-group col-3">		  
	 <label >Section(Sub 1)</label>
      <select class= "form-control" name="Section1" id="Section1">
      <option value="">Section Of Subject 1</option>
      <option value="A">A</option>
      <option value="B">B</option>
      <option value="C">C</option>
      <option value="D">D</option>
      <option value="E">E</option>
      </select>
     </div>
     <div class="form-group col-3">		  
	 <label >Semester(Sub 1)</label>
      <select class= "form-control" name="Semester1" id="Semester1">
     <option value=''>Semester of Subject 1</option>
     <option value='1'>1</option>
     <option value='2'>2</option>
     <option value='3'>3</option>
     <option value='4'>4</option>
     <option value='5'>5</option>
     <option value='6'>6</option>
     <option value='7'>7</option>
     <option value='8'>8</option>
      </select>
     </div>
</div>
<div class="form-row">
     <div class="form-group col-3">		  
	 <label >Subject 2</label>
      <select class="form-control" name="Sub2" id="Sub2">
      <option value="">Subject 2</option>
      <option value="DS">DS</option>
      <option value="MP">MP</option>
      <option value="DBMS">DBMS</option>
      <option value="COA">COA</option>
      <option value="TAFL">TAFL</option>
      <option value="PYTHON">PYTHON</option>
      </select>
     </div>
     <div class="form-group col-3">		  
	 <label >Branch(Sub 2)</label>
	 <select class= "form-control" name="Branch2" id="Branch2">
      <option value="">Branch Of Subject 2</option>
      <option value="CSE">CSE</option>
      <option value="IT">IT</option>
      <option value="CEIT">CEIT</option>
      <option value="EC">EC</option>
      <option value="EN">EN</option>
      <option value="ME">ME</option>
      </select>
     </div>
     <div class="form-group col-3">		  
	 <label >Section(Sub 2)</label>
	 <select class= "form-control" name="Section2" id="Section2">
      <option value="">Section Of Subject 2</option>
      <option value="A">A</option>
      <option value="B">B</option>
      <option value="C">C</option>
      <option value="D">D</option>
      <option value="E">E</option>
      </select>
     </div>
     <div class="form-group col-3">		  
	 <label >Semester(Sub 2)</label>
	 <select class= "form-control" name="Semester2" id="Semester2">
     <option value=''>Semester of Subject 2</option>
     <option value='1'>1</option>
     <option value='2'>2</option>
     <option value='3'>3</option>
     <option value='4'>4</option>
     <option value='5'>5</option>
     <option value='6'>6</option>
     <option value='7'>7</option>
     <option value='8'>8</option>
      </select>
     </div>
     </div>
<div class="form-row">
     <div class="form-group col-3">		  
	 <label >Subject 3</label>
	 <select class="form-control" name="Sub3" id="Sub3">
      <option value="">Subject 3</option>
      <option value="DS">DS</option>
      <option value="MP">MP</option>
      <option value="DBMS">DBMS</option>
      <option value="COA">COA</option>
      <option value="TAFL">TAFL</option>
      <option value="PYTHON">PYTHON</option>
      </select>
     </div>
     <div class="form-group col-3">		  
	 <label >Branch(Sub 3)</label>
	 <select class= "form-control" name="Branch3" id="Branch3">
      <option value="">Branch Of Subject 3</option>
      <option value="CSE">CSE</option>
      <option value="IT">IT</option>
      <option value="CEIT">CEIT</option>
      <option value="EC">EC</option>
      <option value="EN">EN</option>
      <option value="ME">ME</option>
      </select>
     </div>
     <div class="form-group col-3">		  
	 <label >Section(Sub 3)</label>
	 <select class= "form-control" name="Section3" id="Section3">
      <option value="">Section Of Subject 3</option>
      <option value="A">A</option>
      <option value="B">B</option>
      <option value="C">C</option>
      <option value="D">D</option>
      <option value="E">E</option>
      </select>
     </div>
     <div class="form-group col-3">		  
	 <label >Semester (Sub 3)</label>
	 <select class= "form-control" name="Semester3" id="Semester3">
     <option value=''>Semester of Subject 3</option>
     <option value='1'>1</option>
     <option value='2'>2</option>
     <option value='3'>3</option>
     <option value='4'>4</option>
     <option value='5'>5</option>
     <option value='6'>6</option>
     <option value='7'>7</option>
     <option value='8'>8</option>
      </select>
     </div>
	 </div>
    
     <div class = "row" style = "margin-bottom:100px;" >
        <div class = "col-md-3"></div>
        <div class = "col-md-6" style = "text-align:center;" >
            <button type="submit" name = "ADD" class="btn button mt-3">ADD</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a class ="btn button mt-3" href = "hod_dashboard.php?ema=<?php echo $email;?>" role = "button" >Back</a>
        </div>
    </div>
	 </div>
     <footer style="position: fixed; bottom: 0px; background-color: #000000; left: 0px; right: 0px; margin-bottom: 0px;">
  <div class="container">
      <div class="footer-copyright text-center text-white">
        ©️ 2020 developed by Aaditya Bhargav, Arpit Verma, Kush Jindal under guidance of Mr. Anand Kr Srivastava
      </div>
  </div>
</footer>
<!-- Bootstrap JS and other JS files-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>

</body>
</html>