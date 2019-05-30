<?php
session_start();
include("../connection.php");
$admin_id=$_POST['admin'];
$_SESSION['admin']=$admin_id;
$password=$_POST['password'];
$Query="select  *from admin where id='$admin_id' and pass='$password'";
$res=$conn->query($Query);
if($res->num_rows==1)
{
	//header("Location:../admin/index.php");
	echo("<script>window.location.assign('../../pages/admin/index.php')</script>");
}
else
{
		echo("<script>window.location.assign('../../pages/admin/admin.php?mzg=3')</script>");

	//header("Location:../../pages/admin/admin.php?mzg=3");
}
?>