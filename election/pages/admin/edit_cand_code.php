<?php
include("../connection.php");
$name=$_POST['name'];
$dob=$_POST['dob'];
$address=$_POST['address'];
$party_name=$_POST['party_name'];
$email=$_POST['email'];
$symbol=$_FILES['symbol']['name'];
//$size=$_FILES['symbol']['size'];
//$type=$_FILES['symbol']['type'];
//$tmp_name=$_FILES['symbol']['tmp_name'];
$pic=$_FILES['pic']['name'];
//$size1=$_FILES['pic']['size'];
//$type1=$_FILES['pic']['type'];
//$tmp_name1=$_FILES['pic']['tmp_name'];
$symboll="../../pic/symbol/";
$picl="../../pic/candidate_pic/";
$mobile=$_POST['mobile'];
$aadhar=$_POST['aadhar'];
$self_description=$_POST['self_discription'];

$data="update candidates 

set name='$name',
dob='$dob',
faddress='$address'
,party_name='$party_name'
,email='$email'
,symbol='$symbol'
,photo='$pic'
,number='$mobile'
,seffdes='$self_description'

 where 
 aadhar='$aadhar'";

$res=$conn->query($data);

if($res){
	echo("<script>alert('candidate information updated succussfull')</script>");
          	//header("location:../../pages/admin/index.php");
          	echo("<script>window.location.assign('../../pages/admin/index.php')</script>");
}
else{
	echo("<script>alert('something went wrong')</script>");
          	//header("location:../../pages/admin/index.php");
          	echo("<script>window.location.assign('../../pages/admin/index.php')</script>");
}
?>