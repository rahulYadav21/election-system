<?php include("../pages/connection.php"); ?>

<?php 
   $q1="select *from candidates";

   $res1=$conn->query($q1);
   
   $q2="select *from election";

   $res2=$conn->query($q2);

   $row2=$res2->fetch_assoc();


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
        table{
            text-align: center !important;
            color: gray;
            font-weight: bold;
        }
        table th{
            text-align: center !important;
            color: white;
            background-color: black;
        }
        .welle{
            background: linear-gradient(180deg, rgb(1, 17, 255),rgb(91, 58, 240),rgba(153, 110, 255, 0.397));
            color: white;
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
                    <li role="presentation"><a href="result.php">Election-Result</a></li>
                    <li role="presentation"><a href="admin/admin.php">Admin</a></li>
                </ul>
        	</div>
		</div>
	</nav>
	</div>

	<div class="register">
		<div class="well well-lg welle">
            <center><h1>Election Result</h1></center>
        </div>
        <div class="result">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th width="4%">Sr.No.</th>
                        <th width="12%">Election ID</th>
                        <th width="24%">Election Name</th>
                        <th width="30%">Candidate Name</th>
                        <th width="10%">Party Symbol</th>
                        <th width="10%">Candidate Photo</th>
                        <th width="10%">Total Vote</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                      $a=1;
                      while($row=$res1->fetch_assoc()){
                          
                          $ad=$row['aadhar'];

                          $q3="select *from votelist where aadhar='$ad'";
                           $rs=$conn->query($q3);
                            $num=$rs->num_rows;

                     ?>
                    <tr>
                        <td><?php echo $a;?></td>
                        <td><?php echo $row2['election_id'];?></td>
                        <td><?php echo $row2['election_name'];?></td>
                        <td><?php echo $row['name'];?></td>
                        <td><img src="../pic/symbol/<?php echo $row['symbol']; ?>" height="100px" width="100px"/></td>
                        <td><img src="../pic/candidate_pic/<?php echo $row['photo']; ?>" height="100px" width="100px"/></td>
                        <td><?php echo $num;?></td>
                    </tr>
                    <?php $a++;} ?>
                </tbody>
            </table>
        </div>
	</div>
    <div class="footer">
              		<div class="col-12 col-lg-12 col-md-12 col-sm-12">
              			<center>Onlineelection &copy; Copyright 2019</center>
              		</div>
              	</div>
</div>
</body>
</html>