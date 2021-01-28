<?php
session_start();
if(!isset($_GET['email']))
		header("location:login.php");
else{

	$e = $_GET['email'];
	$id = $_POST['id'];
	$dob = $_POST['dob'];


	include("dbconnection.php");

	$s1 = "delete from hod where hod_id='$id'";
	$s2 = "delete from login_table where USERNAME='$dob'";
   
	$rs1 =  $con->query($s1);
    $rs2 =  $con->query($s2);
     
   
	//if($rs->num_rows)
	if($con->query($s1) && $con->query($s2)){
		$msg1 = "DELETED SUCCESSFULLY!!!!";
		$_SESSION['message'] = $msg1;
		header("location:del_hod.php?email=$e");
	}
	else{
		$msg = "ENTER DETAILS CAREFULLY!!!!";
		$_SESSION['message'] = $msg;
		header("location:del_hod.php?email=$e");
	}
}
?>