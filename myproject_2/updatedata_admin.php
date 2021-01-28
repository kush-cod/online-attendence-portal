<?php
	session_start();
	
	if(!isset($_GET['email']))
		header("location:login.php");

	else{	
    $em = $_GET['email'];
    
	$s2 = $_POST['sub2'];
	$s3 = $_POST['sub3'];
	$s4 = $_POST['sub4'];


	include("dbconnection.php");

	$sq = "update admin set name='$s2',mobno='$s3' where email = '$em'";
	$con->query($sq);

	$sq1 = "update login_table set PASSWORD='$s4' where USERNAME = '$em'";	
	$con->query($sq1);


	if($con->query($sq) && $con->query($sq1)){
		$msg1 = "UPDATED SUCCESSFULLY!!!!";
        $_SESSION['m'] = $msg1;
		header("location:viewprofile_admin.php?email=$em");
	}
	else{
		$msg = "NOT UPDATED!!!!";
		$_SESSION['m'] = $msg;
		header("location:viewprofile_admin.php?email=$em");
	}
}
?>