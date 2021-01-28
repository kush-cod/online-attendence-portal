<?php
session_start();
if(!isset($_GET['email']))
        header("location:login.php");
else{
$e = $_GET['email'];

$n = $_POST['Fname'];
$pass = $_POST['password'];
$m = $_POST['Fmobno'];


include("dbconnection.php");

$s = "update faculty set Fname='$n', Fmobno='$m' where Femailid='$e'";
$rs=$con->query($s);

$s1 = "update login_table set PASSWORD='$pass' where USERNAME='$e'";
$rs1 = $con->query($s1);

if($con->query($s1) && $con->query($s))
{
    $msg = "Updated Successfully...";
    $_SESSION['m']=$msg;
    header("location: FacultyProfile.php?email=$e");
}
else{
    $msg = "Not Updated...";
    $_SESSION['m']=$msg;
    header("location: FacultyProfile.php?email=$e");
    echo "Failed ".$con->error ;
}
}
?>