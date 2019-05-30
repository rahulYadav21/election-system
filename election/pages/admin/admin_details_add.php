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
$query="select * from election";
$res=$conn->query($query);
?>
<center><h1>View  Election details <h1></center>
<table class="table table-bordered">
    <thead>
<tr>
<th>Sr No.</th>
<th>Election ID</th>
<th>Election Type</th>
<th>Election Name</th>
<th>Election Date</th>
<th>Start Time</th>
<th>End Time</th>
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
    <td><?php echo $coun=$row['election_id'];?></td>
    <td><?php echo $row['election_type']; ?></td>
    <td><?php echo $row['election_name']; ?></td>
    <td><?php echo $row['election_date']; ?></td>
    <td><?php echo $row['start_time']; ?></td>    
    <td><?php echo $row['end_time']; ?></td>    
    <td><a href="edit_ele_det.php?id=<?php echo $coun;?>">Edit</a></td>
    <td><a href="delete_ele_det.php?id=<?php echo $coun;?>">Delete</a></td>
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