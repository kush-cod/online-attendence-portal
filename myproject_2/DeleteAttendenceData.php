<?php 
session_start();
if(!isset($_GET['email']))
        header("location:login.php");
else{
include("dbconnection.php");
$em = $_GET['email'];
$d = $_POST['Date'];
$l = $_POST['LectureNo'];
$sem = $_POST['Semester'];
$b = $_POST['Branch'];
$sec = $_POST['Section'];
$sub = $_POST['Subject'];
include("dbconnection.php");
$s = "delete from subject_attendance where Date='$d' and LectureNo='$l' and Semester='$sem' and Branch='$b' and Section='$sec' and Subject='$sub'";						
$rs = $con->query($s);						

    if($con->query($s))
    {
        $msg = "Deleted Successfully...";
        $_SESSION['m']=$msg;
        header("Location: DeleteAttendence.php?email=$em");
    }
    else{
        $msg = "Not Deleted...";
        $_SESSION['m']=$msg;
        header("Location: DeleteAttendence.php?email=$em");
    }
}
?>