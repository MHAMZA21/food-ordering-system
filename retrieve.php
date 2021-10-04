<?php
include_once 'config.php';
$result = mysqli_query($conn,"SELECT * FROM  payments
");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 <style>
 #hello{
  position: absolute;

left: 50%;

top: 50%;

transform: translate(-50%, -50%);

border: 5px solid #FFFF00;

padding: 10px;
 }
 </style>
 
 </head>
<body style="background-color: burlywood;">
<h1 style="background-color: greenyellow;" align="center">Customer-order DATABASE</h1>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <div id="hello">
  <table border="8">
  
  <tr style="background-color: cadetblue;">
    <td>First Name</td>
    <td>Last Name</td>
    <td>Food</td>
    <td>Email id</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr style="background-color: cadetblue;">
    <td><?php echo $row["firstname"]; ?></td>
    <td><?php echo $row["lastname"]; ?></td>
    <td><?php echo $row["food"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
  </div>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>
