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
$query="select * from user_info";
$res=$conn->query($query);
?>
<center><h1>View voter<h1></center>
<table class="table table-bordered">
<thead>
<tr>
<th>Sr.No</th>
<th>Enrollment No</th>
<th>First Name</th>
<th>Last Name</th>
<th>Gender</th>
<th>Date Of Birth</th>
<th>Father Name</th>
<th>Mother Name</th>
<th>Email</th>
<th>Mobile</th>
<th>Aadhar No.</th>
<th>Address</th>
<th>City</th>
<th>State</th>
<th>Photo</th>
<th>Date</th>
<th>TIme</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</thead>
<?php
$a=1;
$en;
while($row=$res->fetch_assoc())
{
?>
<tbody>
<tr>
	<td><?php echo $a; ?></td>
	<td><?php echo $en=$row['enrollment_no']; ?></td>
	<td><?php echo $row['firstname']; ?></td>
	<td><?php echo $row['lastname']; ?></td>
	<td><?php echo $row['gender']; ?></td>
	<td><?php echo $row['dob']; ?></td>
	<td><?php echo $row['fname']; ?></td>
	<td><?php echo $row['mname']; ?></td>
	<td><?php echo $row['email']; ?></td>
	<td><?php echo $row['mobile']; ?></td>
	<td><?php echo $row['aadhar']; ?></td>
	<td><?php echo $row['address']; ?></td>
	<td><?php echo $row['city']; ?></td>
	<td><?php echo $row['state']; ?></td>
	<td><img src="../../pic/user/<?php echo $row['photo'] ?>" height="100px" width="100px"/></td>
	<td><?php echo $row['date']; ?></td>
	<td><?php echo $row['time']; ?></td>
	<td><a href="voter_edit.php?id=<?php echo $en;?>">Edit</a></td>
	<td><a href="delete_voter.php?id=<?php echo $en;?>">Delete</a></td>
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