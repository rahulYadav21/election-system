<?php
session_start();
include("../connection.php");
if($_SESSION['admin']=="")
{
session_destroy();
header("Location:admin.php?mzg=3");	
}

include("../connection.php");
include("admin_header.php");
$query="select * from candidates";
$res=$conn->query($query);
?>
<center><h1>View  Candidate <h1></center>
<table class="table table-bordered">
	<thead>
<tr>
<th>Sr No.</th>
<th>Name</th>
<th>Date Of Birth</th>
<th>Full Address</th>
<th>Party Name</th>
<th>Email</th>
<th>Symbol</th>
<th>Photo</th>
<th>Number</th>
<th>Aadhar Id</th>
<th>Self discription</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</thead>
<?php
$coun;
$a=1;
while($row=$res->fetch_assoc())
{
?>
<tbody>
<tr>
	<td><?php echo $a; ?></td>
	<td><?php echo $row['name'];?></td>
	<td><?php echo $row['dob']; ?></td>
	<td><?php echo $row['faddress']; ?></td>
	<td><?php echo $row['party_name']; ?></td>
	<td><?php echo $row['email']; ?></td>
	<td><img src="../../pic/symbol/<?php echo $row['symbol']; ?>" height="100px" width="100px"/>
	</td>
	<td><img src="../../pic/candidate_pic/<?php echo $row['photo']; ?>" height="100px" width="100px"/></td>
	<td><?php echo $row['number']; ?></td>
	<td><?php echo $coun=$row['aadhar']; ?></td>
	<td><?php echo $row['seffdes']; ?></td>	
	<td><a href="edit_candidate.php?id=<?php echo $coun;?>">Edit</a></td>
	<td><a href="delete_candidate.php?id=<?php echo $coun;?>">Delete</a></td>
	</tr>
</tbody>
<?php
$a++;
}
?>
</table>
</div>
</div>
  
 
</body>
</html>