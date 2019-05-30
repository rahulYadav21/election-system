<?php
session_start();
include("../connection.php");
if($_SESSION['admin']=="")
{
session_destroy();
header("Location:admin.php?mzg=3");	
}

include("admin_header.php");

$id=$_GET['id'];

$q="select *from election where election_id='$id'";
$res=$conn->query($q);

$row=$res->fetch_assoc();

?>
<title>Online Election</title>
	<link rel="stylesheet" type="text/css" href="../../css/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/css/animate.css">
	<link rel="stylesheet" type="text/css" href="../../style.css">
	<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../../js/jquery-3.4.1.js"></script>
	
	<style type="text/css">
		@font-face {
			  font-family: 'OpenSans-Light';
			  src:url(../css/Open-Sans/OpenSans-Light.ttf);
			}
		body{
			font-family: OpenSans-Light;
		}
	</style>
<center><h1>Management of Conducting Election</h1></center>
<form action="../code/edit_election_code.php" method="post" enctype="multipart/form-data" class="form-horizontal" >
							<div class="form-group">
							<label for="name" class="col-xs-3 control-label">Election Id :</label>
							<div class="col-xs-6">
							<input type="text" class="form-control"  name="election_id" value="<?php echo $row['election_id'];?>">
							</div>
							</div>
							<div class="form-group">
							<label for="name" class="col-xs-3 control-label">Election Type :</label>
							<div class="col-xs-6">
							<input type="text" class="form-control"  name="election_type" value="<?php echo $row['election_type'];?>">
							</div>
							</div>
							<div class="form-group">
							<label for="name" class="col-xs-3 control-label">Election Name :</label>
							<div class="col-xs-6">
							<input type="text" class="form-control"  name="election_name" value="<?php echo $row['election_name'];?>">
							</div>
							</div>
							<div class="form-group">
							<label for="name" class="col-xs-3 control-label">Date:</label>
							<div class="col-xs-6">
							<input type="date" name="date" class="form-control" value="<?php echo $row['election_date'];?>" >
							</div>
							</div>
							<div class="form-group">
							<label for="name" class="col-xs-3 control-label">Start:</label>
							<div class="col-xs-4">
							<input type="time" class="form-control"  name="start_time" value="<?php echo $row['start_time'];?>">
							</div>
							</div>
							<div class="form-group">
							<label for="name" class="col-xs-3 control-label">End:</label>
							<div class="col-xs-4">
							<input type="time" class="form-control"  name="end_time" value="<?php echo $row['end_time'];?>">
							</div>
							</div>					
							<div class="form-group">
							<div class="col-xs-offset-3 col-xs-9">
							<button type="submit" class="btn btn-primary">Update<span class="glyphicon glyphicon-send"></span></button>
							</div>
							</div>
						</form>