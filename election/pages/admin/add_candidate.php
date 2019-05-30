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
			  src:url(../css/Open-Sans/OpenSans-Light.ttf);
			}
		body{
			font-family: OpenSans-Light;
		}
	</style>
<center><h1>Add New Candidate Here!!!</h1></center>
<form action="../code/candidate_registration_code.php" method="post" enctype="multipart/form-data" class="form-horizontal" >
							<div class="form-group group">
							<label for="name" class="col-xs-3 control-label">Name:</label>
							<div class="col-xs-6">
							<input type="text" class="form-control"  name="name" placeholder="Name">
							</div>
							</div>
							<div class="form-group group">
							<label for="name" class="col-xs-3 control-label">Date of Birth  :</label>
							<div class="col-xs-6">
							<input type="date" class="form-control"  name="dob" placeholder="Date of Birth ">
							</div>
							</div>
							<div class="form-group group">
							  <label for="Textarea" class="col-xs-3 control-label">Full Address :</label>
							  <div class="col-xs-6">
							  <textarea class="form-control textarea" id="Textarea" rows="3" cols="40"name="address" placeholder="flat no./address/pincode"></textarea>
							</div>
							</div>
							<div class="form-group group">
							  <label for="Textarea" class="col-xs-3 control-label">Party Name:</label>
							  <div class="col-xs-6">
							  <input type="text" class="form-control"  name="party_name" placeholder="Date of Birth ">
							</div>
							</div>
							<div class="form-group group">
							<label for="name" class="col-xs-3 control-label">Email :</label>
							<div class="col-xs-6">
							<input type="text" class="form-control"  name="email" placeholder="Email">
							</div>
							</div>
							<div class="form-group group">
							<label for="name" class="col-xs-3 control-label">Symbol:</label>
							<div class="col-xs-6">
							<input type="file" class="form-control"  name="symbol">
							</div>
							</div>
							<div class="form-group group">
							<label for="name" class="col-xs-3 control-label">Photo :</label>
							<div class="col-xs-6">
							<input type="file" class="form-control"  name="pic">
							</div>
							</div>
							<div class="form-group group">
							<label for="name" class="col-xs-3 control-label">Number :</label>
							<div class="col-xs-6">
							<input type="text" class="form-control"  name="mobile" placeholder="Number">
							</div>
							</div>
							<div class="form-group group">
							<label for="name" class="col-xs-3 control-label">Aadhar Id:</label>
							<div class="col-xs-6">
							<input type="number" class="form-control"  name="aadhar" placeholder="Aadhar no">
							</div>
							</div>	
                             <div class="form-group group">
							  <label for="Textarea" class="col-xs-3 control-label">Self Discription :</label>
							  <div class="col-xs-6">
							  <textarea class="form-control textarea" id="Textarea" rows="3" placeholder="Self Discription" cols="40"name="self_discription"></textarea>
							</div>
							</div>							
							<div class="form-group group">
							<div class="col-xs-offset-3 col-xs-9">
							<button type="submit" class="btn btn-success">Submit<span class="glyphicon glyphicon-send"></span></button>
							</div>
							</div>
						</form>