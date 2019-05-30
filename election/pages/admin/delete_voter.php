<?php
 include("../connection.php");
 $id=$_REQUEST['id'];
 //	echo $id;
 $query="delete from user_info where enrollment_no='$id'";
 $res=$conn->query($query);

 if($res){
 	echo("<script>alert('info deleted successfully...')</script>");
	          	//echo("<script>window.location.assign('../../pages/register.php')</script>");
	echo("<script>window.location.assign('../../pages/admin/index.php')</script>");
 }
 //header("location:../admin/");
 else{
	echo("<script>alert('something went wrong')</script>");
	          	//echo("<script>window.location.assign('../../pages/register.php')</script>");
	echo("<script>window.location.assign('../../pages/admin/manage_voters.php')</script>");
}

?>