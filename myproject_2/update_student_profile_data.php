<?php
    session_start();

    if(!isset($_GET['s']))
		header("location:login.php");
    
    else{
    $email = $_SESSION['student_emailid'];
    
	$name = $_POST['name'];
    $branch = $_POST['branch'];
    $sec =  $_POST['sec'];
    $sem = $_POST['sem'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $fno = $_POST['fno'];
    $mno = $_POST['mno'];
    $sno = $_POST['sno'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $gen = $_POST['gen'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $pin = $_POST['pin'];
    $pass = $_POST['pass'];

    include("dbconnection.php");
    
    $sq = "update student_info set NAME='$name',BRANCH='$branch', SECTION= '$sec', SEMESTER = $sem, ADDRESS='$address', DOB = '$dob', FATHER_NAME='$fname', MOTHER_NAME = '$mname', FATHER_CONTACT_NO='$fno', MOTHER_CONTACT_NO = '$mno', STUDENT_CONTACT_NO = '$sno', GENDER = '$gen',CITY = '$city', STATE = '$state',PINCODE = $pin  where EMAIL_ID = '$email'";
    $rs = $con->query($sq);

    $sq1 = "update login_table set PASSWORD = '$pass' where USERNAME='$email'";
    
   
	if($con->query($sq) && $con->query($sq1)){
		$msg1 = "UPDATED SUCCESSFULLY!!!!";
        $_SESSION['m'] = $msg1;
        $a = $email;
		header("location:view_profile_student.php?student_email=$email");
	}
	else{
		$msg = "NOT UPDATED!!!!";
		$_SESSION['m'] = $msg;
		header("location:view_profile_student.php?student_email=$email");
    }
}
?>