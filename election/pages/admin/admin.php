<?php
error_reporting(0);
session_start();
$msg=$_REQUEST['mzg'];
echo $msg;
if($msg==1)
{
	?>
	<script>
	alert("Logout Successfully");
	</script>
	<?php
}
if($msg==2)
{
	?>
	<script>
	alert("Invalid User Id Password");
	</script>
	<?php
}
if($msg==3)
{
	?>
	<script>
	alert("Login First");
	</script>
	<?php
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Online Election</title>
	<link rel="stylesheet" type="text/css" href="../../css/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/css/animate.css">
	<link rel="stylesheet" type="text/css" href="../../style.css">
	<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../../js/jquery-3.4.1.js"></script>

	<style type="text/css">
		@font-face {
			font-family: 'OpenSans-Light';
			src:  url('../../css/Open-Sans/OpenSans-Light.ttf');
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
				<img src="../../img/logo2.png">
			</div>
		</div>
    <nav class="navbar navbar-default navigation-clean navigation">
        <div class="container">
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="../../index.php">Home</a></li>
                    <li role="presentation"><a href="../../index.php">About</a></li>
                    <li role="presentation"><a href="../../index.php">Contact Us</a></li>
                    <li role="presentation"><a href="admin.php">Admin</a></li>
                </ul>
        	</div>
		</div>
	</nav>
	</div>

	<div class="register">
		<div class="jumbotron aboutjumbo reg">
			<h1>Admin Login</h1>
			<div class="admin_page">
			<div class="col-sm-12 col-lg-12 col-md-12 colsn colsan">
				<form action="../code/admin_login_code.php" method="post"class="form-horizontal">
							<div class="form-group">
							<label for="admin" class="col-xs-3 control-label">Admin ID</label>
							<div class="col-xs-9">
							<input type="text" class="form-control" id="admin" name="admin" placeholder="Admin ID">
							</div>
							</div>
							<div class="form-group">
							<label for="password" class="col-xs-3 control-label">Password</label>
							<div class="col-xs-9">
							<input type="password" class="form-control" id="password" name="password" placeholder="Password">
							</div>
							</div>						
							<div class="form-group">
							<div class="col-xs-offset-3 col-xs-9">
							<button type="submit" class="btn btn-success">Log In <span class="glyphicon glyphicon-log-in"></span></button>
							</div>
							</div>
						</form>
			</div>
		</div>
		</div>
	</div>
	
</div>
</body>
</html>