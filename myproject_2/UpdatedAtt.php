<?php
session_start();
if(!isset($_GET['email']))
        header("location:login.php");
else{
$em = $_GET['email'];
$e = $_POST['Email'];
$d = $_POST['Date'];
$l = $_POST['Lecture'];
$sub = $_POST['Subject'];
$s = $_POST['Status'];
include("dbconnection.php");
$s = "update subject_attendance set Status='$s' where Email='$e' and Date='$d' and LectureNo='$l' and Subject='$sub'";   
$rs=$con->query($s);
if($con->query($s))
{
    $msg = "Marked Successfully...";
    $_SESSION['m']=$msg;
    header("Location: UpdateAttendence.php?email=$em");
}
else{
    $msg = "Not Marked Successfully...";
    $_SESSION['m']=$msg;
    header("Location: UpdateAttendence.php?email=$em");
}
}

?>