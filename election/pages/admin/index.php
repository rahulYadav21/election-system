<?php
session_start();
include("../connection.php");
if($_SESSION['admin']=="")
{
session_destroy();
header("Location:index.php?mzg=3");	
}


	

  $q2="select *from sstatus";

  $res2=$conn->query($q2);
    $row=$res2->fetch_assoc();

      
?>
 <script type="text/javascript">
        function tongleClass11() {
             
              if((<?php echo $row['sts'];?>)==0)
       {
          $("#sinbtn").attr("value", "Start Sign Up");
          	
          //$('#sin').off('click');
           }
       else{
       	$("#sinbtn").attr("value", "Stop Sign Up");
       	$("#sinbtn").css("background-color", "red");
       }
       }
         
        window.addEventListener('load',tongleClass11);
        
    </script>
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
			  src:url(../../css/Open-Sans/OpenSans-Light.ttf);
			}
		body{
			font-family: OpenSans-Light;
		}
		input[type=button]
		{
			margin-top:1px;
		}
		</style>
</head>
<body>
	<div class="wraper">

		<div class="header_bar">
		<div class="row">
			<div class="col-12 col-lg-12 col-md-12 col-sm-12 cols">
				<img class="logo" src="../../img/logo2.png">
			</div>
		</div>
		<nav class="navbar navbar-default navigation-clean navigation">
        <div class="container">
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="admin_logout.php">Log Out <span class="glyphicon glyphicon-log-out"></span></a></li>
                </ul>
        	</div>
		</div>
	</nav>
	</div>
	<div class="control_log container-fluid">
		<div class="col-12 col-lg-3 col-md-3 col-sm-3 cols clonss">
			<div class="log_header log_header_1">
				<center><h3>Manage Voter's</h3></center>
			</div>
			<div class="log_bottom">
				<center><h4>Manage Voter's<br><br>click on manage button</h4></center><br>
				<center><a href="manage_voters.php"><button class="btn btn-danger">Manage Voter's</button></a></center>
			</div>
		</div>
		<div class="col-12 col-lg-3 col-md-3 col-sm-3 cols clonss">
			<div class="log_header log_header_2">
				<center><h3>Manage Candidates's</h3></center>
			</div>
			<div class="log_bottom">
				<center><h4>Add/Manage Candidates's<br><br>click on manage button</h4></center><br>
				<center><div class="btn-group-vertical" role="group" aria-label="Basic example">
					<a href="add_candidate.php"><input type="button" class="btn btn-success" value="Add Candidate's"></a>
					<a href="manage_candidate.php"><input type="button" class="btn btn-success" value="Manage Candidate's"></a>
				</div>
			</center>
			</div>
		</div>
		<div class="col-12 col-lg-3 col-md-3 col-sm-3 cols clonss">
			<div class="log_header log_header_3">
				<center><h3>Conduct Election</h3></center>
			</div>
			<div class="log_bottom">
				<center><h4>Conduct Election<br><br>click on manage button</h4></center><br>
				<center><a href="conduct_election.php"><button class="btn btn-info">Conduct Election</button></a></center>
			</div>
		</div>
		<div class="col-12 col-lg-3 col-md-3 col-sm-3 cols clonss">
			<div class="log_header log_header_4">
				<center><h3>Election Details</h3></center>
			</div>
			<div class="log_bottom">
				<center><h4>Enter Election Details<br><br>click on manage button</h4></center><br>
				<center><a href="../admin/admin_details_add.php"><button class="btn btn-primary">Election Details</button></a></center>
			</div>
		</div>
		<div class="col-12 col-lg-3 col-md-3 col-sm-3 cols clonss">
			<div class="log_header log_header_5">
				<center><h3>Election Status</h3></center>
			</div>
			<div class="log_bottom">
				<center><h4>Know Election Status<br><br>click on button</h4></center><br>
				<center><div class="btn-group" role="group" aria-label="Basic example">
					<a href="startsin.php"><input type="button" class="btn btn-warning" value="Start Sign Up" id="sinbtn"></a>
				  <a href="voting_manage.php"><input type="button" class="btn btn-warning" value="Start Voting"></a>
				</div>
			</center>
			</div>
		</div>
		<div class="col-12 col-lg-3 col-md-3 col-sm-3 cols clonss">
			<div class="log_header log_header_6">
				<center><h3>Election Result</center>
			</div>
			<div class="log_bottom">
				<center><h4>Know Election Result<br><br>click on button</h4></center><br>
				<center><a href="#"><input type="submit" class="btn result_default" value="Click for Election Result "></a></center>
			</div>
		</div>
		<div class="col-12 col-lg-3 col-md-3 col-sm-3 cols clonss">
			<div class="log_header log_header_7">
				<center><h3>Manage Election Result's</h3></center>
			</div>
			<div class="log_bottom">
				<center><h4>Manage/Backup Election Result's<br><br>click on button</h4></center><br>
				<center><div class="btn-group" role="group" aria-label="Basic example">
					<a href="#"><input type="button" class="btn Manage_result" value="Manage Result's" id=""></a>
				  <a href="#"><input type="button" class="btn Manage_result" value="Backup Result's"></a>
				</div>
			</center>
			</div>
		</div>
		<div class="col-12 col-lg-3 col-md-3 col-sm-3 cols clonss">
			<div class="log_header log_header_8">
				<center><h3>Feadback & Complaint's</h3></center>
			</div>
			<div class="log_bottom">
				<center><h4>People's Feadback/Complaint's<br><br>click on button</h4></center><br>
				<center><a href="#"><input type="button" class="btn Manage_feadback" value="Feadback & Complaint's"></a></center>
			</div>
		</div>
	</div>
	
</div>
</body>
</html>