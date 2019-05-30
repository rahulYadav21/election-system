<?php
include("../connection.php");
$election_id=$_POST['election_id'];
$election_type=$_POST['election_type'];
$election_name=$_POST['election_name'];
$election_date=$_POST['date'];
$start_time=$_POST['start_time'];
$end_time=$_POST['end_time'];
//echo $election_id,$election_type,$election_name,$election_date,$start_time,$end_time;

$qe="select *from election";
$ress=$conn->query($qe);

if ($ress->num_rows==1) {
	echo("<script>alert('You can add one election details only')</script>");
          	//header("location:../../pages/admin/index.php");
          	echo("<script>window.location.assign('../../pages/admin/index.php')</script>");
}
else{
$insert="insert into election (election_id,election_type,election_name,election_date,start_time,end_time) values('$election_id','$election_type','$election_name','$election_date','$start_time','$end_time')";
          
          $res=$conn->query($insert);

          if($res){
          	echo("<script>alert('election information inserted succussfull')</script>");
          	//header("location:../../pages/admin/index.php");
          	echo("<script>window.location.assign('../../pages/admin/index.php')</script>");
          }
      }
?>   