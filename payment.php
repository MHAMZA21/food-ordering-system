<?php
error_reporting(0);
$con = new mysqli("localhost", "root", "", "login",3308);

if($con == true){
printf("\n >> Record Inserted Successfully ...");

if(isset($_POST['sub'])){

      
        $name = $_POST['firstname'];
      
        $EMAIL=$_POST['email'];
        $ADDRESS=$_POST['address']; 
        $CITY=$_POST['city'];
        $STATE=$_POST['state'];
        $ZIP=$_POST['zip'];
        $cardname=$_POST['c_name'];
        $cardnumber=$_POST['c_number'];
        $expmonth=$_POST['month'];
        $expyear=$_POST['year'];
        $CCV=$_POST['ccv'];
        
           if($name==null){
            echo"
              <br><br>
              NULL VALUE INSERTED ....GO BACK 
              <br><br>
              ";
           }else if($cardnumber==NULL){
            echo "
            <br><br>
            card number is essential ...go BACK
            <br><br>
            ";
          }else{    
                      $query = "insert into addtocart (name,mail,address,city,state,zip,cardname,cardnumber,exp_month,exp_year,ccv) values ('$name','$EMAIL','$ADDRESS','$CITY','$STATE','$ZIP','$cardname','$cardnumber','$expmonth','$expyear','$CCV')";
                      mysqli_query($con,$query);
                      printf(" --> Record Inserted Successfully");
      }
    
     
    
   }
    else{
 echo "error in submission";
    }
       
  }
    
else{
 printf("\n >> Database not connected successfully ...");
}
    

    
  ?>