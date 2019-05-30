<?php
include("../connection.php");
$enrollment_no=$_POST['enrollment_no'];
$firstname=$_POST['first_name'];
$lastname=$_POST['last_name'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$fname=$_POST['father'];
$mname=$_POST['mother'];
$email=$_POST['email'];
$mobile=$_POST['number'];
$aadhar=$_POST['aadhar'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$file=$_FILES['file']['name'];
$size=$_FILES['file']['size'];
$type=$_FILES['file']['type'];
$tmp_name=$_FILES['file']['tmp_name'];
$location="../../pic/user/";

$q="select *from user_info where enrollment_no='$enrollment_no'";

$res=$conn->query($q);
if($res->num_rows==1){
	echo("<script>alert('this enrollment_no already registered if you are not please contact admin')</script>");
	          	echo("<script>window.location.assign('../../pages/register.php')</script>");

}

//echo $enrollment_no,$firstname,$lastname,$gender,$dob,$fname,$mname,$email,$mobile,$aadhar,$address,$city,$state,$file,$size;
else{
$data="insert into user_info (enrollment_no,firstname,lastname,gender,dob,fname,mname,email,mobile,aadhar,address,city,state,photo,date,time) values ('$enrollment_no','$firstname','$lastname','$gender','$dob','$fname','$mname','$email','$mobile','$aadhar','$address','$city','$state','$file',curdate(),curtime())";
move_uploaded_file($tmp_name,$location.$file);
	$R=$conn->query($data);
	header("location:../../index.php?msg=1");
}
?>