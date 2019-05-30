<?php include("../connection.php"); 
$one=1;
$zero=0;
$q="select *from sstatus";

$res=$conn->query($q);
if ($res->num_rows==0) {
	# code...

	$q="insert into sstatus(sts) values('$one')";

	$res=$conn->query($q);
	echo("<script>alert('status change')</script>");
          	//header("location:../../pages/admin/index.php");
          	echo("<script>window.location.assign('../../pages/admin/index.php')</script>");
}

else{
$num=$res->fetch_assoc();


$n=$num['sts'];
echo $n;

if($n==1){

	$up="update sstatus set sts='$zero' where id='$one'" ;
	$res=$conn->query($up);
	echo("<script>alert('status change')</script>");
          	//header("location:../../pages/admin/index.php");
          	echo("<script>window.location.assign('../../pages/admin/index.php')</script>");
}
else{
	$up="update sstatus set sts='$one' where id='$one'";
	$res=$conn->query($up);
	echo("<script>alert('status change')</script>");
          	//header("location:../../pages/admin/index.php");
          	echo("<script>window.location.assign('../../pages/admin/index.php')</script>");
}

}
?>

