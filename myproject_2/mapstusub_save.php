<?php
session_start();
if(!isset($_GET['e']))
	header("location:login.php");
else{
	$email = $_GET['e'];
	$s = $_POST['sem'];
	$sec = $_POST['sec'];
	$s1 = $_POST['sub1'];
	$s2 = $_POST['sub2'];
	$s3 = $_POST['sub3'];
	$s4 = $_POST['sub4'];
	$s5 = $_POST['sub5'];
	$s6 = $_POST['sub6'];

	/*echo $s;
	echo $sec;
	echo $s1;
	echo $s2;
	echo $s3;
	echo $s4;
	echo $s5;*/

	include("dbconnection.php");

	$sq = "update student_info set SUB1 = '$s1',SUB2 = '$s2',SUB3 = '$s3',SUB4 = '$s4',SUB5 = '$s5',SUB6 = '$s6' where SEMESTER = $s and SECTION = '$sec'";
    $con->query($sq);       
   
	//if($rs->num_rows)
	if($con->affected_rows){
		$msg1 = "MAPPED SUCCESSFULLY!!!!";
		$_SESSION['m'] = $msg1;
		header("location:mapstusub.php?e=$email");
	}
	else{
		$msg = "NOT MAPPED!!!!";
		$_SESSION['m'] = $msg;
		header("location:mapstusub.php?e=$email");
	}
}
?>