<?Php
session_start();
include("../connection.php");
if($_SESSION['admin']=="")
{
session_destroy();
header("Location:admin.php?mzg=3");	
}
$id=$_REQUEST['id'];
include("../connection.php");
$query="select * from user_info where enrollment_no='$id'";
$res=$conn->query($query);
$row=$res->fetch_assoc();

?>
<title>Online Election</title>
	<link rel="stylesheet" type="text/css" href="../../css/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/css/animate.css">
	<link rel="stylesheet" type="text/css" href="../../style.css">
	<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../../js/jquery-3.4.1.js"></script>
<div class="register">
		<div class="jumbotron aboutjumbo reg">
			<h4>Admin can edit here VOters Deatails.</h4>
		</div>
		<div class="regin">
		<div class="col-md-12 col-lg-12 col-sm-12 colsn">
              			
              			<form action="../code/user_edit_code.php" method="post" enctype="multipart/form-data" class="form-horizontal" >
							<div class="form-group">
							<label for="name" class="col-xs-3 control-label">Enrollment No. :</label>
							<div class="col-xs-9">
							<input type="text" class="form-control" id="first_name" name="enrollment_no" value="<?php echo $row['enrollment_no'];  ?>">
							</div>
							</div>
							<div class="form-group">
							<label for="name" class="col-xs-3 control-label">First Name :</label>
							<div class="col-xs-9">
							<input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo $row['firstname']; ?>" >
							</div>
							</div>
							<div class="form-group">
							<label for="name" class="col-xs-3 control-label">Last Name :</label>
							<div class="col-xs-9">
							<input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo $row['lastname']; ?>" >
							</div>
							</div>
							<div class="form-group">
						      <label for="gender1" class="col-xs-3 control-label">Gender :</label>
						        <div class="col-sm-4">
						        <select class="form-control" value="<?php echo $row['firstname']; ?>" name="gender" id="gender1">
						          <option>Male</option>
						          <option>Female</option>
						          <option>Other</option>
						        </select>
						        </div>
							</div>
							<div class="form-group">
							<label for="name" class="col-xs-3 control-label">Date of Birth :</label>
							<div class="col-xs-4">
							<input type="Date" class="form-control" name="dob"id="Father" value="<?php echo $row['dob']; ?>" name="Father">
							</div>
							</div>
							<div class="form-group">
							<label for="name" class="col-xs-3 control-label">Father Name :</label>
							<div class="col-xs-9">
							<input type="text" class="form-control" id="Father" name="father" value="<?php echo $row['fname']; ?>" >
							</div>
							</div>
							<div class="form-group">
							<label for="name" class="col-xs-3 control-label">Mother Name :</label>
							<div class="col-xs-9">
							<input type="text" class="form-control" id="mother" name="mother" value="<?php echo $row['mname']; ?>" >
							</div>
							</div>							
							<div class="form-group">
							<label for="email" class="col-xs-3 control-label">Your Email :</label>
							<div class="col-xs-9">
							<input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>" >
							</div>
							</div>
							<div class="form-group">
							<label for="text" class="col-xs-3 control-label">Mobile Number :</label>
							<div class="col-xs-9">
							<input type="text" class="form-control" id="number" name="number" value="<?php echo $row['mobile']; ?>" >
							</div>
							</div>
							<div class="form-group">
							<label for="text" class="col-xs-3 control-label">Aadhar Number :</label>
							<div class="col-xs-9">
							<input type="text" class="form-control" id="aadharnumber" name="aadhar" value="<?php echo $row['aadhar']; ?>" >
							</div>
						</div>
							<div class="form-group">
							  <label for="Textarea" class="col-xs-3 control-label">Full Address(flat no./address/pincode) :</label>
							  <div class="col-xs-9">
							  <textarea class="form-control textarea" id="Textarea" rows="3" cols="40"name="address" placeholder="<?php echo $row['address']; ?>" ></textarea>
							</div>
							</div>
							<div class="form-group">
							<label for="state" class="col-xs-3 control-label">City :</label>
							<div class="col-xs-9">
							<input type="text" class="form-control" id="city" name="city" value="<?php echo $row['city']; ?>">
							</div>
							</div>
							<div class="form-group">
							<label for="state" class="col-xs-3 control-label">State :</label>
							<div class="col-xs-9">
							<input type="text" class="form-control" id="state" name="state" value="<?php echo $row['state']; ?>">
							</div>
							</div>
							<div class="form-group">
							<div class="col-xs-offset-3 col-xs-9">
							<button type="submit" class="btn btn-success">Update<span class="glyphicon glyphicon-send"></span></button>
							</div>
							</div>
						</form>
              		</div>
              		</div>