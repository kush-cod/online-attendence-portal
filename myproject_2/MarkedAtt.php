<?php 
session_start();
if(!isset($_GET['email']))
        header("location:login.php");
else{
include("dbconnection.php");

$em = $_GET['email'];
$co = $_GET['count'];

for($i=0 ; $i<$co ; $i++){
    $e = $_POST['email'][$i];
    $s = $_POST['status'][$i];
    $d = $_POST['date'];
    $l = $_POST['lecture'];
    $sem = $_POST['semester'];
    $b = $_POST['branch'];
    $sec = $_POST['section'];
    $sub = $_POST['subject'];
    $sql = "insert into subject_attendance(Email, Date, Semester, Branch, Section, Subject, LectureNo, Status) values('$e', '$d', '$sem', '$b', '$sec', '$sub', $l, '$s')";
    $rs = $con->query($sql);
}
if($con->query($sql))
    {
    $msg = "Marked Successfully...";
    $_SESSION['m']=$msg;
    header("Location: MarkAttendence.php?email=$em");
    }
    else{
        $msg = "Not Marked...";
        $_SESSION['m']=$msg;
        header("Location: MarkAttendence.php?email=$em");
    }
}

?>
