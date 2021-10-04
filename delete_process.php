<?php
include_once 'config.php';
$sql = "DELETE FROM payments WHERE orderid='" . $_GET["orderid"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>