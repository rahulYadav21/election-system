<?php
session_start();
$enrollment_no=$_SESSION['user'];
include("../connection.php");
$cid=$_REQUEST['cid'];
//echo "candidate_id=",$cid,"<br>",$enrollment_no,"<br>";
$query="insert into votelist(aadhar,enroll_id) values('$cid','$enrollment_no')";
$res=$conn->query($query);
//$row=mysql_fetch_array($res,MYSQL_BOTH);

if($res){
	echo("<script>alert('vote done successfully')</script>");

		echo("<script>window.location.assign('../../pages/voters_dashboard.php')</script>");
}
else{
	echo("<script>window.location.assign('../../pages/voters_dashboard.php')</script>");
}

?>