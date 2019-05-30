<?php
session_start();
include("../connection.php");
if($_SESSION['admin']=="")
{
session_destroy();
header("Location:admin.php?mzg=3");	
}

include("admin_header.php");

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
			  src:url(../../css/Open-Sans/OpenSans-Light.ttf);
			}
		body{
			font-family: OpenSans-Light;
		}
		.group{
			width:100% !important;
		}
	</style>
<center><h1>Management of Conducting Election</h1></center>
<form action="../code/conduct_election_code.php" method="post" enctype="multipart/form-data" class="form-horizontal" >
							<div class="form-group group">
							<label for="name" class="col-xs-3 control-label">Election Id :</label>
							<div class="col-xs-6">
							<input type="text" class="form-control"  name="election_id" placeholder="Election Id">
							</div>
							</div>
							<div class="form-group group">
							<label for="name" class="col-xs-3 control-label">Election Type :</label>
							<div class="col-xs-6">
							<input type="text" class="form-control"  name="election_type" placeholder="Election Type">
							</div>
							</div>
							<div class="form-group group">
							<label for="name" class="col-xs-3 control-label">Election Name :</label>
							<div class="col-xs-6">
							<input type="text" class="form-control"  name="election_name" placeholder="Election Name">
							</div>
							</div>
							<div class="form-group group">
							<label for="name" class="col-xs-3 control-label">Duration:</label>
							<div class="col-xs-6">
							<input type="date" name="date" class="form-control" >
							</div>
							</div>
							<div class="form-group group">
							<label for="name" class="col-xs-3 control-label">Start:</label>
							<div class="col-xs-4">
							<input type="time" class="form-control"  name="start_time">
							</div>
							</div>
							<div class="form-group group">
							<label for="name" class="col-xs-3 control-label">End:</label>
							<div class="col-xs-4">
							<input type="time" class="form-control"  name="end_time">
							</div>
							</div>					
							<div class="form-group group">
							<div class="col-xs-offset-3 col-xs-9">
							<button type="submit" class="btn btn-primary">Submit<span class="glyphicon glyphicon-send"></span></button>
							</div>
							</div>
						</form>