<?php
include("../connection.php");
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
echo $name,$email,$message;
$query="insert into tbl_contact (name,email,message,date,time) values ('$name','$email','$message',curtime(),curdate())";
mysql_query($query);
header("location:../../index.php?msg=1");

?>