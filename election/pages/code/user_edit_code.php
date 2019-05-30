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
//echo $enrollment_no,$firstname,$lastname,$gender,$dob,$fname,$mname,$email,$mobile,$aadhar,$address,$city,$state,$file,$size;

$data="update user_info 

set firstname='$firstname',
lastname='$lastname'
,gender='$gender'
,dob='$dob'
,fname='$fname'
,mname='$mname'
,email='$email'
,mobile='$mobile'
,aadhar='$aadhar'
,address='$address'
,city='$city'
,state='$state'
 where 
 enrollment_no='$enrollment_no'";
$rs=$conn->query($data);
if($rs){
	echo("<script>alert('info uddated successfully...')</script>");
	          	//echo("<script>window.location.assign('../../pages/register.php')</script>");
	echo("<script>window.location.assign('../../pages/admin/index.php')</script>");
}
else{
	echo("<script>alert('something went wrong')</script>");
	          	//echo("<script>window.location.assign('../../pages/register.php')</script>");
	echo("<script>window.location.assign('../../pages/admin/index.php')</script>");
}

?>