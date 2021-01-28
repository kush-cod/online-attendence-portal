<?php
session_start();
if(!isset($_GET['e']))
	header("location:login.php");
else{
	$em = $_GET['e'];
	$s = $_POST['sem'];
	$sec = $_POST['sec'];
	$email = $_POST['email'];



	include("dbconnection.php");

	$sq = "update student_info set SUB1 = '',SUB2 = '',SUB3 = '',SUB4 = '',SUB5 = '',SUB6 = '' where SEMESTER = $s and SECTION = '$sec' and EMAIL_ID = '$email'";
    $con->query($sq);       
   
	//if($rs->num_rows)
	if($con->affected_rows){
		$msg1 = "UNMAPPED SUCCESSFULLY!!!!";
		$_SESSION['m'] = $msg1;
		header("location:deletemapstu.php?e=$em");
	}
	else{
		$msg = "NOT UNMAPPED!!!!";
		$_SESSION['m'] = $msg;
		header("location:deletemapstu.php?e=$em");
	}
}
?>