<?php
include("../connection.php");
//$db = mysqli_connect("localhost", "root", "", "onlinevote");

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

$q="select *from candidates where aadhar='$aadhar'";
$res=$conn->query($q);

if($res->num_rows==1){
	echo("<script>alert('this aadhar is already enrolled')</script>");
          	//header("location:../../pages/admin/index.php");
          	echo("<script>window.location.assign('../../pages/admin/index.php')</script>");
}
else{
//echo $name,$dob,$address,$party_name,$email,$symbol,$size,$type,$tmp_name,$pic,$size1,$type1,$tmp_name1,$aadhar,$self_description;
$insert="insert into candidates(name,dob,faddress,party_name,email,symbol,photo,number,aadhar,seffdes) values('$name','$dob','$address','$party_name','$email','$symbol','$pic','$mobile','$aadhar','$self_description')";
$res=$conn->query($insert);
//mysqli_query($db, $insert);

$target_sym = "../../pic/symbol/".basename($symbol);
$target_pic = "../../pic/candidate_pic/".basename($pic);

move_uploaded_file($_FILES['symbol']['tmp_name'], $target_sym);

move_uploaded_file($_FILES['pic']['tmp_name'], $target_pic);
//move_uploaded_file($tmp_name,$symboll.$symbol);
//move_uploaded_file($tmp_name1,$picl.$pic);http://localhost/election/pages/admin/index.php
echo("<script>alert('candidate information inserted succussfull')</script>");
          	//header("location:../../pages/admin/index.php");
          	echo("<script>window.location.assign('../../pages/admin/index.php')</script>");
//header("location:../../pages/admin/index.php");
}
 //echo("<script>window.location.assign('../admin.php')</script>");
 ?>