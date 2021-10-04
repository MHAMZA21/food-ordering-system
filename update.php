<?php
include_once 'config.php';
$result = mysqli_query($conn,"SELECT * FROM payments");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Delete Customers data</title>
</head>
<body>
<table border="4">
<tr>
<td>Order-Id</td>
<td>First Name</td>
<td>Last Name</td>
<td>Food</td>
<td>Email id</td>
<td>Action</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="even";
else
$classname="odd";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row["orderid"]; ?></td>
<td><?php echo $row["firstname"]; ?></td>
<td><?php echo $row["lastname"]; ?></td>
<td><?php echo $row["food"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><a href="update_process.php?orderid=<?php echo $row["orderid"]; ?>">Update</a></td>
</tr>
<?php
$i++;
}
?>
</table>
</body>
</html>
