<?php
session_start();

$email = $_GET['e'];

$i = $_POST['Fid'];
$n = $_POST['Fname'];
$m = $_POST['Fmobno'];
$e = $_POST['Femail'];

$s1 = "";
$b1 = "";
$sec1 = "";
$sem1 = "";
$s2 = "";
$b2 = "";
$sec2 = "";
$sem2 = "";
$s3 = "";
$b3 = "";
$sec3 = "";
$sem3 = "";


$s1 = $_POST['Sub1'];
$b1 = $_POST['Branch1'];
$sec1 = $_POST['Section1'];
$sem1 = $_POST['Semester1'];
$s2 = $_POST['Sub2'];
$b2 = $_POST['Branch2'];
$sec2 = $_POST['Section2'];
$sem2 = $_POST['Semester2'];
$s3 = $_POST['Sub3'];
$b3 = $_POST['Branch3'];
$sec3 = $_POST['Section3'];
$sem3 = $_POST['Semester3'];

include("dbconnection.php");
$sql = "insert into faculty values('$i', '$n', '$m', '$e', '$s1', '$sem1', '$b1', '$sec1', '$s2', '$sem2' , '$b2', '$sec2', '$s3', '$sec3', '$sem3', '$b3')";
if($con->query($sql)){
    $ep = md5($i);
    $sql1= "insert into login_table(USERNAME, PASSWORD, ENC_PASSWORD, IDENTITY) values('$e', '$i', '$ep', 'faculty')";
    $con->query($sql1);
    $msg = "Added Successfully...";
    $_SESSION['m']=$msg;
    header("Location: AddFacultyForm.php?e=$email");
}
else{
    $msg = "Cannot Added...";
    $_SESSION['m']=$msg;
    header("Location: AddFacultyForm.php?e=$email");
}

?>