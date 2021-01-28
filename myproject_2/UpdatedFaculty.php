<?php
session_start();
if(!isset($_GET['e']))
        header("location:login.php");
else{
$email = $_GET['e'];

$s1 = $_POST['Sub1'];
$s2 = $_POST['Sub2'];
$s3 = $_POST['Sub3'];
$sec1 = $_POST['Section1'];
$sem1 = $_POST['Semester1'];
$sec2 = $_POST['Section2'];
$sem2 = $_POST['Semester2'];
$sec3 = $_POST['Section3'];
$sem3 = $_POST['Semester3'];
$b1 = $_POST['Branch1'];
$b2 = $_POST['Branch2'];
$b3 = $_POST['Branch3'];
$i = $_SESSION['email'];


include("dbconnection.php");
$s = "update faculty set Sub1='$s1', Sub2='$s2', Sub3='$s3', Sub1Sec='$sec1', Sub1Sem='$sem1', Sub1Branch='$b1', Sub2Sec='$sec2', Sub2Sem='$sem2', Sub2Branch='$b2', Sub3Sec='$sec3', Sub3Sem='$sem3', Sub3Branch='$b3' where Femailid='$i'";   
$rs=$con->query($s);
if($con->query($s))
{
    $msg = "Updated Successfully...";
    $_SESSION['m']=$msg;
    header("location: UpdateFacultyForm.php?e=$email");
}
else{
    $msg = "Not Updated...";
    $_SESSION['m']=$msg;
    header("location: UpdateFacultyForm.php?e=$email");
}
}
?>