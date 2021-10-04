<?php
include_once 'config.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE payments set orderid='" . $_POST['orderid'] . "', firstname='" . $_POST['firstname'] . "', lastname='" . $_POST['lastname'] . "', food='" . $_POST['food'] . "' ,email='" . $_POST['email'] . "' WHERE orderid='" . $_POST['orderid'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM payments WHERE orderid='" . $_GET['orderid'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Payment Data</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="retrieve.php">Customers List</a>
</div>
Username: <br>
<input type="hidden" name="orderid" class="txtField" value="<?php echo $row['orderid']; ?>">
<input type="text" name="orderid"  value="<?php echo $row['orderid']; ?>">
<br>
First Name: <br>
<input type="text" name="firstname" class="txtField" value="<?php echo $row['firstname']; ?>">
<br>
Last Name :<br>
<input type="text" name="lastname" class="txtField" value="<?php echo $row['lastname']; ?>">
<br>
Food:<br>
<input type="text" name="food" class="txtField" value="<?php echo $row['food']; ?>">
<br>
Email:<br>
<input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>
