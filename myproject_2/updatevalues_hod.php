<?php
	session_start();
	if(!isset($_GET['email']))
		header("location:login.php");
	else{

	$e = $_GET['email'];
	$id = $_GET['id'];

	$name = $_POST['name'];
	$branch = $_POST['branch'];
	$mobno = $_POST['mobno'];
	$address = $_POST['address'];
	$dob = $_POST['dob'];
	$pas = $_POST['pas'];


	include("dbconnection.php");

	$sq = "update hod set name= '$name',branch= '$branch',mobno= '$mobno',address= '$address',dob= '$dob' where hod_id = '$id'";
	$con->query($sq);

	$sq1 = "update login_table set PASSWORD='$pas' where USERNAME='$email'";
	$con->query($sq1);


	if($con->query($sq)|| $con->query($sq1) ){
		$msg1 = "UPDATED SUCCESSFULLY!!!!";
		$_SESSION['m'] = $msg1;
		header("location:update_hod.php?email=$e");
	}
	else{
		$msg = "NOT UPDATED!!!!";
		$_SESSION['m'] = $msg;
		header("location:update_hod.php?email=$e");
	}
}
?>