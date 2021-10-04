<?php
error_reporting(0);
$con = new mysqli("localhost", "root", "", "login", 3308);

if ($con == true) {
  printf("\n >> Record Inserted Successfully ...");

  if (isset($_POST['sub'])) {

    $EMAIL = $_POST['EMAIL'];
    $PASSWORD = $_POST['PASSWORD'];

    $repass = $_POST['repass'];



    if ($EMAIL == null) {
      echo "
              <br><br>
              NULL VALUE INSERTED ....GO BACK 
              <br><br>
              ";
    } else if ($PASSWORD != $repass) {
      echo "Re-password is not same ,try again..<br>";
    } else {

      $sql = "SELECT email FROM logged_data WHERE email = " . $EMAIL;
    $result=mysqli_query($con, $sql);

     if (mysqli_num_rows($result) > 0) {
        echo "There exists an customer with this mail ";
      }else{

        $query = "insert into logged_data (email,password,re_pass)values('$EMAIL','$PASSWORD','$repass')";
        mysqli_query($con, $query);
        printf(" <br>--> Record Inserted Successfully ....");
      }
    }


  } else
    echo "Form submission error";
} else
  printf("\n >> Database not connected successfully ...");
?>