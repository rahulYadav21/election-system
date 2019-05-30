<?php
session_start();
if($_SESSION['user']=="")
{
session_destroy();
header("Location:../index.php?mzg=3");	
}

$enrollment_no=$_SESSION['user'];
//echo $enrollment_no;
include("connection.php");
$query="select * from candidates";
$res=$conn->query($query);
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
			  src:url(../css/Open-Sans/OpenSans-Light.ttf);
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
				<img class="logo" src="../img/logo2.png">
			</div>
		</div>
		<nav class="navbar navbar-default navigation-clean navigation">
        <div class="container">
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="voter_logout.php">Log Out <span class="glyphicon glyphicon-log-out"></span></a></li>
                </ul>
        	</div>
		</div>
	</nav>
	</div>
	<div class="voting_panel">
		<div class="voting_log">
		<caption><center><h1>Chose Your Candidate and Vote.</h1></center></caption>
			<table class="table table-bordered table-hover">
					<tr>
						<th width="5%">Sr.No.</th>
						<th>Name</th>				
						<th>Party Name</th>				
						<th>Election Symbol</th>
						<th>Show Detail's</th>				
						<th>Candidate</th>										
						<th width="10%">Vote Here</th>										
					</tr>
					<?php
			$a=1;
			while($row=$res->fetch_assoc())
			{
			?>
					<tr>
						<td><?php echo $a; ?></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['party_name']; ?></td>
						<td><img src="../pic/symbol/<?php echo $row['symbol']; ?>" height="70px" width="100px"></td>
						<td><a href="#">Show Details</a></td>
						<td><img src="../pic/candidate_pic/<?php echo $row['photo']; ?>" height="70px" width="100px"></td>
						<?php
						$query1="select enroll_id from votelist  where enroll_id='$enrollment_no'";
						$res1=$conn->query($query1);
						$row1=$res1->fetch_assoc();
						//echo $row1['myvote'];
						
						if($row1['enroll_id']=='')
						{
						?>
						<th><a href="code/vote_submit_code.php?cid=<?php  echo $row['aadhar']; ?>&&enid=<?php echo $enrollment_no;?>"><input type="button" value="Vote"></a></th>
						<?php
						}
						else
						{
							?>
							<th>You Have Already Voted!</th>
							<?php
						}
						?>
					</tr>			
			<?php
			$a++;
}
?>
</table>
		</div>
	</div>

</div>
</body>
</html>