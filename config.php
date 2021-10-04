<?php
$host='localhost';
$username='root';
$password='';
$dbname='food';
$conn=mysqli_connect($host,$username,$password,$dbname);
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
?>
