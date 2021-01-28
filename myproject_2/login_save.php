<?php
session_start();

if(!isset($_POST['s']))
	header("location:login.php");
else{
	
	$e =  $_POST['email'];
	$pa=   $_POST['pas'];
	$i = $_POST['identity'];

	include("dbconnection.php");

	//echo $e.$pa;
	$sq = "select * from login_table where USERNAME='$e' and PASSWORD='$pa' and IDENTITY = '$i'";

	$rs = $con->query($sq);

	//echo $rs->num_rows;
	if($rs->num_rows)
	{
		$_SESSION['e']=  $e;
		if($i == 'admin')
			header("location:admin_dashboard.php?email=$e");
		else if($i == 'hod'){
			header("location:hod_dashboard.php?ema=$e");
		}
		else if($i == 'faculty')
			header("location:faculty_dashboard.php?email=$e");
		else if($i == 'student')
			header("location:student_dashboard.php?email=$e");
	}
	else
	{   
	    $msg="Please Enter correct UserName and Password!!!!";
		$_SESSION['err']=$msg;
		header("location:login.php");
	}
}

?>