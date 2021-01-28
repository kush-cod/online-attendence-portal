<?php
	session_start();
	if(!isset($_GET['e']))
		header("location:login.php");
	else{
	$em = $_GET['e'];
	$email = $_GET['stuemail'];
	$s1 = $_POST['sub1'];
	$s2 = $_POST['sub2'];
	$s3 = $_POST['sub3'];
	$s4 = $_POST['sub4'];
	$s5 = $_POST['sub5'];
	$s6 = $_POST['sub6'];

	include("dbconnection.php");

	$sq = "update student_info set SUB1= '$s1',SUB2= '$s2',SUB3= '$s3',SUB4= '$s4',SUB5= '$s5',SUB6= '$s6' where EMAIL_ID = '$email'";
	$con->query($sq);

	if($con->query($sq)){
		$msg1 = "UPDATED SUCCESSFULLY!!!!";
		$_SESSION['m'] = $msg1;
		header("location:updatemapstu.php?e=$em");
	}
	else{
		$msg = "NOT UPDATED!!!!";
		$_SESSION['m'] = $msg;
		header("location:updatemapstu.php?e=$em");
	}
}
?>