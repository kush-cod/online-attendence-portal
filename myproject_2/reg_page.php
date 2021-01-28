<?php
session_start();
if(!isset($_POST['sub'])){
	header("location:login.php");
}
	$n = $_POST['name'];
	$r = $_POST['rollno'];
	$b = $_POST['branch'];
	$s = $_POST['section'];
	$y = $_POST['year'];
	$fname = $_POST['fathername'];
	$mname = $_POST['mothername'];
	$fnum = $_POST['fno'];
	$mnum = $_POST['mno'];
	$snum = $_POST['sno'];
	$dob = $_POST['dob'];
	$g = $_POST['gen'];
	$add = $_POST['add'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$pin = $_POST['pin'];
	$email = $_POST['email'];
	$i = "student";

include("dbconnection.php");

$sq = "insert into student_info(NAME,ROLL_NO,BRANCH,SECTION,SEMESTER,FATHER_NAME,MOTHER_NAME,FATHER_CONTACT_NO,MOTHER_CONTACT_NO,STUDENT_CONTACT_NO,DOB,GENDER,ADDRESS,CITY,STATE,PINCODE,EMAIL_ID,IDENTITY) values('$n',$r,'$b','$s',$y,'$fname','$mname','$fnum','$mnum','$snum','$dob','$g','$add','$city','$state',$pin,'$email','$i')";

$sq1 = "select * from student_info where EMAIL_ID = '$email'";
$rs = $con->query($sq1);

if($rs->num_rows == 0){
	$con->query($sq);
	$p = md5('$snum');
	$s1= "insert into login_table(USERNAME,PASSWORD,ENC_PASSWORD,IDENTITY) values('$email','$snum','$p','$i')";	
    $con->query($s1);	
    header("location:login.php");
}

else{
	$message = "Email-ID ALREADY TAKEN!!!!!!!!!";
	$_SESSION['message'] = $message;
	header("location:registration_page.php");
}
	

?>