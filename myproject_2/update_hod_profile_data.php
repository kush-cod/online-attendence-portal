<?php
	session_start();

	if(!isset($_GET['hod_email']))
		header("location:login.php");
	
	else{

    include("dbconnection.php");
    $email = $_GET['hod_email']; 
	$name = $_POST['name'];
    $mobno = $_POST['mobno'];
    $add = $_POST['address'];
	$dob = $_POST['dob'];
	$pass = $_POST['pass'];
	
	
	include("dbconnection.php");

	$sq = "update hod set name='$name', mobno= $mobno, address='$add', dob = '$dob' where email_id = '$email'";

	$con->query($sq);

	$sq1 = "update login_table set PASSWORD='$pass' where USERNAME = '$email'";	
	$con->query($sq1);

	if($con->query($sq) && $con->query($sq1)){
		$msg1 = "UPDATED SUCCESSFULLY!!!!";
        $_SESSION['m'] = $msg1;
        $a = $email;
		header("location:view_profile_hod.php?hod_email=$email");
	}
	else{
		$msg = "NOT UPDATED!!!!";
		$_SESSION['m'] = $msg;
		header("location:view_profile_hod.php?hod_email=$email");
	}
}
?>