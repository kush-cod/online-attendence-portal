<!--HTML Declaratiom-->
<?php
session_start();
    if(!isset($_GET['a'])){
        header("location:login.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- All Meta Declaration-->
        <meta charset="utf-8">
        <meta name="viewport" content="width = device-width,initial-scale = 1">
        
        <title>Student Registration Form</title>
        
        <!--Bootstrap CSS and other CSS files(for attaching external CSS file)-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/registration_page.css">

        <!--Bootstrap JS and other JS files(for attaching external js file)-->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="js/validate.js"></script>
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
                            <h1 class="text-center">Student Registration Form</h1>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
                <div class="col-md-1 form-group"></div>
            </div>

            <div class="row">
                <div class="col-md-1 form-group"></div>
                <div class="col-md-10 form-group">
                    <div class="form-group column bg-light">
                        <form action="reg_page.php" method="post" onsubmit="return validate();"> 
                            <div class="form-row">
                                <div class="col-md-12 form-group">
                                    <label id="s">Student Name</label>
                                &nbsp;&nbsp;&nbsp;&nbsp;<label style="color: red;"><?php
                                if(isset($_SESSION['message'])){
                                    echo $_SESSION['message'];
                                    session_destroy();
                                }?></label> 
                                <input type="text" class="form-control" name="name" id="name" placeholder="Full Name">
                                </div>
                                
                            </div>

                            <div class="form-row">
                                <div class="col-md-3 form-group">
                                    <label>Roll Number</label>
                                    <input type="text" name="rollno" id="rollno" placeholder="Roll No" class="form-control">
                                </div>
                                <div class="col-md-3 form-group">
                                    <label>Branch</label>
                                    <select class="form-control" name = "branch" id = "branch" required>
                                        <option selected></option>
                                        <option value="CSE">CSE</option>
                                        <option value="IT">IT</option>
                                        <option value="CEIT">CEIT</option>
                                        <option value="EN">EN</option>
                                        <option value="EC">EC</option>
                                        <option value="ME">ME</option>
                                    </select>
                                </div>
                                <div class="col-md-3 form-group">
                                    <label>Section</label>
                                    <select class="form-control" name = "section" id = "section" required>
                                        <option selected></option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                       <option value="E">E</option>
        
                                    </select>
                                </div>
                                <div class="col-md-3 form-group">
                                    <label>Semester</label>
                                    <select class="form-control" name = "year" id = "year" required>
                                        <option selected></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                    </select>
                                </div>

                            </div>

                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label>Father's Name</label>
                                    <input type="text" name="fathername" id="fname" class="form-control" placeholder="Father's Name">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Mother's Name</label>
                                    <input type="text" name="mothername" id="mname" class="form-control" placeholder="Mother's Name">
                                </div>
                                
                            </div>

                            <div class="form-row">
                                <div class="col-md-4 form-group">
                                    <label>Father's Contact Number</label>
                                    <input type="text" name="fno" id="fno" placeholder="Contact Number" class="form-control">
                                </div>
                                <div class="col-md-4 form-group">
                                    <label>Mother's Contact Number</label>
                                    <input type="text" name="mno" id="mno" placeholder="Contact Number" class="form-control">
                                </div>
                                <div class="col-md-4 form-group">
                                    <label>Student Contact Number</label>
                                    <input type="text" name="sno" id="sno" placeholder="Contact Number" class="form-control">
                                </div>

                            </div>

                            <div>
                                <div class="form-row">
                                    <div class="col-6">
                                        <label>Date of Birth (MM/DD/YY)</label>
                                        <input type="date" class="form-control" name="dob" required>
                                    </div>
            
                                    <div class="col-6">
                                        <div class="form-row">
                                            <div class="col-1 form-group"></div>
                                            <div class="col-md-11 form-group">
                                                <label>Gender</label>
                                                <select class="form-control" name = "gen"required>
                                                    <option selected></option>
                                                    <option value="MALE">MALE</option>
                                                    <option value="FEMALE">FEMALE</option>
                                                    <option value="N/A">N/A</option>
                                                </select>
                                            </div>
                                        </div>
                                    
                                    </div>  
                                </div>
                            </div>

                            <div>
                                <label>Address</label><!--label-->
                                <input type="text" class="form-control form-group" name="add" id="add" placeholder="Street Address" required>
                                <div class="form-row">
                                    <div class="col-md-4 form-group">
                                        <input type="text" class="form-control" name="city" id="city" placeholder="City">
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <input type="text" class="form-control" name="state" id="state" placeholder="State">
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <input type="text" class="form-control" name="pin" id="pin" placeholder="Pincode">
                                    </div>
                                </div>
                            </div>

                            <!--Student E-mail Id-->

                            <div class="form-group">

                                <label>Student User-Id</label> 
                                
                                <input type="text" class="form-control" name="email" id="email" placeholder="Email-Id">
                            </div>
                            
                            <!--button-->
                            <button type="submit" name = "sub" class="btn button">Register</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button type="reset" class="btn button">Reset</button>
                                
                        </form>
                   </div>
                </div>
                <div class="col-1   "></div>
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
