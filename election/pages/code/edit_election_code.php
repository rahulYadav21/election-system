<?php include("../connection.php");

$election_id=$_POST['election_id'];
$election_type=$_POST['election_type'];
$election_name=$_POST['election_name'];
$election_date=$_POST['date'];
$start_time=$_POST['start_time'];
$end_time=$_POST['end_time'];

$q="update election set 
     election_type='$election_type',
     election_name='$election_name',
     election_date='$election_date',
     start_time='$start_time',
     end_time='$end_time'
     where election_id='$election_id'
";

$res=$conn->query($q);

if($res){
	echo("<script>alert('election information updated succussfull')</script>");
          	//header("location:../../pages/admin/index.php");
          	echo("<script>window.location.assign('../../pages/admin/index.php')</script>");
}
else{
	echo("<script>alert('something went wrong')</script>");
          	//header("location:../../pages/admin/index.php");
          	echo("<script>window.location.assign('../../pages/admin/index.php')</script>");
}
?>