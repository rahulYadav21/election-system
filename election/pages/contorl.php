<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Online Election</title>
	<link rel="stylesheet" type="text/css" href="../css/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/css/animate.css">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/jquery-3.4.1.js"></script>

	<style type="text/css">
		@font-face {
			  font-family: 'OpenSans-Light';
			  src:  url('../css/Open-Sans/OpenSans-Light.ttf');
			}
		body{
			font-family: OpenSans-Light;
		}
	</style>
</head>
<body>
	<div class="wraper">

		<div class="header_bar">
		<div class="row">
			<div class="col-12 col-lg-12 col-md-12 col-sm-12 cols">
				<img src="../img/logo2.png">
			</div>
		</div>
    <nav class="navbar navbar-default navigation-clean navigation">
        <div class="container">
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="../index.php">Home</a></li>
                    <li role="presentation"><a href="../index.php">About</a></li>
                    <li role="presentation"><a href="../index.php">Contact Us</a></li>
                </ul>
        	</div>
		</div>
	</nav>
	</div>

	<div class="register">
		<div class="jumbotron aboutjumbo reg">
			<h1>Register Now</h1>
			<h4>New Voter's can register here for Vote.</h4>
		</div>
		<div class="regin">
		<div class="col-md-12 col-lg-12 col-sm-12 colsn">
              			
              			<form action="code/user_registration_code.php" method="post" enctype="multipart/form-data" class="form-horizontal" >
							<div class="form-group">
							<label for="name" class="col-xs-3 control-label">Enrollment No. :</label>
							<div class="col-xs-9">
							<input type="text" class="form-control" id="first_name" name="enrollment_no" placeholder="First Name">
							</div>
							</div>
							<div class="form-group">
							<label for="name" class="col-xs-3 control-label">First Name :</label>
							<div class="col-xs-9">
							<input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
							</div>
							</div>
							<div class="form-group">
							<label for="name" class="col-xs-3 control-label">Last Name :</label>
							<div class="col-xs-9">
							<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
							</div>
							</div>
							<div class="form-group">
						      <label for="gender1" class="col-xs-3 control-label">Gender :</label>
						        <div class="col-sm-4">
						        <select class="form-control" name="gender" id="gender1">
						          <option>Male</option>
						          <option>Female</option>
						          <option>Other</option>
						        </select>
						        </div>
							</div>
							<div class="form-group">
							<label for="name" class="col-xs-3 control-label">Date of Birth :</label>
							<div class="col-xs-4">
							<input type="Date" class="form-control" name="dob"id="Father" name="Father">
							</div>
							</div>
							<div class="form-group">
							<label for="name" class="col-xs-3 control-label">Father Name :</label>
							<div class="col-xs-9">
							<input type="text" class="form-control" id="Father" name="father" placeholder="Father Name">
							</div>
							</div>
							<div class="form-group">
							<label for="name" class="col-xs-3 control-label">Mother Name :</label>
							<div class="col-xs-9">
							<input type="text" class="form-control" id="mother" name="mother" placeholder="Mother Name">
							</div>
							</div>							
							<div class="form-group">
							<label for="email" class="col-xs-3 control-label">Your Email :</label>
							<div class="col-xs-9">
							<input type="email" class="form-control" id="email" name="email" placeholder="Email">
							</div>
							</div>
							<div class="form-group">
							<label for="text" class="col-xs-3 control-label">Mobile Number :</label>
							<div class="col-xs-9">
							<input type="text" class="form-control" id="number" name="number" placeholder="Mobile Number">
							</div>
							</div>
							<div class="form-group">
							<label for="text" class="col-xs-3 control-label">Aadhar Number :</label>
							<div class="col-xs-9">
							<input type="text" class="form-control" id="aadharnumber" name="aadhar" placeholder="Aadhar Number">
							</div>
						</div>
							<div class="form-group">
							  <label for="Textarea" class="col-xs-3 control-label">Full Address(flat no./address/pincode) :</label>
							  <div class="col-xs-9">
							  <textarea class="form-control textarea" id="Textarea" rows="3" cols="40"name="address" placeholder="flat no./address/pincode"></textarea>
							</div>
							</div>
							<div class="form-group">
							<label for="state" class="col-xs-3 control-label">City :</label>
							<div class="col-xs-9">
							<input type="text" class="form-control" id="city" name="city" placeholder="City">
							</div>
							</div>
							<div class="form-group">
							<label for="state" class="col-xs-3 control-label">State :</label>
							<div class="col-xs-9">
							<input type="text" class="form-control" id="state" name="state" placeholder="State">
							</div>
							</div>
							<div class="form-group">
								<label for="state" class="col-xs-3 control-label">Photo :</label>
								<div class="col-xs-9">
								 <input type="file" class="form-control" name="file">
								</div>
							</div>
							<div class="form-group">
							<div class="col-xs-offset-3 col-xs-9">
							<button type="submit" class="btn btn-success">Submit<span class="glyphicon glyphicon-send"></span></button>
							</div>
							</div>
						</form>
              		</div>
              		</div>
	</div>
</div>
</body>
</html>