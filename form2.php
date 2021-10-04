<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       h1{
           margin-left: 200px;
           color: #666;
       }
       table,td,th{
           margin-left: 200px;
           border: 1px solid green;
       }
       th{
           width: 150px;
           background-color: green; color: white;
       }
    </style>
</head>
<body>
    
    <h1>ORDERS</h1>
    <?php
    echo "<table>";
    echo "<tr>";
    echo "<th> FIRST NAME</th>";
    echo "<th> ORDERID </th>";
    echo "<th> ORDERNAME </th>";

    echo "</tr>";

    echo "<tr>";
    echo "<td>" .$_GET["txt_fname"] . "</td>";
    echo "<td>" .$_GET["txt_orderid"] . "</td>";
    echo "<td>" .$_GET["txt_order"] . "</td>";
    
    echo "</tr>";

    echo "</table>";
?>

    
    
</body>
</html>