<?php
session_start();
if(!isset($_GET['email2'])){
    header("location:login.php");
}
$s1 = $_POST['Sub1'];
$s2 = $_POST['Sub2'];
$s3 = $_POST['Sub3'];
$s4 = $_POST['Sub4'];
$s5 = $_POST['Sub5'];
$s6 = $_POST['Sub6'];
$e = $_GET['email1'];
$e2 = $_GET['email2'];
include("dbconnection.php");
$s = "update student_info set SUB1='$s1', SUB2='$s2', SUB3='$s3', SUB4='$s4', SUB5='$s5', SUB6='$s6' where EMAIL_ID='$e'";   
$rs=$con->query($s);
if($con->query($s))
{
    $msg = "Deleted Successfully...";
    $_SESSION['m']=$msg;
    header("location:DeleteStudentForm.php?email=$e2");
}
else{
    $msg = "Not Deleted Successfully...";
    $_SESSION['m']=$msg;
    header("location:DeleteStudentForm.php?email=$e2");
}
?>