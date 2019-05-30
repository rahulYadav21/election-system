<?php
 include("../connection.php");
 $id=$_REQUEST['id'];
 //	echo $id;
 $query="delete from candidates where aadhar='$id'";
 $res=$conn->query($query);

 if($res){
 	echo("<script>alert('candidate information deleted succussfull')</script>");
          	//header("location:../../pages/admin/index.php");
          	echo("<script>window.location.assign('../../pages/admin/index.php')</script>");
 }
 else{
 	echo("<script>alert('something went wrong')</script>");
          	//header("location:../../pages/admin/index.php");
          	echo("<script>window.location.assign('../../pages/admin/index.php')</script>");
 }
 //header("location:../admin/");
?>