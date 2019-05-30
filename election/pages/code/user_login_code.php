<?php
session_start();
$enrollment_no=$_POST['enrollment_no'];
$_SESSION['user']=$enrollment_no;
$password=$_POST['password'];
echo $enrollment_no,$password;
include("../connection.php");
$query="select enrollment_no,dob from user_info where enrollment_no='$enrollment_no' and mobile='$password'";
$res=$conn->query($query);
if($res->num_rows==1)
{	
//header("Location:../../pages/voters_dashboard.php");
echo("<script>window.location.assign('../../pages/voters_dashboard.php')</script>");
}
else
{
header("Location:../pgp.php?msg=1");
}
?>