<?php
session_start();
if(!isset($_GET['email']))
		header("location:login.php");
else{
	$e = $_GET['email'];
	$name = $_POST['name'];
	$branch = $_POST['branch'];
	$num = $_POST['num'];
	$a = $_POST['address'];
	$email = $_POST['email'];
	$id = $_POST['id'];
	$dob = $_POST['dob'];

	/*echo $s;
	echo $sec;
	echo $s1;
	echo $s2;
	echo $s3;
	echo $s4;
	echo $s5;*/

	include("dbconnection.php");

	$sq = "insert into hod values('$name','$branch','$num','$a','$email','$id','$dob')";       
   
	$sq1 = "select * from hod where hod_id = '$id'";
	$rs = $con->query($sq1);

if($rs->num_rows == 0){
	$con->query($sq);
	$p = md5('$id');
	$s1= "insert into login_table(USERNAME,PASSWORD,ENC_PASSWORD,IDENTITY) values('$email','$id','$p','hod')";	
    $con->query($s1);	
    $message = "HOD IS ADDED SUCCESSFULLY!!!!!!!!!";
	$_SESSION['message'] = $message;
    header("location:add_hod.php?email=$e");
}

else{
	$message = "HOD-Id ALREADY TAKEN!!!!!!!!!";
	$_SESSION['message'] = $message;
	header("location:add_hod.php?email=$e");
}
}
?>