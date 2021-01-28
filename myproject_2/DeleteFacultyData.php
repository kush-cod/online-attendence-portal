<?php
session_start();
if(!isset($_GET['e']))
        header("location:login.php");
else{
$email = $_GET['e'];
$i = $_POST['Fid'];
$e = $_POST['Femailid'];
include("dbconnection.php");

$s1 = "delete from faculty where Fid='$i'";
$s2 = "delete from login_table where USERNAME='$e'";
    $rs1 =  $con->query($s1);
    $rs2 =  $con->query($s2); 
    if($con->query($s1) && $con->query($s2))
    {
        $msg = "Deleted Successfully...";
        $_SESSION['m']=$msg;
        header("Location: DeleteFacultyForm.php?e=$email");
    }
    else{
        $msg = "Not Deleted...";
        $_SESSION['m']=$msg;
        header("Location: DeleteFacultyForm.php?e=$email");
    }
}
?>