<?php
session_start();
include("connection.php");
if($_SESSION['user']=="")
{
session_destroy();
header("Location:../index.php?mzg=3");	
}
$enrollment_no=$_SESSION['user'];
$query="select * from user_info where enrollment_no='$enrollment_no'";
$res=$conn->query($query);
$row=$res->fetch_assoc();

?>

	
<?php 
  $q1="select *from votestate";

  $res1=$conn->query($q1);
    $row1=$res1->fetch_assoc();

      
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
			color:gray;
		}
	</style>


	<script type="text/javascript">
        function tongleClass() {
             $("#btnbtn").hide();
             $("#li2").css("color", "green");
             /*
              if((<?php echo $row['sts'];?>)==0)
       {
          $("#sinbtn").attr("value", "Start Sign Up");
          	$("#sinbtn").css("background-color", "green");
          //$('#sin').off('click');
           }
       else{
       	$("#sinbtn").attr("value", "Stop Sign Up");
       	$("#sinbtn").css("background-color", "red");
       }
       }
         */
        window.addEventListener('load',tongleClass);
        }
        function mfun(){

        	if((<?php echo $row1['sts'];?>)==0)
        	alert('voting not started yet');
        	return false;
        	else
        		return true;
        }

    </script>
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
	<div class="Main_log">
		<div class="voters_log">
			<div class="voters_log_1">
			<caption><center><h2>Voter's Detail</h2></center></caption>
			<table class="table table-bordered table-hover">
			<tr>
				<th>Name:</th>
				<td><?php echo $row['firstname'],$row['lastname'] ?></td>
				<td class="img" rowspan="5" colspan="2" ><img src="../pic/user/<?php echo $row['photo'];?>" height="210px" width="300px"></td>
			</tr>
			<tr>
				<th>Gender:</th>
				<td><?php echo $row['gender']; ?></td>
			</tr>
			<tr>
				<th>Date of Birth:</th>
				<td><?php echo $row['dob']; ?></td>
			</tr>
			<tr>
				<th>Aadhar NO:</th>
				<td><?php echo $row['aadhar']; ?></td>				
			</tr>
			<tr>
				<th>M. Number:</th>
				<td><?php echo $row['mobile']; ?></td>
			</tr>
		</table>
		<table class="table table-bordered table-hover">
			<tr>
				<th>Mother Name:</th>
				<td><?php echo $row['mname']; ?></td>	
				<th>Father Name:</th>
				<td><?php echo $row['fname']; ?></td>			
			</tr>
			<tr>
				<th>Email ID:</th>
				<td colspan="3"><?php echo $row['email']; ?></td>
			</tr>
			<tr>
				<th>State:</th>
				<td><?php echo $row['state']; ?></td>
				<th>City:</th>
				<td><?php echo $row['city']; ?></td>
			</tr>
		</table>		
		
	
	</div>
		</div>
		<div class="voting_details">
			<div class="Detail_log_1">
			<caption><center><h2>Voting Detail</h2></center></caption>
			<table class="table table-bordered table-hover">
			<tr>
				<th>Detail.</th>				
			</tr>				
			<tr>
				<td><?php
	$query1="select * from election";
	$res1=$conn->query($query1);
	$row1=$res1->fetch_assoc();
	$election_date=$row1['election_date'];
	$start_time=$row1['start_time'];
	$end_time=$row1['end_time'];
	$timezone=date_default_timezone_get();
date_default_timezone_set("Asia/Kolkata");
$a=date('Y-m-d');
$b=date('h:i:s A');
//secho $a,"</br>",$b,"</br>",$election_date,"</br>",$start_time,"</br>",$end_time;
if($a==$election_date)
{
	if($start_time<=$b)
	{
		if($end_time>=$b)
		{
			?>
			<?php
		}
		else
		{
			echo "<h1> election has end </h1>";
		}
	}
	else
	{
		echo "<h1> election has not start yet </h1>";
	}
}
else
{
	echo "<h1>Election is Conduct on <span>&#x0022;",$election_date,"&#x0022;</span> and Started From <span>&#x0022;",$start_time,"&#x0022;</span> O'Clock to End <span>&#x0022;",$end_time,"&#x0022;</span> O'Clock So Plz Vote on that Day</h1>";	
}
	?></td>
			</tr>		
		</table>
	</div>
		 </div>	
		 <div class="button_submit"><a href="voting_panel.php?enr=<?php echo $enrollment_no; ?>"><button id="btnbtn" class="btn btn-primary" onclick="return mfun()">Click Here for Vote</button></a></div> 	
	</div>
	
<div class="footer">
	<div class="col-12 col-lg-12 col-md-12 col-sm-12">
		<center>Onlineelection &copy; Copyright 2019</center>
	</div>
</div>

</div>
</body>
</html>