<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            .container{
            box-shadow: 5px 5px 5px 5px grey;
            border-bottom-right-radius: 30px;
            border-top-left-radius: 30px;
            }
            .navbar{
                border-radius: 5px;
            }
            .line{
                border-right: 3px solid rgb(34, 66, 245);
            }
            .row{
                margin-top: 40px;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid mb-5">
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <a class="navbar-brand" href="#"><img src="https://resume.abes.ac.in/assets/images/ABESEC_logo.png" width="80" height="80"></a>
            <h1 class="text-white display-4 mx-auto font-weight-bold">ONLINE ATTENDENCE PORTAL</h1>
        </nav>
        <div class="row">
            <div class="col-md-12 col-lg-4 d-none d-lg-inline">
                <a href="#"><img src="img/img.svg" width="450px" height="450px"></a>
            </div>
            <div class="col-md-12 col-lg-1 d-none d-xl-block line">

            </div>
        <div class="container col-md-7 col-lg-4 ">
            <h1 class="text-center text-primary display-3">LOGIN</h1><hr>
        <form action="login_save.php" method="post">
            <div class="form-group">
                <label>Username</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                      </div>          
                <input class="form-control" id="lab" type="text" placeholder="Type Username" name="email" required>
                </div>
            </div>
            <div class="form-group">
                <label>Password</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                    </div>

                <input class="form-control" id="lab" type="password" placeholder="Type Password" name="pas" required>
            </div>
            </div>
            <p style="color:red;"><?php 
                if(isset($_SESSION['err'])){
                    echo $_SESSION['err'];
                    session_destroy();
                }
                ?>  
            </p>
            <label>Select Role</label>
            <div class="form-row"> 
            <div class="form-group col-md-6">
                <select class="form-control" name="identity" id="lab" required>
                    <option value="">Who you are?</option>
                    <option value="admin">ADMIN</option>
                    <option value="hod">HOD</option>
                    <option value="faculty">FACULTY</option>
                    <option value="student">STUDENT</option>
                  </select>
                  
            </div>
            <div class="form-group col-md-6">
                <button type="submit" name="s" class="btn btn-primary btn-block ">Login</button>
            </div>
            <p class="lead text-center">Click here to <a href="registration_page.php?a=1" name="re">Register</a></p>
            </div>
        </form>
        </div>
        </div>
        </div>
        <footer style="position: fixed; bottom: 0px; background-color: #000000; left: 0px; right: 0px; margin-bottom: 0px;">
  <div>
      <div class="footer-copyright text-center text-white">
        ©️ 2020 developed by Aaditya Bhargav, Arpit Verma, Kush Jindal under guidance of Mr. Anand Kr Srivastava
      </div>
  </div>
</footer>
    </body>
</html>